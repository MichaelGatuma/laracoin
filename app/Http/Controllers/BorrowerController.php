<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrower;

class BorrowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $model)
    {
        return view('borrower.index', ['borrowers' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('borrower.create');
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
        'first_name'=>'required',
        'last_name'=>'required',
        //'nickname',
        'mobile_no'=>'required',
        'residence'=>'required',
        'coordinates',
        //'id_no',
        //'id_imageurl',
        //'photourl',
        //'signatureurl'
        ]);
        $borrower = new Borrower([
          'first_name' => $request->get('first_name'),
          'last_name'=> $request->get('last_name'),
          'nickname'=> $request->get('nickname'),
          'mobile_no'=> $request->get('mobile_no'),
          'residence'=> $request->get('residence'),
          'coordinates'=> $request->get('coordinates'),
          'id_no'=> $request->get('id_no'),
          'id_imageurl'=> $request->get('id_imageurl'),
          'photourl'=> $request->get('photourl'),
          'signatureurl'=> $request->get('signatureurl'),
        ]);
        $borrower->save();
        return redirect('/borrower')->with('success', 'Client has been added');
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
