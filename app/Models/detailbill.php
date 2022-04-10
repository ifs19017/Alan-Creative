<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailbill extends Model
{
    use HasFactory;
    protected $table = 'detailbills';
    protected $fillable = [
        'nama',
        'jumlah',
        'harga',
    ];

    public function bill()
    {
        return $this->belongsTo(bill::class, 'bills');
    }
}
