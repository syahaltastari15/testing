<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/Design/css/home/home.css')}}">
    <title>IPB Training</title>
    <style type="text/css">

</style>
</head>
<body>
	   <div class="topnav">
  			<a class="active" href="#ipb">IPBTraining.com</a>
  			<a href="#home">Home</a>
  			<a href="#contact">Contact</a>
  			<a href="#about">About</a>
    </div>
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Thankyou! <i class="fa fa-check" aria-hidden="true"></i></h4>
        <p>Have a nice day.</p>
    </div>
    @endif
    @if(session('warning'))
    <div class="alert alert-warning" role="alert">
        <h4 class="alert-heading">sorry <i class="fa fa-frown-o" aria-hidden="true"></i></h4>
        <p>you have responded before</p>
    </div>
	@endif
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="selamat-datang">
	<center><label><b>Selamat Datang!</b></label></center>
    </div>
    <div class="welcome">
	<center><label>Kami mengajak para peserta untuk memberikan pendapat mereka tentang kami.</label></center>
	<center><label>Isi kuisioner berikut untuk membantu IPB Training semakin lebih baik.</label></center>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form action="/kuesioner" method="get">
    <div class="p-t-15">
      <button class="btn btn--radius-2 btn--blue" type="submit">Isi Kuisioner</button>
    </div>
    </form>
</body>
</html>
