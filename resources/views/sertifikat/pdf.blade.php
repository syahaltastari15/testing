<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coba</title>


<style>
/* @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap'); */
/* @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap'); */
/*sertifikat*/

@font-face {
    font-family: 'Playfair Display';
    src: url({{ storage_path('fonts\PlayfairDisplay-VariableFont_wght.ttf') }}) format("truetype");
    font-weight: 400; // use the matching font-weight here ( 100, 200, 300, 400, etc).
    font-style: normal; // use the matching font-style here
}

.certiloka{
  position: relative;
  float: center;
}

.sertifikat{
  width: 1000px;
  height: 700px;
  margin: 15px;
}

.name{
  position: absolute;
  top: 240px;
  left: 25%;
  right: 25%;
  font-family: 'Playfair Display';
  font-size: 35px;
  }

.kursus{
  position: absolute;
  top: 310px;
  left: 25%;
  right: 25%;
  font-family: 'Nunito', sans-serif;
  font-size: 20px;
  }

.event{
  position: absolute;
  top: 340px;
  left: 25%;
  right: 25%;
  font-family: 'Nunito', sans-serif;
  font-size: 22px;
  }

.date{
  position: absolute;
  top: 400px;
  left: 25%;
  right: 25%;
  font-family: 'Nunito', sans-serif;
  font-size: 18px;
  color: #737373;
  font-style: italic;
  }

.qr{
  position: absolute;
  width: 120px;
  height: 120px;
  top: 490px;
  left: 42%;
}

.online {

    /* margin-top: 100px; */
}
.code{
  position: absolute;
  top: 649px;
  left: 25%;
  right: 25%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }

/*modul*/
.moduloka{
  position: relative;
  float: center;
}

.modul{
  width: 1000px;
  height: 700px;
  margin: 15px;
}

.skpb{
  position: absolute;
  top: 170px;
  left: 25%;
  right: 25%;
  font-family: 'Nunito', sans-serif;
  font-size: 14px;
  color: #737373;
  font-style: italic;
  }

.modul1{
  position: absolute;
  top: 235px;
  left: 29%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }

.menit1{
  position: absolute;
  top: 235px;
  left: 75%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }

.modul2{
  position: absolute;
  top: 280px;
  left: 29%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }

.menit2{
  position: absolute;
  top: 280px;
  left: 60%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }

.modul3{
  position: absolute;
  top: 325px;
  left: 29%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }

.menit3{
  position: absolute;
  top: 325px;
  left: 60%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }

.modul4{
  position: absolute;
  top: 370px;
  left: 29%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }

.menit4{
  position: absolute;
  top: 370px;
  left: 60%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }

.modul5{
  position: absolute;
  top: 415px;
  left: 29%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }

.menit5{
  position: absolute;
  top: 415px;
  left: 60%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }

.modul6{
  position: absolute;
  top: 460px;
  left: 29%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }

.menit6{
  position: absolute;
  top: 460px;
  left: 60%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }

  .modul7{
  position: absolute;
  top: 505px;
  left: 29%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }

.menit7{
  position: absolute;
  top: 505px;
  left: 60%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }


/*button*/
.btn {
  line-height: 30px;
  padding: 0 35px;
  cursor: pointer;
  background: #60C8DA;
  font-size: 20px;
  font-family: 'Nunito', sans-serif;
  color: #fff;
  font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
}

.btn--radius {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}

.btn--radius-2 {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
}

fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }
</style>

</head>
<body>
        <center><img class="sertifikat" src="{{ public_path('Design/image/sertifikat.png')}}"></center>
        <center><p class="name" ><b>{{$participant->name}}</b></label></center>
        <center><p class="event"><b>{{$product->training_title}}</b></label></center>
        <center><p class="date"><b>{{$data->tanggal}}</b></label></center>
        <center><img class="qr" src="https://chart.apis.google.com/chart?cht=qr&chs=350x350&chld=l|1&chl={{URL::full()}}"> </center>
        <center><p class="code"><b>{{$data->sertifikat_number}}</b></label></center>
<div class="moduloka">
    <center><img class="modul" src="{{ public_path('Design/image/modul1.png') }}" /></center>
    <center><p class="skpb"><b>SKPB Point with the Assignment Number:   {{$data->nomor_ketetapan_point}} {{$data->sertifikat_point}}  Point SKPB</b></label></center>
        <table>
            <tbody>
            @php
                $i = 1;
            @endphp
           @foreach ($product->topic as $topik)
                <tr>
                    <td>
                        <center><p class="modul{{$i}}"><b>{{$topik->topic_name}}</b></label></center>
                        <center><p class="menit{{$i}}"><b>{{$topik->duration}} Menit</b></label></center>
                    </td>
                </tr>
            @php
                $i++
            @endphp
            @endforeach
            </tbody>
        </table>
</div>

</body>
</html>



