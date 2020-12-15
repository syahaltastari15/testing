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
</head>
<body>
    @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
    @endif
    <div class="d-flex justify-content-center">
        <div class="container pb-4">

        <h1>Sertifkat</h1>
        <label>Diberikan kepada</label>
        <h2>{{$participant->name}}</h2>
        <label>yang telah menyelesaikan</label>
        <h3>{{$product->training_title}}</h2>
        <label style="display: block">{{$data->tanggal}}</label>
        <label style="display: block">{{$data->sertifikat_number}}</label>
        <label>{{$data->nomor_ketetapan_point}}</label>
        <label>{{$data->sertifikat_point}}</label>
        </div>
        <div class="container">
            <h1>Modul Pembelajaran</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Judul Topik</th>
                        <th>Durasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product->topic as $topik)
                    <tr>
                        <th>{{$topik->topic_name}}</th>
                        <th>{{$topik->duration}} Menit</th>
                    </tr>
                    @endforeach
                </tbody>
                {!! QrCode::size(100)->generate( URL::full()); !!}


            </table>
            {{-- <img src="https://chart.apis.google.com/chart?cht=qr&chs=350x350&chld=l|1&chl={{URL::full()}}"> --}}
        </div>
    </div>



</body>
</html>
