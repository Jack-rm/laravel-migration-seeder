<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Travel;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travels = Travel::all();
        return view('admin.travels.index', compact('travels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.travels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $data = $request->all();
    
            $travel = new Travel();
            $travel->fill($data);
            $travel->slug = Str::slug($travel->name, '-');
            $travel->save();
    
            return redirect()->route('admin.travels.show', compact('travel'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Travel $travel
     * @return \Illuminate\Http\Response
     */
    public function show(Travel $travel)
    {
        return view('admin.travels.show', compact('travel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Travel $travel)
    {
        return view("admin.travels.edit", compact('travel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travel $travel)
    {
        $data = $request->all();

        $travel->fill($data);
        $travel->slug = Str::slug($travel->name, '-');
        $travel->update();

        return redirect()->route('admin.travels.show', compact('travel'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travel $travel)
    {
        $travel->delete();

        return redirect()->route('admin.travels.index')->with("deleted_title", $travel->name )->with('alert-message', "$travel->name has been succesfully eliminated");
    }
}
