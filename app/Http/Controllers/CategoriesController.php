<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->input();
        $validator = Validator::make($data, [
            'name' => 'required|min:3',
            'parent_id' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            Session::flash('alert', [
                'status' => 'error',
                'message' => 'Check the errors below'
            ]);
            return Redirect::back()->withInput()->withErrors($validator->errors());
        }

        $data['active'] = true;
        $category = New Category;
        $category->name = $data['name'];

        $category->save();


        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Category Created'
        ]);
        return view('admin.categories', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Request $request, $id)
    {
        $data = $request->input();
        $validator = Validator::make($data, [
            'name' => 'required|min:3',
            'parent_id' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            Session::flash('alert', [
                'status' => 'error',
                'message' => 'Check the errors below'
            ]);
            return Redirect::back()->withInput()->withErrors($validator->errors());
        }

        $data['active'] = true;
        $category = Category::find($id);
        $i = 1;
        $category->name = $data['name'];

        $category->save();


        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Category Updated'
        ]);
        return view('admin.categories', ['categories' => Category::all()]);
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
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('admin.categories')->with('success', 'Category deleted');
    }
}