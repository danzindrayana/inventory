<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use App\Models\Barang;
use App\Models\Stok;

class BarangController extends Controller
{
	// ini untuk view tabel
    public function data_barang(Request $request){
    	$data = Barang::all();
    	// dd($data);
    	return view('barang',['lihat'=>$data]);
    }
    // ini untuk form input
    public function input_barang(Request $request){
    	return view('input_barang');
    }
    // ini untuk proses simpan db
    public function simpan_barang(Request $request){
    	$tambah = new Barang;
    	$tambah->nama_barang=$request->nama_barang;
    	$tambah->keterangan=$request->keterangan;
    	$tambah->created_at= date('Y-m-d');
    	$tambah->updated_at= date('Y-m-d');
    	$tambah->save();
    	return redirect('barang');
    }
    // ini buat update form
    public function update_barang(Request $request, $id){
    	// $data = Barang::where('id',$id)->first();
    	$data = Barang::find($id);
    	
    	// dd($data);
    	return view('update_barang',['lihat'=>$data]);

    }

    // ini buat ubah data update
	public function ubah_barang(Request $request){
		$id=$request->id;
		$ubah['nama_barang']=$request->nama_barang;
		$ubah['keterangan']=$request->keterangan;
		$ubah['updated_at']=date('Y-m-d');
		DB::table('barang')->where('id',$id)->update($ubah);
		return redirect('barang'); 

	}

	// ini buat hapus
	public function delete_barang(Request $request, $id){
		DB::table('barang')->where('id',$id)->delete();
		return redirect()->back();
	}

	// ini buat nampilkan tabel stok
	public function stok_barang(Request $request){
		$data =DB::table('stok_barang')->select('stok_barang.*','barang.nama_barang',DB::raw('sum(stok_barang.jumlah) as total'))
		->join('barang','barang.id','=','stok_barang.id_barang')
		->groupBy('stok_barang.id_barang')->get();


		return view('stok',['lihat'=>$data]);
	}

	// ini buat input stok
	public function input_stok(Request $request){
		$data = Barang::all();

		return view('input_stok',['lihat'=>$data]);
	}

	// ini untuk proses simpan db
    public function simpan_stok(Request $request){
    	$tambah = new Stok;
    	$tambah->id_barang=$request->id_barang;
    	$tambah->jumlah=$request->jumlah;
    	$tambah->created_at= date('Y-m-d');
    	$tambah->updated_at= date('Y-m-d');
    	$tambah->save();
    	return redirect('stok_barang');
    }

}
