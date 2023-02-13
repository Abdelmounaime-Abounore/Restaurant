<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;
use DB; 

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::all();
        return view('home',['meals'=>$meals]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertform()
    {
        return view('add-meals');
    }
    
    public function store(Request $request)
    {
        $data = new Meal;
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jbg,gif,svg',
        ]);
        $data->name = $request->input('name');
        $data->category = $request->input('category');
        $data->description = $request->input('description');
        $data->price = $request->input('price');
        if($image = $request->file('photo')) {
            $image_path = 'image/';
            $image_name = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($image_path, $image_name);
            $data->photo =$image_name;
        } 
        $data->save();
        return redirect()
            ->route('meals.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Meal $meal)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Meal::find($id);
        $data->delete();
        return redirect()
            ->route('meals.index');
    }

    public function showData($id) {
        $data = Meal::find($id);
        return view('edit-meal', ['data'=>$data]);
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jbg,gif,svg',
        ]);
        $data = Meal::find($request->id);
        $data->name = $request->name;       
        $data->	category = $request->category;       
        $data->description = $request->description;       
        $data->price = $request->price;       
        if($image = $request->file('photo')) {
            $image_path = 'image/';
            $image_name = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($image_path, $image_name);
            $data->photo =$image_name;
        }      
        $data->save();
        return redirect()
            ->route('meals.index');
    }
}
