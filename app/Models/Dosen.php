<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dosen extends Model
{

    protected $table = 'dosen';

        public function jadwals()
    {
        return $this->hasMany('App\Jadwal');
    }
    public function allData()
    {
        return DB::table('dosen')->get();
    }

        public function getOneValue($id)
    {
        return DB::table('dosen')->where('id', $id)->first();
    }

    public function insertData($data)
    {
    	DB::table('dosen')->insert($data);
    }

        public function updateData($data, $id)
    {
        DB::table('dosen')->where('id',$id)->update($data);
    }

        public function removeData($id)
    {
        DB::table('dosen')->where('id',$id)->delete();
    }
}
    
