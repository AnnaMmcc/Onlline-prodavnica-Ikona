<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IconsModel extends Model
{
    protected $table = "products";

    protected $fillable = [
        "name","description","price","amount","image",
    ];
}
