<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(3);

        $data = [
            'comic' => $comics,
        ];
            return view('guest.comics.comicsPage', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guest.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $formData = $request->all();

        // metodo 1
        // $comic = new Comic();
        // $comic->fill($formData);
        // $save = $comic->save();
        // ____________________

        // metodo 2
        $save = Comic::create($formData);
        // dd($save);
        return redirect()->route('guest.comics.show', $save->id); //TOFIX
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // dd($comic);
        return view('guest.comics.show', [
            // title = titolo pagina
            'title' => $comic->title,

            // item = singolo comic
            'item' => $comic,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('guest.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //aggiorna i valori modificati dal form in edit.blade
        $formData = $request->all();
        // dd($formData);
        $comic->update($formData);

        return redirect()->route('guest.comics.show', $comic->id); //TOFIX
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('guest.comics.comicsPage'); //TOFIX
    }
}
