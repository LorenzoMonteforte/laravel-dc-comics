<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function validation($data){
        $validated = Validator::make($data, [
            "title" => "required|unique:books|min:3|max:50",
            "description" => "required",
            "thumb" => "required",
            "price" => "required|min:5|max:8",
            "series" => "required|min:3|max:50",
            "type" => "required|min:3|max:30"
        ], [
            "title.required" => "Titolo obbligatorio.",
            "title.unique" => "Titolo già esistente",
            "title.min" => "Lunghezza min 3 caratteri",
            "title.max" => "Lunghezza max 3 caratteri",

            "description.required" => "Descrizione obbligatoria.",
            
            "thumb.required" => "Percorso immagine obbligatorio.",
            
            "price.required" => "Prezzo obbligatorio.",
            "price.min" => "Lunghezza min 3 caratteri",
            "price.max" => "Lunghezza max 3 caratteri",

            "series.required" => "Serie obbligatoria.",
            "series.min" => "Lunghezza min 3 caratteri",
            "series.max" => "Lunghezza max 3 caratteri",

            "type.required" => "Tipo obbligatorio.",
            "type.min" => "Lunghezza min 3 caratteri",
            "type.max" => "Lunghezza max 3 caratteri",
        ])->validate();
        return $validated;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view("books.index", compact("books"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("books.bookInsert");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $dati_validati = $this->validation($data);
        $books = new Book();
        $books->title = $data["title"];
        $books->description = $data["description"];
        $books->thumb = $data["thumb"];
        $books->price = $data["price"];
        $books->series = $data["series"];
        $books->sale_date = $data["sale_date"];
        $books->type = $data["type"];
        $books->save();
        return redirect()->route("books.show", $books->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return view("books.bookShow", compact("book"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view("books.bookEdit", compact("book"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $book = Book::find($id);
        $book->update($data);
        return redirect()->route("books.show", $book->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route("books.index");
    }
}
