<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = Person::all();
        return view('pages.index', [
            'people' => $people
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Person::create($data);

        return redirect()->route('people.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Person::findOrFail($id);
        return view('pages.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        Person::findOrFail($id)->update($data);

        return redirect()->route('people.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Person::findOrFail($id)->delete();

        return redirect()->route('people.index');
    }
}
