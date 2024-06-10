<?php

namespace App\Http\Controllers;

use App\Models\DataTamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ListTamuController extends Controller
{
    public function addData(Request $request)
    {
        $valdi = $request->validate([
            'nama_lengkap' => ['required'],
            'asal_tamu' => ['required'],
            'menemui' => ['required'],
            'alasan' => ['required'],
            'foto_tamu' => ['required']
        ]);

        $dataURL = $request->foto_tamu;

        // Pisahkan bagian data URL
        list($type, $data) = explode(';', $dataURL);
        list(, $data) = explode(',', $data);

        // Konversi data base64 menjadi binary
        $imageData = base64_decode($data);

        // Buat nama file unik
        $fileName = uniqid('image_') . '.png'; // Contoh: image_609f57b30c44f.png

        // Simpan data binary ke dalam file PNG di dalam direktori public/img/foto_tamu
        file_put_contents(public_path('img/foto_tamu/' . $fileName), $imageData);

        $valdi['foto_tamu'] = $fileName;

        DataTamu::create($valdi);

        return redirect('/')->with('succ', 'Berhasil menambah list tamu.');
    }

}

