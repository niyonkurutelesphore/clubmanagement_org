<?php

namespace App\Http\Controllers;
use App\Models\loginUser;
use App\Models\Clubs;
use Illuminate\Http\Request;

class ClubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      
        $clubs = Clubs::latest()->paginate(5);

    

        return view('clubs.index',compact('clubs'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clubs.create');
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

            'name' => 'required',

            'address' => 'required',
            'head_of_club' => 'required',


        ]);

    

        Clubs::create($request->all());

     

        return redirect()->route('clubs.index')

                        ->with('success','Clubs created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clubs  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Clubs $club)
    {
        return view('clubs.show',compact('club'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clubs  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Clubs $club)
    {
        return view('clubs.edit',compact('club'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clubs  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clubs $club)
    {
       
        $request->validate([

            'name' => 'required',

            'address' => 'required',
            'head_of_club' => 'required',

        ]);

    

        $club->update($request->all());

    

        return redirect()->route('clubs.index')

                        ->with('success','club updated successfully');

      
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clubs  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clubs $club)
    
    {

        $club->delete();

    

        return redirect()->route('clubs.index')

                        ->with('success','Clubs deleted successfully');

    }

}