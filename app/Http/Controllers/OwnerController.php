<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        return Owner::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:owners',
            'phone_number' => 'required|string|max:15',
        ]);

        return Owner::create($request->all());
    }

    public function show(Owner $owner)
    {
        return $owner;
    }

    public function update(Request $request, Owner $owner)
    {
        $request->validate([
            'fullname' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:owners,email,' . $owner->id,
            'phone_number' => 'sometimes|required|string|max:15',
        ]);

        $owner->update($request->all());
        return $owner;
    }

    public function destroy(Owner $owner)
    {
        $owner->delete();
        return response()->noContent();
    }

    public function houses(Owner $owner)
    {
        return $owner->houses()->with('images')->get();
    }
}
