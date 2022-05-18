<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function edit(Request $request, $id)
    {
        $user = User::find($id);

        $data = $request->input();
        $validator = Validator::make($data, [
            'name' => 'required|min:3',
            'address' => 'required|min:3',
            'phone' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        if ($validator->fails()) {
            Session::flash('error', [
                'message' => 'You need to fill all fields',
                'status' => 'error'
            ]);
            return Redirect::back()->withInput()->exceptInput('password')->withErrors($validator->errors());
        }


        $user->name = $data['name'];
        $user->address = $data['address'];
        $user->phone = $data['phone'];
        $user->email = $data['email'];
        $user->tokens = $data['tokens'];
        $user->save();

        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Profile updated'
        ]);
        return Redirect::back();
    }
    public function editUser(Request $request)
    {

        $user = User::where('id', Auth::user()->id)->first();
        $data = $request->input();
        $validator = Validator::make($data, [
            'name' => 'required|min:3',
            'address' => 'required|min:3',
            'phone' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        if ($validator->fails()) {
            Session::flash('error', [
                'message' => 'You need to fill all fields',
                'status' => 'error'
            ]);
            return Redirect::back()->withInput()->exceptInput('password')->withErrors($validator->errors());
        }


        $user->name = $data['name'];
        $user->address = $data['address'];
        $user->phone = $data['phone'];
        $user->email = $data['email'];
        $user->save();

        Session::flash('success', [
            'status' => 'success',
            'message' => 'Profile updated'
        ]);
        return Redirect::back();
    }
    public function buytokens(Request $request)
    {

        $user = User::where('id', Auth::user()->id)->first();
        $data = $request->input();

        $user->tokens += $data['tokens'];
        $user->save();

        Session::flash('success', [
            'status' => 'success',
            'message' => 'Tokens added'
        ]);

        return Redirect::back();
    }
}