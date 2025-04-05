<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorCreateRequest;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::with('books')->get(); 
    
        return view('authors.index', compact('authors'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    // Kitoblar ro'yxatini olish
    $books = Book::all();

    // 'authors.create' view'ga kitoblar ro'yxatini uzatish
    return view('authors.create', compact('books'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $author = Author::create([
        'name' => $request->name,
    ]);

    if ($request->has('books')) {
        $author->books()->attach($request->books); 
    }

    return redirect()->route('authors.index');
}

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $author = Author::findOrFail($id);
    
        return view('authors.show', compact('author'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Author::findOrFail($id);

        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
  
     public function update(Request $request, string $id)
     {
         $author = Author::findOrFail($id);
     
         $author->update([
             'name' => $request->name,
         ]);
     
         return redirect()->route('authors.index');
     }
     
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = Author::findOrFail($id); 
        $author->delete();
        return redirect()->route('authors.index');
    }
    }


    