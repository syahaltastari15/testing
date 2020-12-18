<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Product;
use DB;
use Carbon\Carbon;
use App\Models\Trainer;
use Validator;

class ParticipantController extends Controller
{
    public function index()
    {

    	$training_titles = Product::all();
        $participants = Participant::all();
    	return view('question.kuesioner',compact('training_titles','participants'));
    }



    public function create(Request $request)
    {

        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        date_default_timezone_set('Asia/Jakarta');
        $detail;

        if($request->sumber_informasi == "whatsapp/line" || $request->sumber_informasi == "asosiasi" || $request->sumber_informasi == "lainnya")
        {
            if ($request->detail3 !==null && $request->sumber_informasi == "whatsapp/line" )
            {
                $detail = $request->detail3;
                $request->request->add(['detail' => $detail]);
            }else if( $request->detail1 !==null &&  $request->sumber_informasi == "lainnya"){
                $detail = $request->detail1;
                $request->request->add(['detail' => $detail]);
            }else if( $request->detail2 !==null &&  $request->sumber_informasi == "asosiasi" ){
                $detail = $request->detail2;
                $request->request->add(['detail' => $detail]);
            }
        }

        $data = DB::table('product_trainer')->join('products', 'product_trainer.product_id', '=', 'products.id')
                                            ->where('product_trainer.product_id', '=', $request->training_title)
                                            ->select('product_trainer.trainer_id')
                                            ->count();
        if($request->sumber_informasi == "whatsapp/line" || $request->sumber_informasi == "asosiasi" || $request->sumber_informasi == "lainnya")
        {
            $rules = [
                'training_title' => 'required',
                'participant_name' => 'required',
                'sumber_informasi' => 'required',
                'detail' => 'required',
                'merekomendasikan'=> 'required',
                'request_pelatihan'=> 'required',
                'layanan_panitia_sikap'=> 'required',
                'layanan_panitia_kinerja_kualitas'=> 'required',
                'materi'=> 'required',
                'kesan'=> 'required'
                ];
        }else if($data > 1){
            $rules = [
                'training_title' => 'required',
                'participant_name' => 'required',
                'sumber_informasi' => 'required',
                'merekomendasikan'=> 'required',
                'request_pelatihan'=> 'required',
                'layanan_panitia_sikap'=> 'required',
                'layanan_panitia_kinerja_kualitas'=> 'required',
                'materi'=> 'required',
                'kesan'=> 'required',
                'penyampaian_rating' => 'required',
                'penyampaian_rating.*' => 'required'
                ];
            }else{
                $rules = [
                    'training_title' => 'required',
                    'participant_name' => 'required',
                    'sumber_informasi' => 'required',
                    'merekomendasikan'=> 'required',
                    'request_pelatihan'=> 'required',
                    'layanan_panitia_sikap'=> 'required',
                    'layanan_panitia_kinerja_kualitas'=> 'required',
                    'materi'=> 'required',
                    'kesan'=> 'required',
                    ];
            }

            $messsages = [
                'training_title.required'=>'Please select the training',
                'participant_name.required'=>'Please select your name',
                'sumber_informasi.required'=>'Please choose one of event information',
                'detail.required'=>'please fill in the details of event information',
                'merekomendasikan.required'=>'Please fill out recomendation field ',
                'request_pelatihan.required'=>'Please fill out the other training you need field',
                'layanan_panitia_sikap.required'=>'Please give us a star of Attitude',
                'layanan_panitia_kinerja_kualitas.required'=>'Please give us a star of Job Performance and Quality',
                'materi.required'=>'Please give us a star of training material',
                'kesan.required'=>'Please fill out impression field',
                'penyampaian_rating.*.required'=>'please give us a stars of the trainer delivery',
            ];
            $validator = Validator::make($request->all(), $rules,$messsages);

        if ($validator->passes()) {
            DB::table('product_participant')->where([
                    ['product_id', $request->training_title],
                    ['participant_id', $request->participant_name],
                    ])->update([
                        'sumber_informasi' => $request->sumber_informasi,
                        'merekomendasikan'=> $request->merekomendasikan,
                        'request_pelatihan'=> $request->request_pelatihan,
                        'layanan_panitia_sikap'=> $request->layanan_panitia_sikap,
                        'layanan_panitia_sikap_komentar'=> $request->layanan_panitia_sikap_komentar,
                        'layanan_panitia_kinerja_kualitas'=> $request->layanan_panitia_kinerja_kualitas,
                        'layanan_panitia_kinerja_kualitas_komentar'=> $request->layanan_panitia_kinerja_kualitas_komentar,
                        'materi'=> $request->materi,
                        'materi_komentar'=> $request->materi_komentar,
                        'kesan'=> $request->kesan,
                        'detail'=> $detail,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]);

            if($request->penyampaian_rating !== null){

            $trainers =  DB::table('product_trainer')->where('product_id', $request->training_title )->get();
            $products = Product::find($request->training_title);
            foreach ($products->trainers as $trainer) {
                $answers[] = [
                    'participant_id' => $request->participant_name,
                    'product_id'=> $request->training_title,
                    'trainer_id'=> $trainer->id,
                    'penyampaian_rating'=> $request->penyampaian_rating[$trainer->id],
                    'komentar'=> $request->komentar[$trainer->id],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];

            }
            $count = DB::table('trainer_ratings')->where('participant_id', $request->participant_name)
                                ->where('product_id',  $request->training_title)
                                ->count();
            if($count > 0){
                return response()->json(['warning'=>"you have already responsed before"]);
            }else{
                DB::table('trainer_ratings')->insert($answers);
            }
            return response()->json(['success'=>"Thankyou for your response"]);
        }
        return response()->json(['success'=>"Thankyou for your response"]);
    }
    	return response()->json(['error'=>$validator->errors()->all()]);
    }







    public function getTrainer(Request $request)
    {
        $id = $request->id;
        $data = DB::table('product_trainer')->join('products', 'product_trainer.product_id', '=', 'products.id')->where('product_trainer.product_id', '=', $id)->select('product_trainer.id')->first();
        $products =  Product::find($id);

        return view('dom.trainer',compact('id','products'));
    }

}
