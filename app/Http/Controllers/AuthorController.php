<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorCreateRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorCreateRequest $request)
    {

        Author::create([
            'name' => $request->name, 
        ]);
    
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


    