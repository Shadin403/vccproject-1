<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'values',
        'is_required',
        'display_order'
    ];

    protected $casts = [
        'values' => 'array',
        'is_required' => 'boolean'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
