<?php

namespace Garantia3;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Orden extends Model
{
	use SoftDeletes;

    protected $table = "ordens";

    protected $dates = ['deleted_at'];
    
}
