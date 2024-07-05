<?php

namespace App\Http\Controllers\Api;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }
    public function prosesFileUpload(Request $request)
    {
        $request->validate([
            'berkas'=>'required|file|image|max:500',]);
            $extFile=$request->berkas->getClientOriginalName();
            // $namaFile='web-'.time().".".$extFile;

            $namaFile = $request->namaBerkas;

            $path = $request->berkas->move('gambar', '$namaFile');
            $pathBaru=asset('gambar/'.$namaFile); 

            echo "Gambar berhasil di upload ke <a href='$pathBaru'>$namaFile</a>";
            echo "<br> <br>";
            echo "<img src='$path' alt='$namaFile' width='50%' height='50%'>";

            // // $path = $request->berkas->store('uploads');
            // $path = $request->berkas->storeAs('gambar',$namaFile );
            // $path=str_replace("\\","//", $path);
            // echo "Variabel path berisi: $path <br>";

            // $pathBaru=asset('gambar/'.$namaFile);
            // echo "proses upload berhasil, file berada di: $path";
            // echo "<br>";
            // echo "Tampilkan link:<a href='$pathBaru'>$pathBaru</a>";
            // // echo $request->berkas->getClientOriginalName()."<br>lolos validasi";
    }
}