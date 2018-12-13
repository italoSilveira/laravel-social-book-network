<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
	protected $table = "category";
    protected $guarded = ['id', 'created_at'];
}
