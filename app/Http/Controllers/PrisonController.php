<?php

namespace App\Http\Controllers;
use App\Convict;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests\PrisonRequest;

class PrisonController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth'); 
    }
    public function index()
    {
        $keyword=\Request::get('query');
        // dd($keyword);
        if($keyword=null || count($keyword)==0){
            $convicts =Convict::all();    
        }

        else{
           $convicts=Convict::where(
            'name','LIKE', "%$keyword%")
           ->orWhere('gender','LIKE', "%$keyword%")
           ->orWhere('state','LIKE',"%$keyword%")
           ->get();
         
        }
        
        return view('prisonslayout.index', compact('convicts',"keyword"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prisonslayout.prisoners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function get_pictures($picture, Request $request){
        if($request->hasFile($picture)){
            $filename=$request->file($picture)->getClientOriginalName();
            $filenameWithoutExt=pathinfo($filename, PATHINFO_FILENAME);
            $extension=$request->file($picture)->getClientOriginalExtension();
            $filenameToStore=$filenameWithoutExt.'_'.time().'.'.$extension;
            $request->file($picture)->storeAs('public/upload',$filenameToStore);
            return $filenameToStore;
        }
        else{
            return 'noimage.jpg';
        
        }
    }
    public function store(PrisonRequest $request)
    {
        $ppt=$this->get_pictures('ppix', $request);
        // sdd($ppt);
        $msg="";
        $convict=new Convict([
            'name'=>$request->name,
            'gender'=>$request->gender,
            'Nationality'=>$request->Nationality,
            'state'=>$request->state,
            'Address'=>$request->Address,
            'crime'=>$request->crime,
            'Verdict'=>$request->Verdict,
            'dateconvicted'=>$request->dateconvicted,
            'ppix'=>$ppt,
            'dob'=>$request->dob,
            'judge'=>$request->judge
        ]);
        if($convict->save()){
            Session::flash('save', 'Saved Successfully');
            $msg="Saved Successfully";
        }else{
            $msg="not saved";
        }
        
        
        return redirect()->back()->with('msg', $msg);

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $convict=Convict::whereId($id)->first();
        return view('prisonslayout.prisoners.prisoner_details',compact('convict'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
