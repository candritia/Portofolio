<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\profile;


class PortofolioController extends Controller
{
    function show(){
        $data['profile'] = profile::all();
        $data['admin'] = Admin::all();
        return view('portofolio',$data);
    }
    // function add(){
    //     $data=[
    //         'action'=>url('portofolio/create'),
    //         'tombol'=>'simpan',
    //         'portofolio'=>(object)[
    //             'id' => '',
    //             'pp' => '',
    //         'nm' => '',
    //         'identitas'  => '',
    //         'about' => '',
    //         // 'about1' => '',
    //         'project' => '',
    //         // 'project1' => '',
    //         // 'project2' => '',
    //         // 'project3' => '',
    //         // 'project4' => '',
    //         'email' => '',
    //         'nohp' => '',
    //         'contact' => ''
    //         ],
    //     ];
    //     return view('Formportofolio',$data);
    // }

    // function hapus($id){
    // $portofolio = portofolio::Where('id',$id)->first();
    // $portofolio->delete();
    // Storage::delete($portofolio->pp);
    // Storage::delete($portofolio->project);
    // // Storage::delete($portofolio->project1);
    // // Storage::delete($portofolio->project2);
    // // Storage::delete($portofolio->project3);
    // // Storage::delete($portofolio->project4);
    //     return redirect('portofolio');
    // }
    // function edit($id){
    //     $data['portofolio']=portofolio::find($id);
    //     $data['action']= url('portofolio/update').'/'.$data['portofolio']->id;
    //     $data['tombol']='update';
    //     return view('Formportofolio',$data);
    // }
    // function update(Request $req){
    //     $this->validate($req,[
    //         'id' => 'required|min:3|numeric',
    //         'nm' => 'required|string|max:30',
    //         'pp' => 'mimes:jpg,png'
    //     ]);
    //     if ($req->file('pp')) {
    //         $portofolio = portofolio::where('id',$req->id)->first();
    //         Storage::delete($portofplio->pp);

    //         $file = $req->file('pp')->store('pp');
    //     }else {
    //         $file = DB::raw('pp');
    //     }
    //     if ($req->file('project')) {
    //      $portofolio = portofolio::where('id',$req->id)->first();
    //      Storage::delete($portofplio->project);

    //      $file = $req->file('project')->store('project');
    //  }else {
    //     $file = DB::raw('project');
    // }
    // // if ($req->file('project1')) {
    // //     $portofolio = portofolio::where('id',$req->id)->first();
    // //     Storage::delete($portofplio->project1);

    // //     $file = $req->file('project1')->store('project1');
    // // }else {
    // //     $file = DB::raw('project1');
    // // }if ($req->file('project2')) {
    // //     $portofolio = portofolio::where('id',$req->id)->first();
    // //     Storage::delete($portofplio->project2);

    // //     $file = $req->file('project2')->store('project2');
    // // }else {
    // //     $file = DB::raw('project2');
    // // }if ($req->file('project3')) {
    // //     $portofolio = portofolio::where('id',$req->id)->first();
    // //     Storage::delete($portofplio->project3);

    // //     $file = $req->file('project3')->store('project3');
    // // }else {
    // //     $file = DB::raw('project3');
    // // }if ($req->file('project4')) {
    // //     $portofolio = portofolio::where('id',$req->id)->first();
    // //     Storage::delete($portofplio->project4);

    // //     $file = $req->file('project4')->store('project4');
    // // }else {
    // //      $file = DB::raw('project4');
    // //  }

    //     portofolio::where('id',$req->id)->update([
    //         'id' => $req->id,
    //         'pp' => $file,
    //         'nm' => $req->nm,
    //         'identitas' => $req->identitas,
    //         'about' => $req->about,
    //         'project' => $file,
    //         'email' => $req->email,
    //         'nohp' => $req->nohp,
    //         'contact' => $req->contact
    //         // 'about1' => $req->about1,
    //         // 'project1' => $file,
    //         // 'project2' => $file,
    //         // 'project3' => $file,
    //         // 'project4' => $file,
            
            
            
    //         // 'foto' => $req->file('foto')->store('foto'),

    //     ]);
    //     return redirect('portofolio');
    // }
    // function create(Request $req){
    //     $this->validate($req ,[
    //         'id' => 'required|min:3|numeric',
    //         'nm' => 'required|string|max:30',
    //         'pp' => 'mimes:jpg,png'
    //     ]);
    
    
    //     portofolio::create([
    //      'id' => $req->id,
    //         'pp' => $req->file('pp')->store('pp'),
    //         'nm' => $req->nm,
    //         'identitas' => $req->identitas,
    //         'about' => $req->about,
    //          'project' => $req->file('project')->store('project'),
    //          'email' => $req->email,
    //         'nohp' => $req->nohp,
    //         'contact' => $req->contact

    //         // 'about' => $req->about1,
    //         // 'project1' => $req->file('project1')->store('project1'),
    //         // 'project2' => $req->file('project2')->store('project2'),
    //         // 'project3' => $req->file('project3')->store('project3'),
    //         // 'project4' => $req->file('project4')->store('project4'),
            

    //     ]);
    //     return redirect('portofolio');
    // }
    // function cari(Request $req){
    //     $data['portofolio'] = portofolio::where('id',$req->cari)
    //     ->orWhere('nm',$req->cari)->get();
    //     return view('portofolio',$data);
    // }
}
