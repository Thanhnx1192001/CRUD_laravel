<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormRequestAdmin;
use App\Models\StaffList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $StaffList = DB::table('StaffList')->select('*');
        $StaffList = $StaffList->get();
        // compact truyển dữ liệu sang 'admin'
        return view('/CRUD/admin',compact('StaffList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/CRUD/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRequestAdmin $FormRequestAdmin)
    {
        //
        $StaffList = new StaffList();
        $StaffList->fullName = $FormRequestAdmin->fullName;
        $StaffList->email = $FormRequestAdmin->email;
        $StaffList->position = $FormRequestAdmin->position;

        $StaffList->save();
        return redirect()->action([AdminController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $StaffList = StaffList::where('id', '=', $id)->select('*')->first();
        return view('/CRUD/read', compact('StaffList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $StaffList = StaffList::findOrFail($id);
        return view('/CRUD/edit', compact('StaffList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormRequestAdmin $FormRequestAdmin, $id)
    {
        //
        $StaffList = StaffList::find($id);
        $StaffList->fullName = $FormRequestAdmin->fullName;
        $StaffList->email = $FormRequestAdmin->email;
        $StaffList->position = $FormRequestAdmin->position;

        $StaffList->save();
        return redirect()->action([AdminController::class, 'index']);
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
        $StaffList = StaffList::find($id);

        $StaffList->delete();
        return redirect()->action([AdminController::class, 'index']);
    }

    public function search(Request $request){
        $searchTerm = $request->input('search');
        $products = StaffList::where('fullName', 'like', '%' . $searchTerm . '%')->get();
        return view('/CRUD/search', compact( 'products','searchTerm'));
    }

}
