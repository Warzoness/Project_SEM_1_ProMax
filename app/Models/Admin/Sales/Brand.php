<?php

namespace App\Models\Admin\Sales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Admin\Sales\Category;

class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','logo'] ;

    
    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }
}