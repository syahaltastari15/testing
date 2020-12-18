@php
    $a = 1; $b =2; $c = 3; $d = 4; $e =0;
@endphp
       @foreach ($products->trainers as $trainer)

    <br>
    <br>
    <table style="margin-top: 5px;">
        <tr>
            <td>@if (!empty($trainer->photo))
                <img src="{{ asset('uploads/' . $trainer->photo) }}" style=" padding-top:10px;margin-right:35px;"alt="{{ $trainer->nama }}" width="100px" height="100px">
            @else
                <img src="http://via.placeholder.com/100x100" alt="{{ $trainer->nama }}">
            @endif
            </td>

            <td valign="middle"><h5 class="h1"><b>Penyampaian {{$trainer->full_name}} {{$trainer->occupation}} jelas dan mudah dimengerti?</b></h5></td>
        </tr>
    </table>
    <br>
    <br>
    <div class="form-group">
        <div class="rating">
            <input type='radio' name="penyampaian_rating[{{$trainer->id}}]" value='4' id="{{$a}}" required/> <label for="{{$a}}"></label>
            <input type='radio' name="penyampaian_rating[{{$trainer->id}}]" value='3' id="{{$b}}" required/> <label for="{{$b}}"></label>
            <input type='radio' name="penyampaian_rating[{{$trainer->id}}]" value='2' id="{{$c}}" required/> <label for="{{$c}}"></label>
            <input type='radio' name="penyampaian_rating[{{$trainer->id}}]" value='1' id="{{$d}}" required/> <label for="{{$d}}"></label>
        </div>
        @if ($errors->has('penyampaian_rating'))
        <small class="form-text text-danger">Please select one of these option.</small>
        @endif
        <br>
        <br>
        <br>
        <center><input type="text" class="form-input" name="komentar[{{$trainer->id}}]" id="suit" placeholder="Komentar Anda" required value="{{old('komentar')}}"></center>


        @php

        $a+=4;$b+=4;$c+=4;$d+=4;$e++;
        @endphp
        @endforeach







