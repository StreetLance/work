<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MainController extends Controller
{


   function createOne()/** open form  */
    {
        return view('input.index2');
    }
    function createTwo()/** open form  */
    {
        return view('input.index3');
    }
    function store(Request $request) {
        // my data storage location is storage/app/worker.json file.
        try {
            $contactInfo = Storage::disk('local')->exists('worker.json') ? json_decode(Storage::disk('local')->get('worker.json')) : [];

            $inputData = $request->only(['Surname','Name','middle_name', 'Date_of_Birth', 'Date_of_employment','Department_head' ]);

            $inputData['datetime_submitted'] = date('Y-m-d H:i:s');

//            array_push($contactInfo,$inputData);

            Storage::disk('local')->append('worker.json', json_encode($inputData,0,2));

            return redirect(route('board..index'));

        } catch(Exception $e) {

            return ['error' => true, 'message' => $e->getMessage()];

        }
    }
    function store2(Request $request) {
        // my data storage location is storage/app/worker.json file.
        try {
//            $contactInfo = Storage::disk('local')->exists('worker3.json') ? json_decode(Storage::disk('local')->get('worker2.json')) : [];

            $inputData = $request->only(['Surname','Name','middle_name', 'Date_of_Birth', 'Date_of_employment', 'Department']);

            $inputData['datetime_submitted'] = date('Y-m-d H:i:s');

//            array_push($contactInfo,$inputData);

            Storage::disk('local')->append('worker2.json', json_encode($inputData,0,2));

            return redirect(route('board..index'));

        } catch(Exception $e) {

            return ['error' => true, 'message' => $e->getMessage()];

        }
    }
    function store3(Request $request) {
        // my data storage location is storage/app/worker.json file.
        try {
            $contactInfo = Storage::disk('local')->exists('worker3.json') ? json_decode(Storage::disk('local')->get('worker3.json')) : [];

            $inputData = $request->only(['Surname','Name','middle_name', 'Date_of_Birth', 'Date_of_employment','text_area']);

            $inputData['datetime_submitted'] = date('Y-m-d H:i:s');

//            array_push($contactInfo,$inputData);

            Storage::disk('local')->append('worker3.json', json_encode($inputData,0,2));

            return redirect(route('board..index'));

        } catch(Exception $e) {

            return ['error' => true, 'message' => $e->getMessage()];

        }
    }
}
