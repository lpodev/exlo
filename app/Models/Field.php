<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

enum FieldValueKind {
    case single_line;
    case single_line_list;
    case multi_line;
}

class Field extends Model
{
    // Workaround to expose the enum without putting it in another namespace and file.
    public static $FieldValueKind = FieldValueKind::class;

    protected $casts = [
        'value_kind' => FieldValueKind::class,
    ];

    protected $fillable = ['label', 'value_kind'];

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }

}
