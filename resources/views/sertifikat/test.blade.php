<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
  integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <title>Quisioner</title>
  <style>
    body {
      background-color: ;

    }
    .image {
      height: 50px;
    }
    .table {
      margin-top: -35px;
    }

   footer{
     position : relative;
     bottom : 0;
     width : 100%;
     height : 100px;
     background-color : #333;
    padding-top : 30px;
  }
  .content{
    text-align: center;
    padding-top: 5%;
  }
  .selamat h2{
    font-weight: bold;
    font-size: 50px;
    font-family:nunito;
  }
  .selamat p{
    font-size: 25px;
    font-family: playfair display;
  }
  input {
    outline: 0;
    border-width: 0 0 3px;
    width: 30%;
    text-align: center;
    border-color: black;
  }
  input:focus {
    border-color: black;
  }
  </style>
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
      <form>
          <input placeholder="Ketikan kode sertifikat disini" type="text" />
          <i class="fa fa-search"></i>
      </form>
    </div>




    <!-- Bootstrap Script -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
  integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
  crossorigin="anonymous"></script>

</body>
</html>
