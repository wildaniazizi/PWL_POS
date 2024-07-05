<?php

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
            $namaFile='web-'.time().".".$extFile;
            // $path = $request->berkas->store('uploads');
            $path = $request->berkas->storeAs('gambar',$namaFile );
            $path=str_replace("\\","//", $path);
            echo "Variabel path berisi: $path <br>";

            $pathBaru=asset('gambar/'.$namaFile);
            echo "proses upload berhasil, file berada di: $path";
            echo "<br>";
            echo "Tampilkan link:<a href='$pathBaru'>$pathBaru</a>";
            // echo $request->berkas->getClientOriginalName()."<br>lolos validasi";
    }
}