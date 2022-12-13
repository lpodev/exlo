<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\Enum;
use Watson\Validating\ValidatingTrait;

enum FieldValueKind {
    case single_line;
    case single_line_list;
    case multi_line;
}

class Field extends Model
{
    use ValidatingTrait;
    protected $throwValidationExceptions = true;

    // Workaround to expose the enum without putting it in another namespace and file.
    public static $FieldValueKind = FieldValueKind::class;

    protected $casts = [
        'value_kind' => FieldValueKind::class,
    ];

    protected $fillable = ['label', 'value_kind'];

    // Instead of using the $rules property, we override the method of the ValidatingTrait.
    // This is mandatory because one of the rule is dynamic code (new Enum)
    public function getRules()
    {
        return [
            'label' => 'required|max:255',
            //'value_kind' => [new Enum(FieldValueKind::class)],
        ];
    }

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }

}
