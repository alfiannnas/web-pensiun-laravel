
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login User</title>
    <link rel="icon" href="logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  </head>
  <body class="bg-image-login" style="background-image: url('{{ asset('assets/images/bg-login.png') }}');">
    <div class="position-logo" id="bg">
      <img src="{{ asset('assets/images/logo-full.png') }}" alt="Logo Sistem Informasi!" width="125" />
    </div>
    <div class="radius">
      <div class="container-judul mb-5" style="max-width: 900px">
        <div class="judul-sikap">Sistem Informasi Pensiun</div>
        <div class="judul-deskripsi mt-3">"Nikmati Momen-Momen Bahagia di Masa Pensiunmu"</div>
      </div>
      <div class="wrap-login100" style="margin-top: 75px">
      <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group mt-3">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary px-5 mb-5 w-100 mt-3">LOGIN</button>
</form>

      </div>
    </div>
  </body>
</html>
