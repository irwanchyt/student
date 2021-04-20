<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
  
    public function index(){

        $data_siswa = Siswa::All();
        return view('siswa.index',['data_siswa'=>$data_siswa]);
    }
     public function add(Request $request){
      
     
      $this->validate($request,[
         'nama_depan' => 'required',
         'nama_belakang' => 'required',
         'jenis_kelamin' => 'required',
         'agama' => 'required',
         'alamat' => 'required'
      ]);

        Siswa::create($request->all());
        return redirect('/siswa')->with('sukses','data berhasil diinput');
     }

     public function edit($id){

        $data_siswa = Siswa::find($id);
        return view('siswa.edit',['data_siswa'=>$data_siswa]);
     }

     public function update(Request $request,$id){

        $data_siswa = Siswa::find($id);
        $data_siswa->update($request->all());
        return redirect('/siswa')->with('sukses','data berhasil diupdate');
     }

     public function delete($id){

        $data_siswa = Siswa::find($id);
        $data_siswa->delete();
        return redirect('/siswa')->with('sukses','data berhasil dihapus');
     }

}
