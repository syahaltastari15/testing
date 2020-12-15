<!DOCTYPE html>
<html>
<head>
	<title>Sertificate</title>
  <link rel="stylesheet" href="{{ asset('Design/css/sertifikat/style.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="certiloka">
		<center><img class="sertifikat" src="{{ asset('Design/image/sertifikat.png') }}" /></center>
                    <center><p class="name" style="margin-top: 30px"><b>{{$participant->name}}</b></label></center>
					<center><p class="kursus"  style="margin-top: 5px"><b>Online course</b></label></center>
					<center><p class="event"><b>{{$product->training_title}}</b></label></center>
                    <center><p class="date"><b>{{$data->tanggal}}</b></label></center>
					<center><img class="qr" src="https://chart.apis.google.com/chart?cht=qr&chs=350x350&chld=l|1&chl={{URL::full()}}"> </center>
					<center><p class="code"><b>{{$data->sertifikat_number}}</b></label></center>
	</div>
	<div class="moduloka">
		<center><img class="modul" src="{{ asset('Design/image/modul1.png') }}" /></center>
		<center><p class="skpb"><b>SKPB Point with the Assignment Number:   {{$data->nomor_ketetapan_point}} {{$data->sertifikat_point}}  Point SKPB</b></label></center>

          <table>
            <tbody>
              @php
                $i = 1;
              @endphp
              @foreach ($product->topic as $topik)
              <tr>
                <ul>
                <center><p class="modul{{$i}}"><b>{{$topik->topic_name}}</b></label></center>
                <center><p class="menit{{$i}}"><b>{{$topik->duration}} Menit</b></label></center>
                </ul>
              </tr>
              @php
                  $i++
              @endphp
               @endforeach

          </tbody>
          </table>
	</div>
	<br>
	<div class="p-t-15">
        <center>
          <a href="{{route('sertifikat.pdf', $data->sertifikat_number)}}" class="btn btn-primary" target="_blank">CETAK PDF</a>
          <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#exampleModal">Print Request</button>
        </center>
    </div>
  <br>



  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Print Request</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/sertifikat/sendemail" method="POST">
              {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Pemohon</label>
              <input type="text" name="nama_pemohon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama pemohon">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Handphone</label>
              <input type="text" name="nomor_handphone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor handphone">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Alamat Email</label>
                <input type="text" name="alamat_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat email">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Alamat Pengiriman Sertifikat</label>
                <textarea class="form-control" name="alamat_pengiriman_sertifikat" id="exampleFormControlTextarea1" rows="2" placeholder="Alamat pengiriman sertifikat"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Tujuan Permohonan Print Sertifikat</label>
                <textarea class="form-control" name="tujuan_permohonan" id="exampleFormControlTextarea1" rows="3" placeholder="Tujuan permohonan print sertifikat"></textarea>
            </div>

            <p><strong>Note:</strong> Biaya pengiriman sertifikat dibebankan kepada pemohon sesuai dengan biaya yang dibebankan oleh jasa kurir/ logistik</p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Send</button>
          </form>
        </div>
      </div>
    </div>
</body>
</html>
