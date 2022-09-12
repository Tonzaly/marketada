<?php

namespace App\Http\Controllers;


use App\Models\Marketadas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marketada = Marketadas::all();
        return view('welcome', [
            "marketada" => $marketada
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("insertmarket");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nameitem = $request->nameitem;
        $name = $request->name;
        $type = $request->type;
        $status = $request->status;

        $marketAda = new Marketadas();
        $marketAda->nameitem = $nameitem;
        $marketAda->name = $name;
        $marketAda->type = $type;
        $marketAda->status = $status;

        $marketAda->save();

        return redirect()->route('market.index');
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
        $marketadas = Marketadas::find($id);
        return view('edit', [
            "markketadas" => $marketadas
        ]);
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
        $marketadas = Marketadas::find($id)->update([
            "status" => $request->status,
            "name" => $request->name,
            "type" => $request->type,
        ]);
        return redirect()->route('market.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marketadas = Marketadas::find($id)->delete();
        return redirect()->route('market.index');
    }
}
