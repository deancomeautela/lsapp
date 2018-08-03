<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href ="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'LSAPP')}}</title> 
    </head>
    
    <body>
            @include('inc.navbar')
           <!--  <h1> { {$title}} <h1> This allows variables to be passsed from the controller into views dynamically... wow 
            // also broke dynamic /posts route bc it didn't have a title variable-->
          
           
            <div class = "container">
            @include('inc.messages')
            @yield('content')
            </div>
            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'article-ckeditor' );
            </script>
    </body>
</html>
