@extends('layouts.index')
@section('content')

            

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Dashboard 01</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Sisipkan file page -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Update Barang {{$lihat->nama_barang}}</h3>
                                    </div>

                                    <form action="{{url('ubah_barang')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                    <div class="card-body">
                                        <div class="row">
                                            <input type="hidden" name="id" value="{{$lihat->id}}">
                                            <div class="col-sm-6 col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Nama Barang<span class="text-red">*</span></label>
                                                    <input type="text" name="nama_barang" class="form-control" value="{{$lihat->nama_barang}}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Keterangan <span class="text-red">*</span></label>
                                                    <input type="text" name="keterangan" class="form-control" value="{{$lihat->keterangan}}">
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-lg btn-primary">Ubah</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
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