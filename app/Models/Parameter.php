<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;

    protected $fillable=[
        'documentation_id',
        'name',
        'is_required',
        'type',
        'description',
    ];

    public function documentation()
    {
        return $this->hasMany(Documentation::class, 'parameter_id', 'id');
    }
}
