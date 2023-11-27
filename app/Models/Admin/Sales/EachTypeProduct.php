<?php

namespace App\Models\Admin\Sales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EachTypeProduct extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','slug','main_img','price','sale_price','product_id','color','type','tag','quantity'];

    /**
     * Get the product that owns the EachTypeProduct
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    /**
     * Get all of the comments for the EachTypeProduct
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function imgs()
    {
        return $this->hasMany(ImgProducts::class, 'eachTypeProduct_id', 'id');
    }
}