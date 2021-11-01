<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class MahasiswaController extends Controller
{
    //
    public function __construct(){
        $this->Mahasiswa = new Mahasiswa();
    }

    public function index(){
    	$data = ['mahasiswa' => $this->Mahasiswa->allData()];
        return view('mahasiswa', $data);
    }

        public function create(){
    	$data =['judul' => "Create Mahasiswa",
    	'edited'=> NULL,
		];
        return view('mahasiswaCreate', $data);
    }


        public function show($id, Request $request){
            $method = $request->method();
            if ($request->isMethod('post')) {
                //update function
                $datetime = date_create()->format('Y-m-d H:i:s');

                $data =[
                    'nama' => Request()->nama,
                    'nim' => Request()->NIM,
                    'tanggal_lahir' => Request()->tgllahir,
                    'alamat' => Request()->alamat,
                    'tahun_masuk'=> Request()->thnmasuk,
                    'update_at' => $datetime,
                ];


                $this->Mahasiswa->updateData($data,$id); 
                return redirect('mahasiswa');
                }
                //---
            else{

        	   $data = ['mahasiswa' => $this->Mahasiswa->getOneValue($id)];
                    return view('mahasiswaShow', $data);
                }
    }

        public function edit($id){
    	$data =['judul' => "Edit Mahasiswa", 
    	'mahasiswa' => $this->Mahasiswa->getOneValue($id),
    	'edited'=> "1",
    	];
        return view('mahasiswaForm', $data);
    }

	public function store(Request $request){
$datetime = date_create()->format('Y-m-d H:i:s');

	        $data =[
	            'nama' => Request()->nama,
	            'nim' => Request()->NIM,
	            'tanggal_lahir' => Request()->tgllahir,
	            'alamat' => Request()->alamat,
	            'tahun_masuk'=> Request()->thnmasuk,
	            'create_at' => $datetime,
	            'update_at' => $datetime,
	        ];

	        $this->Mahasiswa->insertData($data); 
	        return redirect('mahasiswa');
	    }

    	public function update($id){
		$datetime = date_create()->format('Y-m-d H:i:s');

        $data =[
            'nama' => Request()->nama,
            'nim' => Request()->NIM,
            'tanggal_lahir' => Request()->tgllahir,
            'alamat' => Request()->alamat,
            'tahun_masuk'=> Request()->thnmasuk,
            'update_at' => $datetime,
        ];


        $this->Mahasiswa->updateData($data,$id); 
        return redirect('mahasiswa');
    }
    	public function removeData($id){
        $this->Mahasiswa->removeData($id);

        return redirect('mahasiswa'); 
    }


}
