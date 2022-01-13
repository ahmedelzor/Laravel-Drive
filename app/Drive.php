<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drive extends Model
{
    protected $table = "drives";

    protected $filelable = ['title' , 'descripition' , 'file' , 'usersid'];
}
