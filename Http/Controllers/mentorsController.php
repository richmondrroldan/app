<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Skill;

use App\Mentor;

class mentorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentors = Mentor::all();
        return view('mentors.index', compact('mentors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills = Skill::all();
        return view('mentors.create', compact('skills'));
    }

    public function mSpec($skills_title){
        $mentors= Mentor::where('skills_title', '=', $skills_title)->get();
        return view('mentors.mentors', compact('mentors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required',
                'shortBio' => 'required',
                'skills_title',
            ]);
        Mentor::create($request->all());
        return redirect()->route('mentors.index')
            ->with('success','Mentor successfully added!');
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
        $skills = Skill::all();
        $mentors = Mentor::find($id);
        return view('mentors.edit', compact('mentors','skills'));
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
        $this->validate($request, [
                'name' => 'required',
                'shortBio' => 'required',
                'skills_title',
            ]);
        Mentor::find($id)->update($request->all());
        return redirect()->route('mentors.edit')
            ->with('success','Mentor details successfully edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mentor::find($id)->delete();
        return redirect()->route('mentors.index')
            ->with('success','Mentor successfully removed!');
    }
}
