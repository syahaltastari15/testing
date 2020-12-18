@extends('layouts.layout')
    @section('tittle', 'Kuesioner')
@section('content')

	<div class="main">
		<section class="inputnama">
			<div class="container">
				<div class="inputnama-content">
					<form method="post" id="err" name="err">
                        {{csrf_field()}}
                        <center><a href="/"><img alt="logo-ipbt" src="{{asset('/Design/image/Logo GSSI 2020_2.png')}}" height="100" width="100" href="#" /></a></center>
                        <br>
                        <h2 class="form-title"><center><b>Kuesioner Peserta</b></center></h2>

                        <br>
                        <div class="alert alert-danger print-error-msg" style="display:none" >
                            <ul></ul>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="h1"><b>Nama Kegiatan</b></label>
                            <div class="form-select" >
                                <select name="training_title" data-dependent="training_title" data-ajax-input="training_title" id="training_title" class="form-input">
                                    <option value=""></option>
                                    @foreach($training_titles as $training_title )
                                    <option value="{{$training_title->id}}">{{$training_title->training_title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <br>
                           <label class="h1"><b>Nama</b></label>

                           <div class="form-select" >
                            <select name="participant_name" id="participant_name" data-ajax-input="participant_name"  class="form-input" data-dependent="participant_name"  value="{{ old('participant_name') }}">

                            </select>
                           </div>
                           <br>
                           <br>
                           <div class="info-group">
                             <h2 class="h1"><b>Dari mana anda mengetahui informasi training ini?</b></h2>
                             <div class="form-group">
                                <label class="label"></label>
                                <p><input type="radio" name="sumber_informasi" data-ajax-input="sumber_informasi" value="Surat undangan resmi yang diterima oleh kantor saya / Invitation Letter" {{(old('sumber_informasi') == 'Surat undangan resmi yang diterima oleh kantor saya / Invitation Letter') ? 'checked' : ''}}/><label class="radio">  Surat undangan resmi yang diterima oleh kantor saya</label></p>

                                <p> <input type="radio" name="sumber_informasi" data-ajax-input="sumber_informasi" class="radio" value="web" {{(old('sumber_informasi') == 'web') ? 'checked' : ''}} /><label class="radio">  Web ipbtraining.com</label></p>

                                <p> <input type="radio" name="sumber_informasi" data-ajax-input="sumber_informasi" class="radio" value="linkedin" {{(old('sumber_informasi') == 'linkedin') ? 'checked' : ''}} /><label class="radio">  LinkedIn</label></p>

                                <p> <input type="radio" name="sumber_informasi" data-ajax-input="sumber_informasi" class="radio" value="facebook" {{(old('sumber_informasi') == 'facebook') ? 'checked' : ''}} /><label class="radio">  Facebook</label></p>

                                <p> <input type="radio" name="sumber_informasi" data-ajax-input="sumber_informasi" class="radio" value="whatsapp/line" {{(old('sumber_informasi') == 'whatsapp/line') ? 'checked' : ''}} /><label class="radio">  Whatsapp/Line</label></p>
                                <input type="text"  style="display:none;"   id="detailwhatsapp" class="form-lain" name="detail3" value="" placeholder="Nama (No Whatsapp/ID Line)"/></p>

                                <p> <input type="radio" name="sumber_informasi" data-ajax-input="sumber_informasi" class="radio" value="asosiasi" {{(old('sumber_informasi') == 'asosiasi') ? 'checked' : ''}} /><label class="radio">  Asosiasi/Organisasi</label></p>
                                <input type="text"  style="display:none;"   id="detailasosiasi" class="form-lain" name="detail2" value="" placeholder="Nama Asosiasi/Organisasi"/></p>

                                <p><input type="radio" name="sumber_informasi" data-ajax-input="sumber_informasi" class="radio" value="lainnya" {{(old('sumber_informasi') == 'lainnya') ? 'checked' : ''}} /><label class="radio">  Lainnya</label></p>
                                <input type="text"  style="display:none;"   id="lainnya" class="form-lain" name="detail1" value="" placeholder="Sumber Lainnya"  />

                                <div class="invalid-feedback" data-ajax-feedback="sumber_informasi"></div>

                            </div>
                           <br>
                           <br>
                           <b>
                           <hr width="100%" align="left">
                           <hr width="100%" align="left"></b>
                        <br>
                        <br>
						<div class="form-group">
                            <center><h2 class="h2"><b>Kesan anda mengikuti kegiatan ini adalah...</b></h2></center>
                            <label class="label"></label>
                            <center><textarea class="form-input" name="kesan" data-ajax-input="kesan" rows="3" cols="30" placeholder="Jawaban Anda" >{{old('kesan')}}</textarea></center>

                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="form-group">
                            <center><h1 class="h1"><b>Apakah anda merekomendasikan training ini untuk teman anda?</b></h1></center>
                            <br>
                            <center><input type="text" class="form-input" name="merekomendasikan" id="recommend" data-ajax-input="merekomendasikan" placeholder="Isi dengan nama dan no. Hp/E-mail teman anda" value="{{old('merekomendasikan')}}" /></center>

                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="form-group">
                            <center><h1 class="h1"><b>Tuliskan pelatihan lain yang anda butuhkan!</b></h1></center>
                            <label class="label"></label>
                            <br>
                            <center><input type="text" class="form-input" name="request_pelatihan" data-ajax-input="request_pelatihan" id="need" value="{{old('request_pelatihan')}}" placeholder="Jawaban Anda"/></center>

                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h2 class="form-title"><center><b>Pelayanan Panitia</b></center></h2>
                        <br>
                        <div class="form-group">
                            <center><h2 class="h2"><b>Sikap</b></h2></center>
                            <center><label class="label"></label></center>
                            <br>
                            <div class="rating">
                                <input type='radio' name='layanan_panitia_sikap' value='4' id="star1" {{(old('layanan_panitia_sikap') == '4') ? 'checked' : ''}}/> <label for="star1"></label>
                                <input type='radio' name='layanan_panitia_sikap' value='3' id="star2" {{(old('layanan_panitia_sikap') == '3') ? 'checked' : ''}}/> <label for="star2"></label>
                                <input type='radio' name='layanan_panitia_sikap' value='2' id="star3" {{(old('layanan_panitia_sikap') == '2') ? 'checked' : ''}}/> <label for="star3"></label>
                                <input type='radio' name='layanan_panitia_sikap' value='1' id="star4" {{(old('layanan_panitia_sikap') == '1') ? 'checked' : ''}}/> <label for="star4"></label>
                            </div>
                            <br>
                            <br>
                            <br>
                            <center><input type="text" class="form-star" name="layanan_panitia_sikap_komentar" id="attitude" placeholder="Komentar Anda" value="{{old('layanan_panitia_sikap_komentar')}}"/></center>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="form-group">
                            <center><h2 class="h2"><b>Kinerja dan Kualitas Pekerjaan</b></h2></center>
                            <center><label class="label"></label></center>
                            <br>
                            <div class="rating">
                                <input type='radio' name='layanan_panitia_kinerja_kualitas' value='4' id="star5" {{(old('layanan_panitia_kinerja_kualitas') == '4') ? 'checked' : ''}}/> <label for="star5"></label>
                                <input type='radio' name='layanan_panitia_kinerja_kualitas' value='3' id="star6" {{(old('layanan_panitia_kinerja_kualitas') == '3') ? 'checked' : ''}}/> <label for="star6"></label>
                                <input type='radio' name='layanan_panitia_kinerja_kualitas' value='2' id="star7" {{(old('layanan_panitia_kinerja_kualitas') == '2') ? 'checked' : ''}}/> <label for="star7"></label>
                                <input type='radio' name='layanan_panitia_kinerja_kualitas' value='1' id="star8" {{(old('layanan_panitia_kinerja_kualitas') == '1') ? 'checked' : ''}}/> <label for="star8"></label>
                            </div>
                            <br>
                            <br>
                            <br>

                            <center><input type="text" class="form-star" name="layanan_panitia_kinerja_kualitas_komentar" id="quality" placeholder="Komentar Anda" value="{{old('layanan_panitia_kinerja_kualitas_komentar')}}" /></center>
                        </div>
                        <br>
                        <br>
                        <br>

                        <div class="form-group">
                            <center><h2 class="h2"><b>Apakah materi pelatihan sesuai dengan kebutuhan kerja?</b></h2></center>
                            <h2 class="label"><center></center></h2>
                                <br>
                                <br>
                                <div class="rating">
                                    <input type='radio' name='materi' value='4' id="star9" {{(old('materi') == '4') ? 'checked' : ''}}/> <label for="star9"></label>
                                    <input type='radio' name='materi' value='3' id="star10" {{(old('materi') == '3') ? 'checked' : ''}}/> <label for="star10"></label>
                                    <input type='radio' name='materi' value='2' id="star11" {{(old('materi') == '2') ? 'checked' : ''}}/> <label for="star11"></label>
                                    <input type='radio' name='materi' value='1' id="star12" {{(old('materi') == '1') ? 'checked' : ''}}/> <label for="star12"></label>
                                </div>
                                <br>
                                <br>
                                <br>

                                <center><input type="text" class="form-star" name="materi_komentar" id="suit" placeholder="Komentar Anda" value="{{old('materi_komentar')}}"/></center>
                        </div>

                        <div id="trainers">

                        </div>
                        <br>
                            <div class="p-t-15">
                                &emsp;
                                <center>
                              <button class="btn btn--radius-2 btn--blue btn-submit" type="submit">Submit</button>
                              </center>
                            </div>
					</form>
				</div>
			</div>
		</section>
	</div>

  @endsection
  @section('js')



  <script>
    $('#training_title').on('change', function(e){
     console.log(e);

     var title = e.target.value;
     $.get('/ajax-name?title=' + title, function(data){
       $('#participant_name').empty();
       $('#participant_name').append('<option value="" disabled="true" selected>Select Name</option>');
       $.each(data, function(index, subcatObj){
         $('#participant_name').append('<option  value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
     });
   });

 });
 </script>

  <script>
      $('#training_title').on('change', function(e){
      const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
     console.log(e);
     var title = e.target.value;


     $.ajax({

         url:"/getTrainer",
         type:'get',
         data:{
             id : title,
             CSRF_TOKEN
         },
         success:function (data) {
             $('#trainers').empty();
             $("#trainers").html(data);
         }
     })
 });
  </script>




<script>
    $(document).ready(function(){
        $("input[type='radio']").change(function(){
            if($(this).val()=="lainnya")
            {
                $("#lainnya").show();

            }
            else
            {
                $("#lainnya").hide();

            }
            if($(this).val()=="whatsapp/line")
            {
                $("#detailwhatsapp").show();

            }
            else
            {
                $("#detailwhatsapp").hide();

            }
            if($(this).val()=="asosiasi")
            {
                $("#detailasosiasi").show();

            }
            else
            {
                $("#detailasosiasi").hide();

            }


        });
    });
</script>

<script type="text/javascript">


    $(document).ready(function() {
        $(".btn-submit").click(function(e){
            e.preventDefault();
                var datastring = $("#err").serialize();
            $.ajax({
                url: "/kuesioner",
                type:'POST',
                data: datastring,
                dataType: "json",
                success: function(data) {
                    if($.isEmptyObject(data.error) && $.isEmptyObject(data.warning)){
                        alert(data.success);
                        window.location.href="/";
                    }else if($.isEmptyObject(data.success) && $.isEmptyObject(data.warning)){
                        printErrorMsg(data.error);
                        $('html, body').animate({scrollTop:1},'50');
                    }else{
                        alert(data.warning);
                        window.location.href="/";
                    }
                }
            });


        });


        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });


</script>

<script>
    $("#training_title").select2({
        placeholder: 'Select Training',
        allowClear:true,
    });
</script>

<script>
    $("#participant_name").select2({
        placeholder: 'Select Your Name',
        allowClear:true,
    });
</script>
@endsection

