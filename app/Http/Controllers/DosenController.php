<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function __construct(){
        $this->Dosen = new Dosen();
    }

    public function index(){
    	$data = ['dosen' => $this->Dosen->allData()];
        return view('dosen', $data);
    }

        public function create(){
    	$data =['judul' => "Create Dosen",];
        return view('dosenCreate', $data);
    }

        public function show($id, Request $request){

        $method = $request->method();
        if ($request->isMethod('post')) {
            $datetime = date_create()->format('Y-m-d H:i:s');

        $data =[
            'nama' => Request()->nama,
            'nidn' => Request()->NIM,
            'kontak' => Request()->kontak,
            'alamat' => Request()->alamat,
            'update_at' => $datetime,
        ];


        $this->Dosen->updateData($data,$id); 
        return redirect('dosen');
        }else{
        $data = ['dosen' => $this->Dosen->getOneValue($id)];
        return view('dosenShow', $data);
        }
    }
        public function edit($id){
    	$data =['judul' => "Edit Dosen", 
    	'dosen' => $this->Dosen->getOneValue($id),
        'edited'=> 1,
    	];
        return view('dosenForm', $data);
    }

    public function store(Request $request){
$datetime = date_create()->format('Y-m-d H:i:s');

            $data =[
                'nama' => Request()->nama,
                'nidn' => Request()->NIM,
                'kontak' => Request()->kontak,
                'alamat' => Request()->alamat,
                'create_at' => $datetime,
                'update_at' => $datetime,
            ];

            $this->Dosen->insertData($data); 
            return redirect('dosen');
        }

        public function update($id){
        $datetime = date_create()->format('Y-m-d H:i:s');

        $data =[
            'nama' => Request()->nama,
            'nidn' => Request()->NIM,
            'kontak' => Request()->kontak,
            'alamat' => Request()->alamat,
            'update_at' => $datetime,
        ];


        $this->Dosen->updateData($data,$id); 
        return redirect('dosen');
    }
        public function removeData($id){
        $this->Dosen->removeData($id);

        return redirect('dosen'); 
    }  
}