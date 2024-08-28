<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Post;
use Illuminate\Http\Request;

class Notes extends Controller
{
    public function index() {
        $notes = Note::all();
        return view('notes.index', ['notes' => $notes]);
    }

    public function show($id) {
        $note = Note::findOrFail($id);
        return view('notes.show', ['note' => $note]);
    }

    public function create() {
        return view('notes.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|min:5|max:100',
            'content' => 'required|min:10|max:500',
        ]);
        $note = Note::create($validated);
        return redirect("/notes/{$note->id}"); // тут надо использовать именованные маршруты. я из пока не знаю
    }
}
