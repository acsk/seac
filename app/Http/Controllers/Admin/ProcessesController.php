<?php

namespace App\Http\Controllers\Admin;

use App\Processes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessesRequest;

class ProcessesController extends Controller
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
        return view('admin.processos.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProcessesRequest $request)
    {
      $request->validated();
      $newName =  sha1($request['ata']->getClientOriginalName()).
                  uniqid().'.'.$request['ata']->getClientOriginalExtension();

      $request['ata']->move(public_path('atas'), $newName);

      $processData = $request->all();
      $processData['ata'] = $newName;

      $process = new Processes();

      $process->create($processData);

      return redirect()->route('home');

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
    public function edit(Processes $processo)
    {
        //
        return view('admin.processos.show', compact('processo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProcessesRequest $request, $id)
    {
      $request->validated();
      $processData = $request->all();
      $process = Processes::findOrFail($id);
      $process->update($processData);
      return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $process = Processes::findOrFail($id);
      $process->delete();
      return redirect()->route('home');
    }
}
