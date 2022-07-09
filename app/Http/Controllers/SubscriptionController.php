<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use function MongoDB\BSON\toJSON;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|void
     *
     * @return string
     */
    public function store(Request $request)
    {
        Log::debug($request->post('data'));

        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email',

        ]);

//        $subscription = Subscription::create([
//            'first_name' => $validated['first_name'],
//            'last_name'  => $validated['last_name'],
//            'email'      => $validated['email'],
//        ]);

        $subscription = new Subscription();

        $subscription->first_name = $validated['first_name'];
        $subscription->last_name  = $validated['last_name'];
        $subscription->email      = $validated['email'];

        Mail::send('emails.SubsciptionMail', ['subscription' => $subscription], function ($m) use ($subscription) {

            $m->from('hello@lastminuteenglish.org', 'Last Minute English');
            $m->to($subscription->email, $subscription->first_name)->subject('Thank You For Your Subscription');
            $m->attach(storage_path('aa.pdf'), [
                'as' => 'Free IELTS Starter Pack - Last Minute English.pdf',
                'mime' => 'application/pdf',
            ]);
        });

        if (!$subscription) {
            return response()->json(
                ['success' => false]
            );
        }

        return response()->json(
            ['success' => true]
        );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        //
    }
}
