<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Model
{

    protected $table = 'mahasiswa';

    public function jadwals()
    {
        return $this->hasMany('App\Jadwal');
    }
    public function allData()
    {
        return DB::table('mahasiswa')->get();
    }

        public function getOneValue($id)
    {
        return DB::table('mahasiswa')->where('id', $id)->first();
    }

    public function insertData($data)
    {
    	DB::table('mahasiswa')->insert($data);
    }

        public function updateData($data, $id)
    {
        DB::table('mahasiswa')->where('id',$id)->update($data);
    }

        public function removeData($id)
    {
        DB::table('mahasiswa')->where('id',$id)->delete();
    }

   
}
