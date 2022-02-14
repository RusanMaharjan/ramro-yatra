<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = "payments";
    protected $primaryKey = "invoice_id";

    public function seat() {
        return $this->belongsTo(Seat::class, 'seat_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id');
    }
}
