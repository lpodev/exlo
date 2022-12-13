<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Exercise;
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
        return view('fields.index', compact('exercise', 'fields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Exercise $exercise)
    {
        return view('fields.create', ['exercise' => $exercise, 'value_kind_cases' => Field::$FieldValueKind::cases()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Exercise $exercise)
    {
        $exercise->fields()->create($request->all());
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
        return view('fields.edit', ['exercise' => $exercise, 'field' => $field, 'value_kind_cases' => Field::$FieldValueKind::cases()]);
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
