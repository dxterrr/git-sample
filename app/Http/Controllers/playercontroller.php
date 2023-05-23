<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\playerModel;
use DB;

class playercontroller extends Controller
{

      //read
    //   public function index()
    //   {
    //       return view('CRUD/index');
    //   }

      public function add()
      {
          return view('CRUD/add');
      }

      public function playeredit()
      {
          return view('CRUD/playeredit');
      }

      //list
      public function index()
    {
        $player = playerModel::all();
        return view('CRUD/index' , ['player_profile' => $player]);
    }

    //edit
    public function edit(Request $request, $id)
    {
        $player = playerModel::find($id);
        $res =[
            'player' => $player,
            'playername' => $player -> fullname
        ];
        return view('CRUD/playeredit' , $res);
    }
    
    //update
     public function update(Request $request, $id)
     {
         $data=[
             'fullname' => $request->input()['fullname'],
             'ign' => $request->input()['ign'],
             'username' => $request->input()['username'],
             'password' => $request->input()['password'],
         ];
         $update_player = playerModel:: where ('id', $id)->update($data);
         return redirect(route('index'))->with('status', 'Succesfully updated');
     }

      //delete
    public function die($id)
    {
        $player= playerModel::find($id);
        DB::delete('DELETE FROM player WHERE id= ?', [$id]);
        return redirect(route('index'));
    }

     public function savee (Request $request){
        $fullname = $request->input()['fullname'];
        $ign = $request->input()['ign'];
        $username = $request->input()['username'];
        $password = $request->input()['password'];

        $player = new playerModel;
        $player['fullname'] = $fullname;
        $player['ign'] = $ign;
        $player['username'] = $username;
        $player['password'] = $password;
        $player->save();

        return view('CRUD/add');


     }
  
}
