@extends('layouts.index')
@section('content')

            

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Data User</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">User</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Sisipkan file page -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">User</h3>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <a class="btn btn-success" href="{{url('input_user')}}">Tambah Data</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table text-nowrap text-md-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Nomor</th>
                                                        <th>Nama</th>
                                                        <th>Username</th>
                                                        <th>Level</th>
                                                        <th>Keterangan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                {{-- <tbody>

                                                    @php $nomor=1; @endphp
                                                    @foreach($lihat as $value)
                                                    <tr>
                                                        <td>{{$nomor++}}</td>
                                                        <td>{{$value->nama_lengkap}}</td>
                                                        <td>{{$value->username}}</td>
                                                        <td>{{$value->keterangan}}</td>
                                                        <td><a class="btn btn-success" href="{{url('update_user')}}/{{$value->id}}">Ubah</a>
                                                            <a class="btn btn-danger" href="{{url('delete_barang')}}/{{$value->id}}" onclick="return confirm('Apakah Anda Yakin ?')" >Hapus</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody> --}}
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- ROW-1 END -->

                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

        </div>

        <!-- Sidebar-right -->
        
        <!--/Sidebar-right-->

        <!-- Country-selector modal-->
        
        <!-- Country-selector modal-->

@endsection        