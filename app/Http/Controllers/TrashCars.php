<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class TrashCars extends Controller
{
    public function index()
    {
        $cars = Car::onlyTrashed()->get();
        $transmission = config('car-props.transmission');
        return view('cars.index', compact('cars', 'transmission'));
    }

    public function restore($id)
    {
        $notification = trans("notifications.cars.restore");
        $car = Car::withTrashed()->find($id);
        $car->restore();
        return redirect(route('cars.index'))->with('notification', $notification);
    }

    public function forceDelete($id)
    {
        $notification = trans("notifications.cars.delete");
        $car = Car::withTrashed()->find($id);
        $car->forceDelete();
        return redirect(route('cars.index'))->with('notification', $notification);
    }
}
