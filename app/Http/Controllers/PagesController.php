<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use App\Models\Subscription;
use App\Models\User;
use http\Client\Response;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;
use function MongoDB\BSON\toJSON;

class PagesController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
   public function settings(Request $request)
   {
       $settings = DB::table('settings')->get();
       $categories = Category::all();

       return view('settings', ['settings' => $settings, 'categories' => $categories]);
   }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function settingsSave(Request $request)
    {
        $settings = ['udemy_link'];

        foreach ($settings as $setting) {

            if(($request->has($setting))) {

                DB::table('settings')
                    ->where('slug', $setting)
                    ->update(['value' => $request->$setting]);
            }
        }

        return redirect('settings');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function about(Request $request)
    {
        return view('about');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function contact(Request $request)
    {
        return view('contact');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function blog(Request $request)
    {
        $mainArticle = DB::table('posts')
            ->where('main', '=', true)
            ->first();

        if ($mainArticle != null) {

            $posts = DB::table('posts')
//                ->whereNot('main', '=', true)
                ->orderBy('created_at', 'desc')
                ->get();

        } else {
            $posts = DB::table('posts')
                ->orderBy('created_at', 'desc')
                ->get();

            $mainArticle = $posts->shift();
        }

        return view('blog', [
            'posts' => $posts,
            'mainArticle' => $mainArticle,
            'more' => ($posts->count() > 9)
        ]);
    }


    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function showProfile(Request $request)
    {
        return view('profile', ['user' => Auth::user()]);
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function saveProfile(Request $request)
    {
        $user = Auth::user();

        if ($request->hasFile('image')) {

            $newImageFileName = $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('images'), $newImageFileName);

            $user->profile_image = $newImageFileName;
        }

        $user->profession = $request->post('profession');
        $user->name       = $request->post('username');
        $user->name = $request->post('first_name');
        $user->last_name  = $request->post('last_name');
        $user->save();

        return view('profile', ['user' => Auth::user()]);
    }

    /**
     * @param  Request  $request
     * @return Application|Factory|View
     */
    public function subscriptions(Request $request)
    {
        return view ('subscriptions', ['subscriptions' => Subscription::all()]);
    }

    /**
     * @param  Request  $request
     * @return Application|Factory|View
     */
    public function addAuthor(Request $request)
    {
        return view ('add-author');
    }

    /**
     * @param  Request  $request
     * @return StreamedResponse
     */
    public function downloadBooklet(Request $request)
    {
        $headers = array(
            'Content-Type: application/pdf',
        );

        $filename = 'aa.pdf';

        return Storage::get($filename);

        return Storage::download($filename, 'Free IELTS Starter Pack - Last Minute English.pdf', $headers);
    }

    /**
     * @param  Request  $request
     *
     */
    public function downloadCheck(Request $request)
    {
        $downloadKey = $request->get('download_key');

        $user = User::find($downloadKey);

        if ($downloadKey == 'BGJXabzDSTviCDxuQTaj') {
            return json_encode([
                'success' => true,
                'download_secret' => 'iouelaknkl'
            ]);
        }

        return json_encode([
            'success' => false
        ]);
    }

    /**
     * @param  Request  $request
     * @return StreamedResponse
     */
    public function download(Request $request)
    {
        return view('download');
    }


    /**
     * @param  Request  $request
     */
    public function contactSupport(Request $request)
    {
        $data = [
            'first_name' => $request->get('first_name'),
            'last_name'  => $request->get('last_name'),
            'email'      => $request->get('email'),
            'content'      => $request->get('content')
        ];

        Mail::send('emails.SupportMail', ['data' => $data], function ($m) use ($data) {

            $m->from('hello@lastminuteenglish.org', 'Last Minute English');
            $m->to('markonisevic90@gmail.com', 'Support')->subject('Website Support');
            $m->replyTo($data['email'], $data['first_name'] . ' ' . $data['last_name']);
        });

        return response()->json(
            ['success' => true]
        );

    }

    /**
     * @param  Request  $request
     */
    public function Support(Request $request)
    {
        $data = [
            'first_name' => $request->get('first_name'),
            'last_name'  => $request->get('last_name'),
            'email'      => $request->get('email'),
            'content'    => $request->get('email')
        ];

        Mail::send('emails.SupportEmail', ['data' => $data], function ($m) use ($data) {

            $m->from('hello@lastminuteenglish.org', 'Last Minute English');
            $m->to('markonisevic90@gmail.com', $data['Support'])->subject('Website Support');
            $m->replyTo($data['email'], $data['first_name'] . ' ' . $data['last_name']);
        });

        return response()->json(
            ['success' => true]
        );

    }
}
