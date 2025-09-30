<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VCCPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'monthly_limit',
        'validity_days',
        'is_active',
        'features'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'monthly_limit' => 'decimal:2',
        'features' => 'array'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
