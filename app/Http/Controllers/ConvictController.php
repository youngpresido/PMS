<?php

namespace App\Http\Controllers;
use App\User;
use App\Convict;
use Illuminate\Http\Request;
use Session;
class ConvictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warder=User::all();
        return view('warder.index',compact('warder'));
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
    public function store(Request $request)
    {
        $msg='';
        $warder=\App\User::whereId($request->name)->first();
        $warder->type=$request->type;
        // dd($warder);
        if($warder->save()){
            Session::flash('save', 'Updated Successfully');
            $msg="Updated Successfully";
        }else{
            $msg="not saved";
        }
        
        
        return redirect()->back()->with('msg', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Convict  $convict
     * @return \Illuminate\Http\Response
     */
    public function show(Convict $convict)
    {
        //
    }
    public function search(){

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Convict  $convict
     * @return \Illuminate\Http\Response
     */
    public function edit(Convict $convict)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Convict  $convict
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Convict $convict)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Convict  $convict
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convict $convict)
    {
        //
    }
}
