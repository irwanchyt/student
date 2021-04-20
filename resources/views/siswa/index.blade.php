@extends('layout.master')

@section('content')

        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
        @endif
        
        <div class="row text-center" style="margin:40px 0px">
            <div class="col-md-6">
                <h3><b>DATA MAHASISWA</b></h3>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Mahasiwa
                </button>
            </div>


        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Jenis Kelamin</th>
                        <th>AGAMA</th>
                        <th>ALAMAT</th>
                        <th colspan="2">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data_siswa as $item)
                    <tr>
                        <td>{{$item->nama_depan}}</td>
                        <td>{{$item->nama_belakang}}</td>
                        <td>{{$item->jenis_kelamin}}</td>
                        <td>{{$item->agama}}</td>
                        <td>{{$item->alamat}}</td>
                        <td> <a href="/siswa/{{$item->id}}/edit" class="btn btn-warning btn-sm"> edit</a></td>
                        <td> <a href="/siswa/{{$item->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('yakin mau dihapus?')"> delete</a></td>
                    </tr>
                    @endforeach
                        
                    </tbody>
                    </table>                      
            </div>
        </div>
        </div>


        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="/siswa/add" method="post">
                    {{csrf_field()}} 
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                        <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Belakang</label>
                        <input name="nama_belakang" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                            <option ></option>
                            <option value="L">Laki-Laki</option>
                            <option value="p">Perempuan</option>                         
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Agama</label>
                        <input name="agama" type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Alamat</label>
                        <input name="alamat" type="text" class="form-control" id="exampleInputPassword1">
                        </div>    
                
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>            
            </div>
            <div class="modal-footer">
                
            </div>
        
            </div>
        </div>
@endsection
  
      
  