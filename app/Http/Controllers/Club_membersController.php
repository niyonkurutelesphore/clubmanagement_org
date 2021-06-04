<?php

namespace App\Http\Controllers;

use App\Models\Club_members;
use Illuminate\Http\Request;

class Club_membersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $club_members = Club_members::latest()->paginate(5);

    

        return view('club_members.index',compact('club_members'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('club_members.create');
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

            'fname' => 'required',
            'lname' => 'required',
            'departement' => 'required',
            'level' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'address' => 'required',
            'club_name' => 'required',

        ]);

    

        Club_members::create($request->all());

     

        return redirect()->route('club_members.index')

                        ->with('success','Club_members created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club_members  $club_member
     * @return \Illuminate\Http\Response
     */
    public function show(Club_members $club_member)
    {
        return view('club_members.show',compact('club_member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club_members  $club_member
     * @return \Illuminate\Http\Response
     */
    public function edit(Club_members $club_member)
    {
        return view('club_members.edit',compact('club_member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club_members  $club_member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club_members $club_member)
    {
        $request->validate([

            'fname' => 'required',
            'lname' => 'required',
            'departement' => 'required',
            'level' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'address' => 'required',
            'club_name' => 'required',

        ]);

    

        $club_member->update($request->all());

    

        return redirect()->route('club_members.index')

                        ->with('success','club_member updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club_members  $club_member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club_members $club_member)
    {
        $club_member->delete();

    

        return redirect()->route('club_members.index')

                        ->with('success','club members deleted successfully');
    }
}
