<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookControler extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:150',
            'author' => 'required|string|max:150',
            'pages' => 'required|integer|min:1',
        ]);

        $book = new \App\Models\Books();
        $book->user_id = auth()->id(); // Assuming you have user authentication
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->pages = $request->input('pages');
        $book->save();
        return redirect()->route('dashboard');
    }

}
