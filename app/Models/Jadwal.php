<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Jadwal extends Model
{


	protected $table = 'jadwal';


	public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id', 'id');
    }
	public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
    }



    public function allData()
    {
        return DB::table('jadwal')->get();
    }

        public function getOneValue($id)
    {
        return DB::table('jadwal')->where('id', $id)->first();
    }

        public function insertData($data)
    {
    	DB::table('jadwal')->insert($data);
    }
 
        public function updateData($data, $id)
    {
        DB::table('jadwal')->where('id',$id)->update($data);
    }

        public function removeData($id)
    {
        DB::table('jadwal')->where('id',$id)->delete();
    }   


}
