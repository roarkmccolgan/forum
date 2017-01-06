<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://localhost/forum/public/favicon.ico">

    <style type="text/css">
      body { background: #c4c4c4 !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
    </style>

    <title>@yield('title')Wisconsin Forum</title>

    <!-- Bootstrap core CSS -->
    

     <link href="http://localhost/forum/public/css/bootstrap.css" rel="stylesheet">

    <link href="http://localhost/forum/public/css/style.css" rel="stylesheet">

    <link href="http://localhost/forum/public/css/slider.css" rel="stylesheet">

     <link href="http://localhost/forum/public/css/sweetalert.css" rel="stylesheet">

   <!-- <link href="http://localhost/forum/public/css/summernote.css" rel="stylesheet"> -->

<!-- include summernote css/js-->
<link href="http://localhost/forum/public/summernote/summernote.css" rel="stylesheet">

<!-- include libraries(jQuery, bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>


      <script>
        tinymce.init({
        selector: '#textarea'
        
      });
    </script>


  
   {{-- <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="body">
          <table summary id="up">
    
   <center>

            <a href="http://localhost/forum/public/" class="g" title="Wisconsin I.T Forum">Wisconsin Forum</a>

            @if( ! $currentUser )
            

            <li><a>Welcome, <b>Guest:</b></a></li>
            <li><a href="http://localhost/forum/public/">Home</a></li>
            <li><a href="{{ route('get_login')}}">Login</a></li>
            <li><a href="{{ route('get_register')}}">Register</a></li>

            @else

            <li><a> Welcome, {{ $currentUser->name }}</a></li>
            <li><a href="http://localhost/forum/public/">Home</a></li>
            <li><a href="{{ route('get_post')}}">Create New Topic</a></li>
            <li><a href="{{ route('get_logout')}}">Logout</a></li>

            @endif

        </table>
      </nav>
 </center>--}}

 <center id="clockDisplay"></center>


 @include('layouts.partials.nav')

    </head>

     <body onLoad="renderTime();">



  @yield ('page-content')

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://localhost/forum/public/js/bootstrap.min.js"></script>
    <script src="http://localhost/forum/public/js/sweetalert.min.js"></script>
    <script src="http://localhost/forum/public/js/script.js"></script>
    <script src="http://localhost/forum/public/summernote/summernote.js"></script>
   <!-- <script src="http://cdn.ckeditor.com/4.6.0/basic/ckeditor.js"></script>-->

    <script type="text/javascript">

      
    @if( notify()->ready() )

      swal({
        title: "{!! notify()->message() !!}",
        type: "{{ notify()->type() }}",
        @if( notify()->option('timer') )

          timer: "{{ notify()->option('timer') }}",
          showConfirmButton: false,

        @endif
        html: true
      });

      @endif

    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
              height: '200px',
              focus: true,
              placeholder: 'Content here...'

            });
        });
    </script>

   <!-- <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>-->



  </body>



</html>