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
        return redirect(route('notes.show', [$note->id])); // тут надо использовать именованные маршруты. я из пока не знаю
    }

    public function edit($id) {
        $note = Note::findOrFail($id);
        return view('notes/edit', compact('note'));
    }

    public function update(Request $request, $id){

        $note = Note::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|min:5|max:100',
            'content' => 'required|min:10|max:500',
        ]);

        $note->update($validated);

        return redirect(route('notes.show', [$note->id]));
    }

    public function destroy($id) {
        Note::destroy($id);
        return redirect(route('notes.index'));
    }
}
