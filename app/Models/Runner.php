<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Runner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'weight',
        'sex',
        'age',
        'colour',
        'sire',
        'dam',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function lastRuns()
    {
        return $this->hasMany(LastRun::class);
    }
}
