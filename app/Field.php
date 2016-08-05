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

    public function show()
    {
        return DB::table('fields')->orderBy('id', 'asc')->paginate('3');
    }
    public function delete_Field($id)
    {
        return  Field::where('id',$id)->delete();
    }

    public function edit($id,$name)
    {
         return DB::update('update fields set name = ? where id = ?',[$name,$id]);

    }
}
