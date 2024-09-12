<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\Cars\Save as CarsSaveRequest;

class Cars extends Controller
{
    public function index() {
        $cars = Car::all();
        $transmission = config('car-props.transmission');
        return view('cars.index', compact('cars', 'transmission'));
    }
    public function create() {
        $transmission = config('car-props.transmission');
        return view('cars.create', compact('transmission'));
    }
    public function store(CarsSaveRequest $request) {
        $car = Car::create($request->validated());
        return redirect("/cars/{$car->id}");
    }
    public function show($id) {
        $car = Car::findOrFail($id);
        $transmission = config('car-props.transmission');
        return view('cars.show', compact('car', 'transmission'));
    }
    public function edit(String $id) {
        $car = Car::findOrFail($id);
        $transmission = config('car-props.transmission');
        return view('cars.edit', compact('car', 'transmission'));
    }
    public function update(CarsSaveRequest $request, $id) {
        $car = Car::findOrFail($id);
        $car->update($request->validated());
        return redirect(route('cars.show', [$car->id]));
    }
    public function destroy($id) {
        Car::destroy($id);
        return redirect(route('cars.index'));
    }
}
