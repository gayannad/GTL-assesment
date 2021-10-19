<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LastRun extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'runner_id',
        'distance',
        'date',
        'amount',
    ];

    /**
     * format date with month name
     * @param $value
     * @return string
     */
    public function getDateAttribute($value)
    {
        $date = Carbon::parse($value);
        return $date->format('j-M-y');
    }
}
