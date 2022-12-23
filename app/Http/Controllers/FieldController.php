<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Exercise $exercise)
    {
        $fields = $exercise->fields;
        return view('fields.index', ['exercise' => $exercise, 'fields' => $fields]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Exercise $exercise)
    {
        return view('fields.create', ['exercise' => $exercise, 'value_kind_cases' => (new Field)->getCasts()['value_kind']::cases()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Exercise $exercise)
    {
        $validated = $request->validate([
            'label' => 'required|max:255',
            'value_kind' => 'required',
        ]);

        $field = $exercise->fields()->create($request->all());
        return redirect()->route('exercises.fields.index', $exercise);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function edit(Exercise $exercise, Field $field)
    {
        return view('fields.edit', ['exercise' => $exercise, "field" => $field, 'value_kind_cases' => (new Field)->getCasts()['value_kind']::cases()]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exercise $exercise, Field $field)
    {
        $field->update($request->all());
        return redirect()->route('exercises.fields.index', $exercise);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exercise $exercise, Field $field)
    {
        $field->delete();
        return redirect()->route('exercises.fields.index', $exercise);
    }
}