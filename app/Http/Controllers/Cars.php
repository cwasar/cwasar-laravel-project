<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Tag;
use App\Http\Requests\Cars\Save as CarsSaveRequest;

class Cars extends Controller
{
    public function index() {
        $cars = Car::with('brand.country')->orderBy('created_at', 'desc')->get();
        $transmission = config('car-props.transmission');
        $brands = Brand::orderBy('title')->pluck('title', 'id');
        return view('cars.index', compact('cars', 'transmission', 'brands'));
    }
    public function create() {
        $transmission = config('car-props.transmission');
        $brands = Brand::orderBy('title')->pluck('title', 'id');
        $tags = Tag::orderBy('title')->pluck('title', 'id');

        return view('cars.create', compact('transmission', 'brands', 'tags'));
    }
    public function store(CarsSaveRequest $request) {
        $car = Car::create($request->validated());
        $notification = trans("notifications.cars.create", ['brand' => $car->brand->title]);

        return redirect("/cars/{$car->id}")->with('notification', $notification);
    }
    public function show($id) {
        $car = Car::findOrFail($id);
        $transmission = config('car-props.transmission');
        $brands = Brand::orderBy('title')->pluck('title', 'id');

        return view('cars.show', compact('car', 'transmission', 'brands'));
    }
    public function edit(String $id) {
        $car = Car::findOrFail($id);
        $transmission = config('car-props.transmission');
        $brands = Brand::orderBy('title')->pluck('title', 'id');

        return view('cars.edit', compact('car', 'transmission', 'brands'));
    }
    public function update(CarsSaveRequest $request, $id) {
        $notification = trans("notifications.cars.update");
        $car = Car::findOrFail($id);
        $car->update($request->validated());
        return redirect(route('cars.show', [$car->id]))->with('notification', $notification);
    }
    public function destroy($id) {
        $notification = trans("notifications.cars.trash");
        Car::destroy($id);
        return redirect(route('cars.index'))->with('notification', $notification);
    }
    public function trash()
    {
        $cars = Car::onlyTrashed()->get();
        $transmission = config('car-props.transmission');
        return view('cars.index', compact('cars', 'transmission'));
    }

    public function restore($id)
    {
        $car = Car::withTrashed()->find($id);
        $car->restore();
        $notification = trans("notifications.cars.restore", ['brand' => $car->brand->title]);
        return redirect(route('cars.index'))->with(['notification' => $notification, 'restored' => $car->id]);
    }

    public function forceDelete($id)
    {
        $notification = trans("notifications.cars.delete");
        $car = Car::withTrashed()->findOrFail($id);
        $car->forceDelete();
        return redirect(route('cars.index'))->with('notification', $notification);
    }
}
