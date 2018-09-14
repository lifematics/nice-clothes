<?php
header ('Content-Type: image/png');
namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoge extends Model
{
    //
    public static function bar() {
        return 'xyz';
    }
}
