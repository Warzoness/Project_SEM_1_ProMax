<?php

namespace App\Models\Admin\Sales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImgProducts extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'image_products';
    protected $fillable = ['product_id','image'];

    public function user()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    
}