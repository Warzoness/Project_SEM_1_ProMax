<?php

namespace App\Models\Admin\Sales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImgProducts extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['eachTypeProduct_id','role','image'];
}