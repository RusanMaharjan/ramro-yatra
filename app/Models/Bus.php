<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $table = 'buses';
    protected $primaryKey = 'bus_id';

    public function route() {
        return $this->belongsTo(Route::class, 'route_id');
    }

    public function operator() {
        return $this->belongsTo(Operator::class, 'operator_id');
    }

}
