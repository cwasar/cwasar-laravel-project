<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\Tags\Store as StoreRequest;
use App\Http\Requests\Tags\Update as UpdateRequest;

class Tags extends Controller
{

    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }


    public function create()
    {
        return view('tags.create');
    }


    public function store(StoreRequest $request)
    {
       Tag::create($request->validated());
        return redirect()->route('tags.index');
    }


    public function show(Tag $tag)
    {
        return view('tags.show', compact('tag'));
    }


    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }


    public function update(UpdateRequest $request, Tag $tag)
    {

        $tag->update($request->validated());
        return redirect()->route('tags.index');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index');
    }
}
