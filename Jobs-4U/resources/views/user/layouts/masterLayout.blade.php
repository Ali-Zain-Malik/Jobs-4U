<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="boxicons/css/boxicons.min.css"> --}}
    <link rel="stylesheet" href="css/style.css">
    @stack('styles')
    <title>@yield('title')</title>
</head>

<body>
    @include('user.includes.header')

    <main>
        @yield("main")
    </main>



    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="myToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-body text-center" id="toast-inner">
            {{-- Message will be shown here --}}
          </div>
        </div>
      </div>

    @include('user.includes.footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
</body>
</html>