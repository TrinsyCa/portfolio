<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ömer İslamoğlu Portfolio</title>

  @include('articles.meta')

  <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}?v={{ filemtime(public_path('assets/css/style.min.css')) }}">
</head>

<body>
  <main>
    @include('articles.sidebar')
    <div class="main-content">
        @include('articles.navbar')
        @include('articles.about')
        @include('articles.resume')
        @include('articles.portfolio')
        @include('articles.blog')
        @include('articles.contact')
    </div>
  </main>






  <!--
    - custom js link
  -->
  <script src="{{ asset('assets/js/script.min.js') }}?v={{ filemtime(public_path('assets/js/script.min.js')) }}"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
