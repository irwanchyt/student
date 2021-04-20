@extends('layout.master')

@section('content')
 
    <h1>FORM UPDATE</h1>

    <form action="/siswa/{{$data_siswa->id}}/update" method="post">
        {{csrf_field()}} 
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
        <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp " value="{{$data_siswa->nama_depan}}">

        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Belakang</label>
        <input name="nama_belakang" type="text" class="form-control" value="{{$data_siswa->nama_belakang}}"id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                <option ></option>
                <option value="L" @if ($data_siswa->jenis_kelamin == 'L') selected
                    
                @endif>Laki-Laki</option>
                <option value="p" @if ($data_siswa->jenis_kelamin == 'P') selected
                    
                    @endif>Perempuan</option>                         
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" >Agama</label>
            <input name="agama" type="text" class="form-control" id="exampleInputPassword1"  value="{{$data_siswa->agama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"  >Alamat</label>
            <input name="alamat" type="text" class="form-control" id="exampleInputPassword1" value="{{$data_siswa->alamat}}">
        </div>    
    
        
        <button type="submit" class="btn btn-warning">UPDATE</button>
    </form>  



@endsection

