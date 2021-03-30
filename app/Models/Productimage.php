<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productimage extends Model
{
  use HasFactory;
  /**
   * The attributes that aren't mass assignable.
   *
   * @var array
   */
  protected $guarded = [];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
      'id' => 'integer',
      'default' => 'integer',
  ];


  public function product()
  {
      return $this->belongsTo(\App\Models\Product::class);
  }
}
