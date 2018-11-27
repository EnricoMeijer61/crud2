<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gamedetail;

class GamedetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gamedetails = Gamedetail::latest()->paginate(5);
        return view('result.index', compact('gamedetails'))->with('i',(request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('result.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       request()->validate([
           'title' => 'required',
           'body' => 'required',
       ]);
       Gamedetail::create($request->all());
       return redirect()->route('result.index')->with('succes', 'Post created succesfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gamedetail = Gamedetail::find($id);
        return view('result.show', compact('gamedetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gamedetail = Gamedetail::find($id);
        return view('result.edit', compact('gamedetail'));
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
        request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        Gamedetail::find($id)->update($request->all());
        return redirect()->route('result.index')->with('succes', 'Post updated succesfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $gamedetail::find($id)->delete();
        return redirect()->route('result.index')->with('succes', ' RESult deleted');
    }
}
