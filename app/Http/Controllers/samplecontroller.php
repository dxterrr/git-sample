<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sampleModel;
use DB;

class samplecontroller extends Controller
{
    //
    public function home()
    {
        return view('folder/home');
    }

    public function about()
    {
        return view('folder/about');
    }

    public function login()
    {
        return view('folder/login');
    }

    public function image()
    {
        return view('folder/image');
    }

    public function table()
    {
        return view('folder/table');
    }

    //read
    public function list()
    {
        $sample = sampleModel::all();
        return view('folder/list' , ['sample_profile' => $sample]);
    }

    //edit
    public function edit(Request $request, $id)
    {
        $sample = sampleModel::find($id);
        $res =[
            'sample' => $sample,
            'lastname' => $sample -> Last_name
        ];
        return view('folder/edit' , $res);
    }
    
    //update
    public function update(Request $request, $id)
    {
        $data=[
            'First_name' => $request->input()['First_name'],
            'Middle_name' => $request->input()['Middle_name'],
            'Last_name' => $request->input()['Last_name'],
            'date_of_birth' => $request->input()['date_of_birth'],
            'age' => $request->input()['age'],
            'address' => $request->input()['address'],
        ];
        $update_sample = sampleModel:: where ('id', $id)->update($data);
        return redirect(route('list'))->with('status', 'Succesfully updated');
    }

    //delete
    public function delete($id)
    {
        $sample= sampleModel::find($id);
        $sample=delete($id);
        // DB::delete('DELETE FROM sample WHERE id= ?', [$id]);
        return redirect(route('list'))->with('status', 'Succesfully DELETED');
    }

    public function save (Request $request){
        $First_name = $request->input()['First_name'];
        $Middle_name = $request->input()['Middle_name'];
        $Last_name = $request->input()['Last_name'];
        $date_of_birth = $request->input()['date_of_birth'];
        $age = $request->input()['age'];
        $address = $request->input()['address'];

        $sample = new sampleModel;
        $sample['First_name'] = $First_name;
        $sample['Middle_name'] = $Middle_name;
        $sample['Last_name'] = $Last_name;
        $sample['date_of_birth'] = $date_of_birth;
        $sample['age'] = $age;
        $sample['address'] = $address;
        $sample->save();

        return view('folder/table');


    }



}
