<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validation($request);

        $comic = new Comic();

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = '$' . $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists = json_encode(array_map('trim', explode(',', $data['artists'])));
        $comic->writers = json_encode(array_map('trim', explode(',', $data['writers'])));

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $this->validation($request);

        // $comic->update($data);

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = '$' . $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists = json_encode(array_map('trim', explode(',', $data['artists'])));
        $comic->writers = json_encode(array_map('trim', explode(',', $data['writers'])));

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic = Comic::findOrFail($comic->id);

        $comic->delete();
        return redirect()->route('comics.index');
    }

    /**
     * Validate the request data.
     */
    public function validation(Request $request)
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|numeric|min:0',
            'series' => 'required|string|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:255',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ], [
            'title.required' => 'Title is required.',
            'description.required' => 'Description is required.',
            'thumb.required' => 'Thumbnail URL is required.',
            'thumb.url' => 'Thumbnail URL is not valid.',
            'price.required' => 'Price is required.',
            'price.numeric' => 'Price must be a number.',
            'price.min' => 'Price must be at least 0.',
            'series.required' => 'Series is required.',
            'sale_date.required' => 'Sale date is required.',
            'sale_date.date' => 'Sale date is not valid.',
            'type.required' => 'Type is required.',
            'artists.required' => 'Artists are required.',
            'writers.required' => 'Writers are required.',
        ]);
    }
}
