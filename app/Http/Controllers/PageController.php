<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
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
