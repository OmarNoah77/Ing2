<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\hist_diagnosticos;

class hist_diagnosticosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = hist_diagnosticos::with('parent')->get();

        return view('admin.hist_diagnosticos.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hist_diagnosticos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        hist_diagnosticos::create($request->all());

        //return back()->withSuccess(trans('app.success_store'));
        return redirect()->route(ADMIN.'.hist_diagnosticos.index')->withSuccess(trans('app.success_store'));
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
        $item = hist_diagnosticos::findOrFail($id);

        return view('admin.hist_diagnosticos.edit', compact('item'));
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
        $item = hist_diagnosticos::findOrFail($id);
        $item->update($request->all());
        //return back()->withSuccess(trans('app.success_update'));
        return redirect()->route(ADMIN.'.hist_diagnosticos.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        hist_diagnosticos::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}
