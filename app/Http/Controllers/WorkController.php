<?php

namespace App\Http\Controllers;
use App\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()/** read json */
    {
           if(Storage::disk('local')->exists('worker.json'))
           { $workers = json_decode(Storage::disk('local')->get('worker.json'),false,2);
        return view('otput.index' ,[
           'worker'=>$workers
           ]);}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()/** open form  */
    {
        return view('input.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
////        try {
//            // my data storage location is storage/app/worker.json file.
//            $contactInfo = Storage::disk('local')->exists('worker.json') ? json_decode(Storage::disk('local')->get('worker.json')) : [];
//
//            $inputData = $request->only(['name','email','message','subject']);// создается ассоциативный массив
//
//            $inputData['datetime_submitted'] = date('Y-m-d H:i:s');// дополняется датой генирации формы
//
//            array_push($contactInfo,$inputData);// добавляет ассоциативный массив в в коец инзначального массива
////        Storage::disk('local')->append('worker.json', $inputData);
////        Storage::disk('local')->append('worker.json', file_get_contents( json_encode($request->only(['name','email','message','subject']))));
//
//            Storage::disk('local')->put('worker.json', json_encode($contactInfo));// декодирет в json формат и загружается в файл
//            return redirect(route('board..index'));
//
////        } catch(Exception $e) {
//
//            return ['error' => true, 'message' => $e->getMessage()];
//
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
