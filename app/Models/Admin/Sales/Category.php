<?php

namespace App\Models\Admin\Sales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','status','parent_id','image','slug'] ;

    /**
     * Get the user that owns the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Category::class);
    }


    public function products(){
        return $this->hasMany(Product::class,'category_id','id');
    }
}