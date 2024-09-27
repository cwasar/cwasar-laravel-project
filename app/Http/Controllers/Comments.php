<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Comment;
use Illuminate\Http\Request;

class Comments extends Controller
{

    public function store(Request $request)
    {
        $car = Car::findOrFail($request->id);
        $car->comments()->save(Comment::make($request->only('comment')));
        return redirect()->back();
    }
}
