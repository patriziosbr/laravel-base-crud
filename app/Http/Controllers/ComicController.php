<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::All(); //sostiture all con paginate(5) numero di records da viusalizzare

        return view("comics.index", compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dentro request arrivano i campi del form in forma chiave=>valore
        $data = $request->all();

        $comic = new Comic();
        $comic->title = $data['title'];
        $comic->series = $data['series'];
        $comic->type = $data['type'];
        $comic->price = $data['price'];
        $comic->sale_date = $data['sale_date'];
        $comic->thumb = $data['thumb'];
        $comic->description = $data['description'];
        $comic->save();

        // return redirect()->route('comics.index');
        return redirect()->route('comics.show', $comic->id); //mostra subito elemento creato
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        
        $comic = Comic::find($id); // alternativa fristOrFail($id)

        // dd($comic);
        if($comic) {
            return view("comics.show", compact('comic'));
        }

        abort(404); //o numero o 'stringa'

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        // $comic = Comic::find($id);

        return view("comics.edit", compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        // dump($data);
        // dd($id);

        // $comic = Comic::findOrFail($id);
        $comic->update($data);
        // return view("comics.show", compact('comic'));
        return redirect()->route('comics.show', $comic->id);
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
