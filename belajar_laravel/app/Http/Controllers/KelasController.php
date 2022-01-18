<?php

namespace App\Http\Controllers;
use App\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KelasController extends Controller
{
    public function show()
    {
        return Kelas::all();
    }
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),
            [
                'nama_kelas' => 'required'
            ]
        );

        if($validator->fails()) {
            return Response()->json($validator->errors());
        }
        $simpan = Kelas::create([
            'nama_kelas' => $request->nama_kelas
        ]);
        if($simpan) {
            return Response()->json(['status'=>1]);
        }
        else {
            return Response()->json(['status'=>0]);
        }
    }
    public function update($id_kelas, Request $request)
    {
        $validator=Validator::make($request->all(),
            [
                'nama_kelas' => 'required'
            ]
        );

        if($validator->fails()) {
            return Response()->json($validator->errors());
        }
        $ubah = Kelas::where('id_kelas', $id_kelas )->update([
            'nama_kelas' => $request->nama_kelas
        ]);
        if($ubah) {
            return Response()->json(['status'=>1]);
        }
        else {
            return Response()->json(['status'=>0]);
        }
    }
}
