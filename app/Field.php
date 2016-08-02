<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon;
class Field extends Authenticatable
{
    /**
     * Insert fields values into db
     * @param $name ..input field value
     */
    public function insert($name)
    {
        $now =Carbon\Carbon::today()->format('Y-m-d');
        DB::insert('insert into fields (name,created_at,updated_at) values(?,?,?)',[$name,$now,$now]);
    }
}
