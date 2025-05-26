<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    protected $fillable=['user_id','category_id','condition_id','title','description','currency','price','original_price','price_type','status'];
}
