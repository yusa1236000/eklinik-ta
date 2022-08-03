<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $fillable=[
        'success',
        'failed',
        'description',
<<<<<<< HEAD
        'documentation_id'
=======
        'documentation_id',
>>>>>>> 5f3f6cf2d8d08af4ff972acf1c724d319b201cde
    ];

    public function documentation()
    {
       return $this->belongsTo(Documentation::class);
    }
}
