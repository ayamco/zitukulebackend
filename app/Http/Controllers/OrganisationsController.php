<?php

namespace App\Http\Controllers;
use App\Organisation;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use App\Role;
use App\User_Roles;

class OrganisationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organisations=Organisation::all();
       
        return view('organisations.index')->with('organisations',$organisations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('email', 'id');
        
        return view('organisations.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
        'name'=>'required',
        'cellnumber'=>'required',
        'emailaddress'=>'required',
        'physicaladdress'=>'required',
        'province'=>'required',
        'district'=>'required',
        'user_id'=>'required'
        ]);

        $organisation=new Organisation;
        $organisation->name=$request->input('name');
        $organisation->cellnumber=$request->input('cellnumber');
        $organisation->emailaddress=$request->input('emailaddress');
        $organisation->physicaladdress=$request->input('physicaladdress');
        $organisation->province=$request->input('province');
        $organisation->district=$request->input('district');
        $organisation->user_id=$request->input('user_id');
        $organisation->save();

        $role=Role::where('name', 'organisationadmin')->first();

        $userrole=new User_Roles();
        $userrole->user_id=$request->input('user_id');
        $userrole->role_id=$role->id;
        $userrole->save();

        return redirect('/organisations')->with('success','Organisation Saved');
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
