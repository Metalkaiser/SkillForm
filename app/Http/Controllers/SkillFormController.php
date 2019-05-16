<?php

namespace App\Http\Controllers;

use App\SkillForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\facades\Redirect;

class SkillFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $name = $request['name'];
        $email = $request['email'];
        $skill = $request['comment'];
        $file = $request['photo'];
        if (empty($file)) {
            return Redirect::to('/')->with('message','Please enter your photo');
        }else {
            $filename = $request['photo']->getClientOriginalName();
        }
        if (empty($name)) {
            return Redirect::to('/')->with('message','Please enter your name');
        }elseif (empty($email)) {
            return Redirect::to('/')->with('message','Please enter your email');
        }elseif (empty($skill)) {
            return Redirect::to('/')->with('message','Please enter your skill description');
        }else {
            SkillForm::create([
            'name' => $name,
            'email' => $email,
            'skill' => $skill
        ]);
            Storage::disk('local')->put('public', $request['photo']);
            return Redirect::to('/')->with('message','Your data has been successfully uploaded');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SkillForm  $skillForm
     * @return \Illuminate\Http\Response
     */
    public function show(SkillForm $skillForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SkillForm  $skillForm
     * @return \Illuminate\Http\Response
     */
    public function edit(SkillForm $skillForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SkillForm  $skillForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SkillForm $skillForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SkillForm  $skillForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkillForm $skillForm)
    {
        //
    }
}
