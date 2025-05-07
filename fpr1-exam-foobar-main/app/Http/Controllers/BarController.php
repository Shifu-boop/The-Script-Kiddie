<?php

namespace App\Http\Controllers;

use App\Models\Bar;
use Illuminate\Http\Request;

class BarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bars = Bar::all();
        return view('bars.index', compact('bars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'waldo' => 'nullable|string',
            'grault' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
        ]);

        Bar::create($validated);

        return redirect()->route('bars.index')->with('success', 'Bar created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(bar $bar)
    {
        return view('bars.show', compact('bar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bar $bar)
    {
        return view('bars.edit', compact('bar'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bar $bar)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'waldo' => 'nullable|string',
            'grault' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
        ]);

        $bar->update($validated);

        return redirect()->route('bars.index')->with('success', 'Bar updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bar $bar)
    {
        $bar->delete();
        return redirect()->route('bars.index')->with('success', 'Bar deleted successfully.');
    }
}
