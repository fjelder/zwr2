<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Station extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'shortName',
        'maxNumberOfRailwaySwitches',
    ];
    public function line(): BelongsTo
    {
        return $this->belongsTo(Line::class, 'line_id');
    }
}
