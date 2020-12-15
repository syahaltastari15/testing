<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Data</title>

    <!-- Bootstrap CSS -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://kit.fontawesome.com/1d0c17521a.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <style>
        body {
            padding-top: 40px;
        }

        .box {
            width: 800px;
            margin: 0 auto;
        }

        .stars-outer {
  position: relative;
  display: inline-block;
}

.stars-inner {
  position: absolute;
  top: 0;
  left: 0;
  white-space: nowrap;
  overflow: hidden;
  width: 0;
}

.stars-outer::before {
  content: "\f005 \f005 \f005 \f005";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  color: #ccc;
}

.stars-inner::before {
  content: "\f005 \f005 \f005 \f005";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  color: #f8ce0b;
}

    </style>
</head>

<body>


    <!-- Data Peserta -->
    <div class="container" style="margin-top: 10px;">
        
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h5 >{{$products->training_title}}</h5>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Peserta</h3>
                    </div>
                    <div class="panel-body" align="center">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Peserta</th>
                                    <th scope="col">Merekomendasikan</th>
                                    <th scope="col">Request Pelatihan</th>
                                    <th scope="col">Kesan</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pp as $r)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>
                                        {{ $r->name }}
                                    </td>
                                    <td>
                                        {{$r->merekomendasikan}}
                                    </td>
                                    <td>
                                        {{ $r->request_pelatihan }}
                                    </td>
                                    <td>
                                        {{ $r->kesan }}
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#pesertaModal" data-id="{{$r->id}}" data-request_pelatihan="{{ $r->request_pelatihan }}"
                                            data-nama="{{$r->name}}" data-traning_title="{{ $r->training_title }}"
                                            data-merekomendasikan="{{$r->merekomendasikan}}" data-kesan="{{ $r->kesan }}">
                                            Lihat Detail
                                        </button>
                                    </td>
                                    
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {!! $pp->links() !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /dataPeserta-->

    <!-- pesertaModal -->
    <div class="modal fade" id="pesertaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Peserta title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><span id="nama_peserta"></span></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Merekomendasikan</td>
                        <td>:</td>
                        <td>
                            <span id="merekomendasikan">-</span>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>Kesan</td>
                        <td>:</td>
                        <td><span id="kesan"></span></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Request Pelatihan</td>
                        <td>:</td>
                        <td><span id="request_pelatihan"></span></td>
                    </tr>

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <!-- /pesertaModal -->

    <!-- CHART -->
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sumber Informasi</h3>
                    </div>
                    <div class="panel-body" align="center">

                        <div id="pie_chart" style="width:750px; height:450px;"></div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#chartModal">
                            Detail
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END-Chart-->

    <!-- ModalChart -->
    <div class="modal fade" id="chartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Peserta</th>
                                <th scope="col">Sumber Informasi</th>
                                <th scope="col">Detail</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pp as $r)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    {{ $r->name }}
                                </td>
                                <td>
                                    {{ $r->sumber_informasi }}
                                </td>
                                <td>
                                    @if($r->sumber_informasi == 'Lainnya')
                                    <p>{{ $r->detail }}</p>
                                    @elseif ( $r->sumber_informasi == 'whatsapp/line' ) <!--KUDU DIGANTI -->
                                    <p>{{ $r->detail }}</p>
                                    @elseif ( $r->sumber_informasi == 'Asosiasi / Organisasi' )
                                    <p>{{ $r->detail }}</p>
                                    @else
                                    <p> - </p>
                                    @endif
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <!-- /ModalChart -->

    <!-- Layanan Sikap Panitia-->
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-body" align="center">

                        <div class="review-rating">
                            <div class="clearfix"></div>
                            <div class="star">

                                <table class="">
                                
                                    <tr class="sikap">
                                      <td></td>
                                      <td>
                                        <div class="stars-outer">
                                          <div class="stars-inner"></div>
                                        </div>
                                        <span class="number-rating"></span>
                                      </td>
                                    </tr>
                                  
                                </table>
                                <br>
                                <span>{{ $rating1Count }} Menilai </span>
                            </div>
                            
                        </div>


                        <!-- Layanan Panitia modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#layananModal">
                            Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Layanan Sikap Panitia -->

    <!-- Layanan Sikap Panitia Modal -->
    <div class="modal fade" id="layananModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Layanan Sikap Panitia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peserta</th>
                                <th>Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pp as $p)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    {{ $p->name }}
                                </td>
                                <td>
                                    @if($p->layanan_panitia_sikap == '')
                                    <span class="btn btn-sm btn-warning col-md-8">Belum Ada Nilai</span>
                                    @elseif ( $p->layanan_panitia_sikap == 1 )
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    @elseif ( $p->layanan_panitia_sikap == 2 )
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    @elseif ( $p->layanan_panitia_sikap == 3 )
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    @else
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    @endif

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <!-- /Layanan Sikap PanitiaModal -->

    <!-- Layanan kinerja Panitia -->
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Layanan Kinerja Panitia</h3>
                    </div>
                    <div class="panel-body" align="center">

                        <div class="review-rating">

                            <span>{{ number_format($ratekinerja, 1) }}</span>
                            <span>/4</span>
                            <div class="clearfix"></div>
                            <div class="star">
                                <table class="">
                                
                                    <tr class="kinerja">
                                      <td></td>
                                      <td>
                                        <div class="stars-outer">
                                          <div class="stars-inner"></div>
                                        </div>
                                        <span class="number-rating"></span>
                                      </td>
                                    </tr>
                                  
                                </table>
                                <span>{{ $rating1Count }} Menilai </span>
                            </div>
                        </div>


                        <!-- Layanan Kinerja Panitia modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kinerjaModal">
                            Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Layanan kinerja Panitia -->

    <!-- Layanan Kinerja PanitiaModal -->
    <div class="modal fade" id="kinerjaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Layanan Kinerja Panitia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peserta</th>
                                <th>Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pp as $p)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    {{ $p->name }}
                                </td>
                                <td>
                                    @if($p->layanan_panitia_kinerja_kualitas == '')
                                    <span class="btn btn-sm btn-warning col-md-8">Belum Ada Nilai</span>
                                    @elseif ( $p->layanan_panitia_kinerja_kualitas == 1 )
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    @elseif ( $p->layanan_panitia_kinerja_kualitas == 2 )
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    @elseif ( $p->layanan_panitia_kinerja_kualitas == 3 )
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    @else
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    @endif

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <!-- /Layanan PanitiaModal -->

    <!--keteteapan materi -->
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Keteteapan Materi</h3>
                    </div>
                    <div class="panel-body" align="center">
                        <div class="review-rating">
                            <span>{{ number_format($ratemateri, 1) }}</span>
                            <span>/4</span>
                            <div class="clearfix"></div>
                            <div class="star">
                                <table class="">
                                
                                    <tr class="materi">
                                      <td></td>
                                      <td>
                                        <div class="stars-outer">
                                          <div class="stars-inner"></div>
                                        </div>
                                        <span class="number-rating"></span>
                                      </td>
                                    </tr>
                                  
                                </table>
                                <span>{{ $rating1Count }} Menilai </span>
                            </div>
                        </div>


                        <!-- keteteapan materi modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#materiModal">
                            Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /keteteapan materi -->

    <!-- keteteapan materiModal -->
    <div class="modal fade" id="materiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Layanan materi Panitia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peserta</th>
                                <th>Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pp as $p)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    {{ $p->name }}
                                </td>
                                <td>
                                    @if($p->materi == '')
                                    <span class="btn btn-sm btn-warning col-md-8">Belum Ada Nilai</span>
                                    @elseif ( $p->materi == 1 )
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    @elseif ( $p->materi == 2 )
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    @elseif ( $p->materi == 3 )
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    @else
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    <i class='fa fa-star fa-fw' style="color: #f8ce0b"></i>
                                    @endif

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <!-- /Layanan PanitiaModal -->

     <!-- Data Trainer -->
     <div class="container" style="margin-top: 10px;">
        
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Trainer</h3>
                    </div>
                    <div class="panel-body" align="center">

                                @foreach ($trainer_data as $r)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>
                                        {{ $r->full_name }}
                                    </td>
                                    <br>
                                </tr>
                                @endforeach
                                <br>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Peserta</th>
                                            @foreach ($trainer_data as $r)
                                                <th scope="col">{{$r->full_name}}</th>
                                            @endforeach
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pp as $r)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>
                                                {{ $r->name }}
                                            </td>
                                            @foreach ($trainer_data as $t)
                                            @php
                                                $q= App\Models\Trainer_rating::where([['participant_id',$r->participant_id],['trainer_id',$t->id]])->get();
                                               
                                                //  dd($q);
                                            @endphp
                                                <td scope="col">{{$q->avg('penyampaian_rating')}}</td>
                                            @endforeach
                                            
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2">Total</td>
                                                @foreach ($ratetrainer as $r)
                                                    <td>{{$r}} / 4</td>
                                                @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {!! $pp->links() !!}
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /dataTrainer-->


   

