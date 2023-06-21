<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;


class AdminController extends Controller
{
    function show(){
        $data['admin'] = Admin::all();
        return view('admiin',$data);
    }
    function add(){
        $data=[
            'action'=>url('Admin/create'),
            'tombol'=>'simpan',
            'admin'=>(object)[
                'nis' => '',
            'nama' => '',
            'jk'  => '',
            'nohp' => '',
            'alamat' => '',
            'foto' => '',

            ],
        ];
        return view('FormAdmin',$data);
    }

    function hapus($id){
    $admin = Admin::Where('nis',$id)->first();
    $admin->delete();
    Storage::delete($admin->foto);
        return redirect('Admin');
    }
    function edit($id){
        $data['admin']=Admin::find($id);
        $data['action']= url('Admin/update').'/'.$data['admin']->nis;
        $data['tombol']='update';
        return view('FormAdmin',$data);
    }
    function update(Request $req){
        $this->validate($req,[
            'nis' => 'required|min:3|numeric',
            'nama' => 'required|string|max:30',
            'foto' => 'mimes:jpg,png'
        ]);
        if ($req->file('foto')) {
            $admin = Admin::where('nis',$req->id)->first();
            Storage::delete($admin->foto);

            $file = $req->file('foto')->store('foto');
        }else {
            $file = DB::raw('foto');
        }
        Admin::where('nis',$req->id)->update([
            'nis' => $req->nis,
            'nama' => $req->nama,
            'jk' => $req->jk,
            'nohp' => $req->nohp,
            'alamat' => $req->alamat,
            'foto' => $file
            
            // 'foto' => $req->file('foto')->store('foto'),

        ]);
        return redirect('Admin');
    }
    function create(Request $req){
        $this->validate($req ,[
            'nis' => 'required|min:5|numeric',
            'nama' => 'required|string|max:30',
            'foto' => 'mimes:jpg,png'
        ]);
    
    
        Admin::create([
            'nis' => $req->nis,
            'nama' => $req->nama,
            'jk' => $req->jk,
            'nohp' => $req->nohp,
            'alamat' => $req->alamat,
            'foto' => $req->file('foto')->store('foto')
        ]);
        return redirect('Admin');
    }
    function cari(Request $req){
        $data['admin'] = Admin::where('nis',$req->cari)
        ->orWhere('nama',$req->cari)->get();
        return view('admiin',$data);
    }
}
