<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        return House::with('images', 'owner')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'owner_id' => 'required|exists:owners,id',
            'house_type' => 'required|in:Chalet,Twin House,Villa',
            'availability' => 'required|boolean',
            'total_area' => 'required|integer',
            'number_of_bedrooms' => 'required|integer',
            'number_of_bathrooms' => 'required|integer',
            'main_picture' => 'required|string|max:255',
        ]);

        $house = House::create($request->all());

        if ($request->has('images')) {
            foreach ($request->images as $image) {
                $house->images()->create([
                    'image_url' => $image['image_url'],
                    'is_360' => $image['is_360'] ?? false,
                ]);
            }
        }

        return $house->load('images', 'owner');
    }

    public function show(House $house)
    {
        return $house->load('images', 'owner');
    }

    public function update(Request $request, House $house)
    {
        $request->validate([
            'house_type' => 'sometimes|required|in:Chalet,Twin House,Villa',
            'availability' => 'sometimes|required|boolean',
            'total_area' => 'sometimes|required|integer',
            'number_of_bedrooms' => 'sometimes|required|integer',
            'number_of_bathrooms' => 'sometimes|required|integer',
            'main_picture' => 'sometimes|required|string|max:255',
        ]);

        $house->update($request->all());

        if ($request->has('images')) {
            $house->images()->delete();
            foreach ($request->images as $image) {
                $house->images()->create([
                    'image_url' => $image['image_url'],
                    'is_360' => $image['is_360'] ?? false,
                ]);
            }
        }

        return $house->load('images', 'owner');
    }

    public function destroy(House $house)
    {
        $house->delete();
        return response()->noContent();
    }
}
