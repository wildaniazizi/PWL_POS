<!DOCTYPE html>
<html>
    <head>
        <title>Data User</title>
    </head>
    <body>
        <h1>Data User</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>ID Level Pengguna</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($data as $d)
                <tr>
                    <th>{{$d->user_id}}</th>
                    <th>{{$d->username}}</th>
                    <th>{{$d->nama}}</th>
                    <th>{{$d->level_id}}</th>
                    <td><a href="{{route('/user/ubah', $d->user_id)}}">Ubah</a> | <a href={{route('/user/hapus',$d->user_id)}}>Hapus</a></td>
                </tr>
                @endforeach
            </tr>
        </table>
        
    </body>
</html>