<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

enum ExerciseState {
    case building;
    case answering;
    case closed;
}

class Exercise extends Model
{
    // Workaround to expose the enum without putting it in another namespace and file.
    public static $ExerciseState = ExerciseState::class;

    protected $casts = [
        'state' => ExerciseState::class,
    ];

    protected $fillable = ['title'];

    public function fields()
    {
        return $this->hasMany(Field::class);
    }
    
    public function delete()
    {
        $this->fields()->delete();
        parent::delete();
    }
}
