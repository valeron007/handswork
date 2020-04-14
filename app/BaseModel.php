<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class BaseModel extends Model {

    // Allow for camelCased attribute access

    public function getAttribute($key)
    {
//        return parent::getAttribute(snake_case($key));
        return parent::getAttribute(Str::snake($key));
    }

    public function setAttribute($key, $value)
    {
//        return parent::setAttribute(snake_case($key), $value);
        return parent::setAttribute(Str::snake($key), $value);
    }

}
