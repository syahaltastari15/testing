<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IPB Training</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('Design/css/ceritaloka/ceritaloka.css') }}">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
</head>
<body>
    <nav class="navbar navbar-light bg-light" style="border-bottom: solid 3px grey">
        <!-- Navbar content -->
        <a class="navbar-brand">
            <img src="{{asset('Design/image/logo.png')}}" alt="logo" class="image">
        </a>
      </nav>
      <br>
      <div class="content">
        <div class="selamat">
          <h2>Selamat Datang di Portal Certiloka!</h2>
          <br>
          <br>
          <p>Temukan pengakuan atas sertifikat yang di terbitkan oleh IPB Training</p>
          <p>dengan memasukan kode sertifikat yang anda miliki lalu tekan tombol pencarian</p>
        </div>
        <br>
        <br>
        <form action="sertifikat/search">
        <div class="form-group">
            <input type="text" id="sertifikat" name="sertifikat_number" placeholder="Masukan nomor sertifikat" autocomplete="off">
            <i class="fa fa-search"></i>
        </div>
        </form>

      </div>
</body>
</html>

