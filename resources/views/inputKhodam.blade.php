<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="/img/logo.jpeg" alt="" width="60" height="48" class="d-inline-block align-text-top">
        <strong>Cek Khodam by Foxiblee</strong> 
      </a>
    </div>
  </nav>
  <body>
    <form action="{{ route('inputKhodam') }}" method="post">
        @csrf
        <input type="text" name="name" id="name">
        <button type="submit">Input Khodam</button>
    </form>
 </body>
</html>