</body>

</html>


<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- App scripts -->
@yield('js')


<script>
    $('#pesertaModal').on('show.bs.modal', function(e){
   let button = $(e.relatedTarget)
   let data_id = button.data('id')   
   let nama_peserta = button.data('nama') 
   let merekomendasikan = button.data('merekomendasikan')
   let kesan = button.data('kesan')
   let request_pelatihan = button.data('request_pelatihan')
   let modal = $(this)
    
    if(merekomendasikan == ''){
        modal.find('.modal-body #merekomendasikan').text("-")
    }else{
        modal.find('.modal-body #merekomendasikan').text(merekomendasikan)
    }

    if(kesan == ''){
        modal.find('.modal-body #kesan').text("-")
    }else{
        modal.find('.modal-body #kesan').text(kesan) 
    } 

    if(request_pelatihan == ''){
        modal.find('.modal-body #request_pelatihan').text("-")
    }else{
        modal.find('.modal-body #request_pelatihan').text(request_pelatihan) 
    }
   modal.find('.modal-body #data_id').val(data_id) 
   modal.find('.modal-body #nama_peserta').text(nama_peserta)
   
   
})
</script>
<!-- star -->
<script type="text/javascript">
    // Initial Ratings
    var ratings=
    {
      sikap: <?php echo $ratelayanan; ?>,
      kinerja: <?php echo $ratekinerja; ?>,
      materi: <?php echo $ratemateri; ?>
                    
    }
         
    // Total Stars
    const starsTotal = 4;

    // Run getRatings when DOM loads
    document.addEventListener('DOMContentLoaded', getRatings);

    // Get ratings
    function getRatings() {
      for (let rating in ratings) {
        // Get percentage
        const starPercentage = (ratings[rating] / starsTotal) * 100;

        // Round to nearest 10
        const starPercentageRounded = `${Math.round(starPercentage / 10) * 10}%`;
        console.log(starPercentageRounded);
        // Set width of stars-inner to percentage
        document.querySelector(`.${rating} .stars-inner`).style.width = starPercentageRounded;

        
      }
    }
  </script>

<script>
    //Chart
    var analytics = <?php echo $sumber_informasi; ?>

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart()
    {
        var data = google.visualization.arrayToDataTable(analytics);
        var options = {
            title : 'Sumber Informasi'
        };
        var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
        chart.draw(data, options);
    }

</script>

