<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Carro;
use App\Http\Controllers\Controller;

class CarrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carros = Carro::all();

        return view("carros.index", ["carros"=> $carros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("carros.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $carro = new Carro();
            $carro->nome = $request->name;
            $carro->marca = $request->marca;
            $carro->preco = $request->preco;
            $carro->descricao = $request->descricao;

            $carro->save();

            return redirect("/carros");
        }
        catch(\Exception $err)
        {
            return redirect("/errors");
        }
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
        $carro = Carro::find($id);

        return view("carros.edit", ["carro"=> $carro]);
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
        try
        {
            $carro = Carro::find($id);

            $carro->nome = $request->name;
            $carro->marca = $request->marca;
            $carro->preco = $request->preco;
            $carro->descricao = $request->descricao;

            $carro->save();

            return redirect("/carros");
        }
        catch(\Exception $err)
        {
            return redirect("/errors");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carro = Carro::find($id);
        $carro->delete();

        return redirect("/carros");
    }
}
