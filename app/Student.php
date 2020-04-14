<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends BaseModel
{
    //
//    public static $snakeAttributes = false;
    /**
     * @var string
     */
    protected $table = 'students';

    public static $snakeAttributes = true;
}
