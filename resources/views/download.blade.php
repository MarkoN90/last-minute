@extends('layouts.public')
@section('content')

@include('includes.footer')
    </div>
{{--    <script src="{{ asset('js/') }}/app.js"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        // $.ajax({
        //     url: '/download',
        //     success: function(data) {
        //         var blob=new Blob([data]);
        //         var link=document.createElement('a');
        //
        //         link.href=window.URL.createObjectURL(blob);
        //         link.download="booklet.pdf";
        //         link.click();
        //
        //         var fileURL = URL.createObjectURL(blob);
        //         var newWin = window.open(fileURL);
        //     }
        // });


        const params = new URLSearchParams(window.location.search)

        if(params.has('download_key')) {

            fetch('/downloadCheck?download_key=' + params.get('download_key'))
            .then(data => data.json())
            .then(data => {
                if (data.success === true) {
                    var link = document.createElement('a');
                    link.href = 'download/' + data.download_secret;
                    link.download = 'file.pdf';
                    link.dispatchEvent(new MouseEvent('click'));
                }
            })

        }
        console.log(params);
        //

    </script>
@endsection



