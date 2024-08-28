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
        $fields = $request->all(['title', 'content']);
        Note::create($fields);
    }
}
