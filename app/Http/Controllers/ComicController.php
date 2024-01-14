<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View;
     */
    public function index()
    {
        //
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View;
     */
    public function create()
    {
        //
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(StoreComicRequest $request)
    {
        //

        $formData = $request->validated();
        $newComic = new Comic();
        $newComic->fill($formData);
        $newComic->sale_date = '2024-08-01';
        $newComic->series = 'random';

        $newComic->save();

        return to_route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic $comic;
     * @return \Illuminate\View\View;
     */
    public function show(Comic $comic)
    {
        //
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic $comic;
     *
     */
    public function edit(Comic $comic)
    {
        //
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic $comic;
     *
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {

        $formData = $request->validated();
        $comic->fill($formData);
        $comic->sale_date = '2024-08-01';
        $comic->series = 'random';

        $comic->update();
        return to_route('comics.show', $comic->id);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic $comic;
     *
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();
        return to_route('comics.index')->with('message', "Il prodotto '$comic->title' è stato eliminato");
    }

    private function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|min:3',
                'price' => 'required',
                'thumb' => 'url'
            ],
            [
                'title.required' => 'Il nome del titolo è obbligatorio',
                'title.min' => 'Il titolo deve avere almeno :min caratteri',
                'price.required' => 'Il prezzo è fortemente consigliato',
                'thumb.url' => 'L\'immagine deve contenere url valido',

            ]
        )->validate();
        return $validator;

    }

}
