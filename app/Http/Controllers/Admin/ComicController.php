<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ComicRequest;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
        // $request->validate([
        //     'title' => 'required|max:255',
        //     'description' => 'nullable',
        //     'thumb' => 'required|url',
        //     'price' => 'required|decimal:2|lt:1000',
        //     'series' => 'required',
        //     'sale_date' => 'required|date',
        //     'type' => 'required',
        //     'artists' => 'required',
        //     'writers' => 'required'
        // ]);
        
        $request->validated();

        $data = $request->all();

        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->artists = $data['artists'];
        $newComic->writers = $data['writers'];

        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {

        // $request->validate([
        //     'title' => 'required|max:255',
        //     'description' => 'nullable',
        //     'thumb' => 'required|url',
        //     'price' => 'required|decimal:2|lt:1000',
        //     'series' => 'required',
        //     'sale_date' => 'required|date',
        //     'type' => 'required',
        //     'artists' => 'required',
        //     'writers' => 'required'
        // ]);

        $request->validated();

        $data = $request->all();

        $comic->update($data);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
