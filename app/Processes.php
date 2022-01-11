<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processes extends Model
{
  protected $fillable = [
    'name', 'colege', 'status', 'openDate', 'description',
    'ata'
  ];
}
