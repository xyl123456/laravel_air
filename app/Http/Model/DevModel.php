<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class DevModel extends Model
{
    protected $table = "dev";
    protected $primaryKey="dev_id";
    public $timestamps=false;
}
