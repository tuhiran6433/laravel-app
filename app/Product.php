<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id', 'name', 'detail'
    ];

    public function parent()
    {
        return $this->belongsTo(Product::class, 'parent_id', 'id');
    }
}
