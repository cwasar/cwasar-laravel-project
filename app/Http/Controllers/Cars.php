<?php

namespace App\Http\Controllers;


use App\Http\Requests\Cars\Save as CarsSaveRequest;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class Cars extends Controller
{
    public function index() {
        $cars = Car::ofActive()->with('brand.country', 'tags')->orderBy('created_at', 'desc')->get();
       // $cars = Car::with('brand.country', 'tags')/*->where('status', Enums\Status::ACTIVE)*/->orderBy('created_at', 'desc')->get();
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
        $data = collect($request->validated());
        $car = Car::make($data->except(['tags'])->toArray());

        DB::transaction(function() use ($data, $car) {
            $car->save();
            $car->tags()->sync($data->get('tags'));
        });
        $notification = trans("notifications.cars.create", ['brand' => $car->brand->title]);

        return redirect("/cars/{$car->id}")->with('notification', $notification);
    }
    public function show(Car $car) {

        $transmission = config('car-props.transmission');
        $brands = Brand::orderBy('title')->pluck('title', 'id');

        return view('cars.show', compact('car', 'transmission', 'brands'));
    }
    public function edit(Car $car) {

        $transmission = config('car-props.transmission');
        $brands = Brand::orderBy('title')->pluck('title', 'id');
        $tags = Tag::orderBy('title')->pluck('title', 'id');

        return view('cars.edit', compact('car', 'transmission', 'brands','tags'));
    }
    public function update(CarsSaveRequest $request, Car $car) {

        $data = collect($request->validated());
        $notification = trans("notifications.cars.update");
        $car->update($data->except(['tags'])->toArray());
        $car->tags()->sync($data->get('tags'));

        return redirect(route('cars.show', [$car->id]))->with('notification', $notification);
    }
    public function destroy(Car $car) {
        if($car->CanDelete) {
            $notification = trans("notifications.cars.trash");
            $car->delete();
            return redirect(route('cars.index'))->with('notification', $notification);
        } else {
            $notification = trans("notifications.cars.noDelete");
            return redirect(route('cars.show', [$car]))->with('notification', $notification);
        }

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
