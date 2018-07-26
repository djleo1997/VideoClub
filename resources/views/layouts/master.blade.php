<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

      <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">

      <title>Video Club</title>

    </head>

    <body>
    	@include('partials.navbar')
      
      @include('flash::message')

      @yield('content')
      
      <footer class="" style="position: relative;" >
        <div class="py-5 bg-dark">
          <p class="m-0 text-center text-white">Copyright &copy; VideoClub 2018</p>

          <img class="d-flex justify-content-center w-50" src="{{ asset('img/Logo.png') }}" alt="Lyon Incode Logo">

        </div>

        <div class="p-2 bg-secondary">
          <p class="m-0 text-white">Lyon Incode - Copyright &copy;</p>
        </div>
        <!-- /.container -->
      </footer>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

      <script>
        $('#flash-overlay-modal').modal();
      </script>


    </body>
  </html>
