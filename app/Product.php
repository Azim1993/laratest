<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Product extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'product';

    protected $fillable = [
      'ProductName','ProductStock','ProductPrice'
    ];

    protected function user()
    {
        return $this->belongsTo('App\Users');
    }
}
