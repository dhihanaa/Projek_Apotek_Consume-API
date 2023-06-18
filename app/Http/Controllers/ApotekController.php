<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class ApotekController extends Controller
{    
    public function index()
    {
        $data = (new BaseApi)->index('/api/apotek');
        $apotek = $data->json();

        return view('apoteks.index')->with('apotek', $apotek['data']);
    }

    public function create()
    {
        return view('apoteks.create');
    }

    public function store(Request $request)
    {
        $upload = [
            'nama' => $request->nama,
            'rujukan' => $request->rujukan,
            'rumah_sakit' => $request->rumah_sakit,
            'obat' => $request->obat,
            'harga_satuan' => $request->harga_satuan,
            'apoteker' => $request->apoteker,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->create('/api/apotek/store', $upload);

        if ($response->failed()) {
            $errors = $response->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }

        return redirect('/apotek')->with('status', 'Success Add New Data Apotek');

    }

    public function show($id)
    {
        $data = (new BaseApi)->detail('/api/apotek', $id);
        $apotek = $data->json();

        return view('apoteks.show')->with('apotek', $apotek['data']);
    }

    public function edit($id)
    {
        $data = (new BaseApi)->detail('/api/apotek', $id);
        $apotek = $data->json();

        return view('apoteks.update')->with('apotek', $apotek['data']);
    }

    public function update(Request $request, $id)
    {
        $upload = [
            'nama' => $request->nama,
            'rujukan' => $request->rujukan,
            'rumah_sakit' => $request->rumah_sakit,
            'obat' => $request->obat,
            'harga_satuan' => $request->harga_satuan,
            'apoteker' => $request->apoteker,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->update('/api/apotek/update', $id, $upload);
        return redirect('/apotek')->with('status', 'Success Update Data Apotek');

    }

    public function destroy($id)
    {
        $data = (new BaseApi)->delete('/api/apotek/delete', $id);
        $detail = $data->json();

        return redirect()->back()->with('status', 'Success Deleted!');
    }

    public function trash()
    {
        $data = (new BaseApi)->OnlyTrashed('/api/apotek/trash/all');
        $trash = $data->json('data');

        return view('apoteks.trash')->with('apotek', $trash);
    }

    public function restore($id)
    {
        $data = (new BaseApi)->restore('/api/apotek/trash/restore', $id);
        $restore = $data->json();

        return redirect('/apotek')->with('status', 'Restored Successfully.');
    }

    public function permanentDelete($id)
    {
        $apotek = (new BaseApi)->forceDelete('/api/apotek/trash/permanent', $id);
        $delete = $apotek->json(); 
        
        return redirect('/apotek')->with('status', 'Berhasil Menghapus Data Secara Permanen!');
    }

}