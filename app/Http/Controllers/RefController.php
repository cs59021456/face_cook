<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ref;
use Illuminate\Support\Facades\Auth;
class RefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ref::latest()->paginate(5);

        return view('ref.index',compact('data'))
            ->with('Ref', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ref.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ref = new Ref;
        $ref->user_id = auth::user()->id;
        $ref->intro =  $request->get('intro');
        $ref->save();

        return redirect()->route('ref.index')
                        ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $refs = ref::where('user_id',$id)->get();
        return view('ref.show',compact('refs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($item)
    {
        $refs=ref::where('id',$item)->first();
        return view('ref.edit',compact('refs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$item)
    {
        $request->validate([

            'intro' => 'required',
        ]);


        $item->update($request->all());
        return redirect()->route('ref.index')
                        ->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ref=ref::where('id',$id);
        $ref->delete();

        return redirect()->back()
                        ->with('success','Deleted successfully');
    }
}
