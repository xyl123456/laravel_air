<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class SceneModel extends Model
{
    protected $table = "scene";
    protected $primaryKey="scene_id";
    public $timestamps=false;
}
