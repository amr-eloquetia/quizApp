<?php

namespace App\Http\Controllers;

use App\Models\Medias;
use App\Models\Prizes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PrizesController extends Controller
{
    public function edit(Request $request, $id)
    {
        $data = $request->input();
        $validator = Validator::make($data, [
            'name' => 'required|min:3',
            'price' => 'required|min:3',
            'prize1' => 'required|min:3',
            'prize2' => 'required|min:3',
            'prize3' => 'required|min:3',
            'prize4' => 'required|min:3',
            'prize5' => 'required|min:3',
            'prize6' => 'required|min:3',
            'prize7' => 'required|min:3',
            'prize8' => 'required|min:3',
        ]);

        if ($validator->fails()) {
            Session::flash('alert', [
                'status' => 'error',
                'message' => 'Check the errors below'
            ]);
            return Redirect::back()->withInput()->withErrors($validator->errors());
        }

        $data['active'] = true;
        $prize = Prizes::find($id);
        $i = 1;
        foreach($request->file('images') as $key => $value){
            // dd($value);
            if($value != null){
                $media = new Medias();
                $media->prize_id = $prize->id;
                $name = $value->getClientOriginalName();
                $media->prize_name = $data['prize'.$i++];
                $path = $value->storeAs('public/prize_images', $name);
                $media->path = 'prize_images/'.$name;
                $media->save();
            }
        }
        // $name = $request->file('images')->getClientOriginalName();
        // $path = $request->file('images')->storeAs('public/prize_images', $name);
        // $media = Medias::create([
        //     'path' => "prize_images/$name",
        //     'prize_id' => $prize->id
        // ]);
        // $media->save();

        $prize->name = $data['name'];
        $prize->price = $data['price'];
        $prize->prize1 = $data['prize1'];
        $prize->prize2 = $data['prize2'];
        $prize->prize3 = $data['prize3'];
        $prize->prize4 = $data['prize4'];
        $prize->prize5 = $data['prize5'];
        $prize->prize6 = $data['prize6'];
        $prize->prize7 = $data['prize7'];
        $prize->prize8 = $data['prize8'];
        $prize->save();


        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Prize Updated'
        ]);
        return Redirect::back();
    }

    public function destroy($id)
    {
        $prize = Prizes::find($id);

        $prize->delete();

        return redirect()->route('dashboard.prizes')->with('success', 'Prize deleted');
    }
}