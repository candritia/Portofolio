<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\profile;

class ProfileController extends Controller
{
    function show(){
        $data['profile'] = profile::all();
        return view('profile',$data);
    }
    function add(){
        $data=[
            'action'=>url('profile/create'),
            'tombol'=>'simpan',
            'profile'=>(object)[
                'id' => '',
            'nama' => '',
            'jk'  => '',
            'aboutme' => '',
            'nohp' => '',
            'alamat' => '',
            'foto' => ''

            ],
        ];
        return view('FormProfile',$data);
    }

    function hapus($id){
    $profile = profile::Where('id',$id)->first();
    $profile->delete();
    Storage::delete($profile->foto);
        return redirect('profile');
    }
    function edit($id){
        $data['profile']=profile::find($id);
        $data['action']= url('profile/update').'/'.$data['profile']->id;
        $data['tombol']='update';
        return view('FormProfile',$data);
    }
    function update(Request $req){
        $this->validate($req,[
            'id' => 'required|min:3|numeric',
            'nama' => 'required|string|max:30',
            'foto' => 'mimes:jpg,png'
        ]);
        if ($req->file('foto')) {
            $profile = profile::where('id',$req->id)->first();
            Storage::delete($profile->foto);

            $file = $req->file('foto')->store('foto');
        }else {
            $file = DB::raw('foto');
        }
        profile::where('id',$req->id)->update([
            'id' => $req->id,
            'nama' => $req->nama,
            'jk' => $req->jk,
            'aboutme' => $req->aboutme,
            'nohp' => $req->nohp,
            'alamat' => $req->alamat,
            'foto' => $file
            
            
            // 'foto' => $req->file('foto')->store('foto'),

        ]);
        return redirect('profile');
    }
    function create(Request $req){
        $this->validate($req ,[
            'id' => 'required|min:3|numeric',
            'nama' => 'required|string|max:30',
            'foto' => 'mimes:jpg,png'
        ]);
    
    
        profile::create([
            'id' => $req->id,
            'nama' => $req->nama,
            'jk' => $req->jk,
            'aboutme' => $req->aboutme,
            'nohp' => $req->nohp,
            'alamat' => $req->alamat,
            'foto' => $req->file('foto')->store('foto')
        ]);
        return redirect('profile');
    }
    function cari(Request $req){
        $data['profile'] = profile::where('id',$req->cari)
        ->orWhere('nama',$req->cari)->get();
        return view('profile',$data);
    }
}
