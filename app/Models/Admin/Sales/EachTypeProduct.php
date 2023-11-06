<?php

namespace App\Models\Admin\Sales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EachTypeProduct extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','slug','price','sale_price','product_id','color_id','type_id','status','quantity','description'];
}