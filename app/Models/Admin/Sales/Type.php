<?php

namespace App\Models\Admin\Sales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{

    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['name','category_id'] ;
}