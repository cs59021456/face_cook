<?php

namespace App\Http\Controllers;

use App\Addmaterial;
use Illuminate\Http\Request;
use App\menu;
use auth;
use App\Ref;

class AddmaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Addmaterial::latest()->paginate(5);

        return view('addmaterial.index',compact('data'))
            ->with('addmaterials', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('addmaterial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_ref' => 'required',
            'name_ref' => 'required',
            'material' => 'required',
            'amount' => 'required',
            'unit' => 'required',


        ]);
        $request->user_id = auth::user()->id;
        Addmaterial::create($request->all());

        return redirect()->back()
                        ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Addmaterial  $addmaterial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $addmaterials = Addmaterial::where('id_ref',$id)->get();
        return view('addmaterial.show',compact('addmaterials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Addmaterial  $addmaterial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addmaterial=Addmaterial::where('id',$id)->first();

        return view('addmaterial.edit',compact('addmaterial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Addmaterial  $addmaterial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Addmaterial $addmaterial)
    {
        $request->validate([

            'material' => 'required',
            'amount' => 'required',
            'unit' => 'required',
        ]);


        $addmaterial->update($request->all());

        return redirect()->route('home')
                        ->with('success','Updated successfully')
                        ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Addmaterial  $addmaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $addmaterial=Addmaterial::where('id',$id);
        $addmaterial->delete();

        return redirect()->back()
                        ->with('success','Deleted successfully');
    }

    public function search(Request $request)
    {
       $category = $request->input('search');
        error_log($category);
         $data = Addmaterial::where('material', 'LIKE', '%' . $category . '%')->get();
       return view('addmaterial.index', compact('data'));

       //->orwhere('intro_ref', 'LIKE', '%' . $category . '%')->
       //orwhere('raw_material', 'LIKE', '%' . $category . '%')
    }

    public function menu(Request $request)
    {
       $category = $request->input('search');
        error_log($category);
         $data = menu::where('key_word', 'LIKE', '%' . $category . '%')->get();
       return view('view', compact('data'));
    }

    public function add($id)
    {
        $ref = Ref::find($id);
        return view('addmaterial.create',compact('ref'));
    }


}
