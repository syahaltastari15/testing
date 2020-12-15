<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Participant;
use App\Models\productParticipant;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SertifikatController extends Controller
{
    public function index(Request $request)
    {

        return view('sertifikat.search');
    }

    public function search(Request $request)
    {
        $data = null;
        $product = null;
        $participant = null;
        if($request->has('sertifikat_number')){
            $data = productParticipant::where('sertifikat_number', $request->sertifikat_number)->first();
            $product = Product::find($data->product_id);
            $participant = Participant::find($data->participant_id);
        }
        return view('sertifikat.sertifikat', compact('data','product','participant'));
    }

    public function send(Request $request)
    {
        $this->validate($request,[
            'nama_pemohon' => 'required',
            'nomor_handphone' => 'required|numeric',
            'alamat_email' => 'required|email',
            'alamat_pengiriman_sertifikat' => 'required',
            'tujuan_permohonan' => 'required',
        ]);

        $data = array(
            'nama_pemohon' => $request->nama_pemohon,
            'nomor_handphone' => $request->nomor_handphone,
            'alamat_email' => $request->alamat_email,
            'alamat_pengiriman_sertifikat' => $request->alamat_pengiriman_sertifikat,
            'tujuan_permohonan' => $request->tujuan_permohonan,
        );

        Mail::to('sahaltastari15@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Terimakasih request anda akan kami proses dalam 3 x 24 jam');

    }

    public function pdf(Request $request){
        $data = null;
        $product = null;
        $participant = null;
        $data = productParticipant::where('sertifikat_number', $request->sertifikat_number)->first();
        $product = Product::find($data->product_id);
        $participant = Participant::find($data->participant_id);

        $pdf = PDF::loadview('sertifikat.pdf',compact('data','product','participant'));
	    return $pdf->stream();
    }
}
