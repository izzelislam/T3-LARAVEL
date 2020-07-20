<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $table='artices';

  protected $fillable=['category_id','title','articles'];

  public function category()
  {
  		return $this->belongsTo('App\Category');
  }
}

