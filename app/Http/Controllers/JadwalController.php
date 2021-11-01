<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class JadwalController extends Controller
{
    public function __construct(){
        $this->Jadwal = new Jadwal();
        $this->Mahasiswa = new Mahasiswa();
        $this->Dosen = new Dosen();
    }

    public function index(){
        $jadwals = Jadwal::all();

    	$data = ['jadwal' => $this->Jadwal->allData(),
        ];
        return view('jadwal',compact('jadwals'));
    }

        public function create(){
    	$data =['judul' => "Create Jadwal",
        'allMahasiswa' => $this->Mahasiswa->allData(),
        'allDosen' => $this->Dosen->allData()
    ];
        return view('jadwalCreate', $data);
    }

        public function show($id, Request $request){
        $method = $request->method();
        if($request->isMethod('post')){
            $datetime = date_create()->format('Y-m-d H:i:s');

            $data =[
                'mahasiswa_id' => Request()->idMahasiswa,
                'dosen_id' => Request()->idDosen,
                'judul' => Request()->judul,
                'deskripsi' => Request()->deskripsi,
                'awal'=> Request()->awal,
                'akhir' => Request()->akhir,
                'update_at' => $datetime,
            ];


        $this->Jadwal->updateData($data,$id); 
        return redirect('jadwal');

        }else{
        	$data = ['jadwal' => $this->Jadwal->getOneValue($id)];
        
        return view('jadwalShow', $data);
        }
    }
        public function edit($id){
    	$data =['judul' => "Edit Jadwal", 
    	'jadwal' => $this->Jadwal->getOneValue($id),
        'allMahasiswa' => $this->Mahasiswa->allData(),
        'allDosen' => $this->Dosen->allData()

    	];
        return view('jadwalForm', $data);
    }
    public function store(Request $request){
$datetime = date_create()->format('Y-m-d H:i:s');
            $data =[
                'mahasiswa_id' => Request()->idMahasiswa,
                'dosen_id' => Request()->idDosen,
                'judul' => Request()->judul,
                'deskripsi' => Request()->deskripsi,
                'awal'=> Request()->awal,
                'akhir' => Request()->akhir,
                'create_at' => $datetime,
                'update_at' => $datetime,
            ];

            $this->Jadwal->insertData($data); 
            return redirect('jadwal');
        }

        public function update($id){
        $datetime = date_create()->format('Y-m-d H:i:s');

            $data =[
                'mahasiswa_id' => Request()->idMahasiswa,
                'dosen_id' => Request()->idDosen,
                'judul' => Request()->judul,
                'deskripsi' => Request()->deskripsi,
                'awal'=> Request()->awal,
                'akhir' => Request()->akhir,
                'update_at' => $datetime,
            ];


        $this->Jadwal->updateData($data,$id); 
        return redirect('jadwal');
    }

        public function removeData($id){
        $this->Jadwal->removeData($id);

        return redirect('jadwal'); 
    }



}
