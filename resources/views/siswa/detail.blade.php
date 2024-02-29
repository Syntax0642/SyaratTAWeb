<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('siswa.css')}}">
    <link rel="stylesheet" href="{{asset('public.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
@include('layouts.partial.navbar')
<div class="card">
    <div class="card-header">
        <h2>Detail Siswa</h2>
        <h2>{{ $siswa->nama}}</h2>
    </div>
    <div class="card-body">
        <ul class="list-group mt-3">
            <li class="list-group-item"><strong>Nama Siswa:</strong> {{ $siswa->nama }}</li>
            <li class="list-group-item"><strong>NIS:</strong> {{ $siswa->NIS }}</li>
            <li class="list-group-item"><strong>Kelas:</strong> {{ $siswa->kelass->kelas}}</li>
            <li class="list-group-item"><strong>Tanggal Lahir:</strong> {{ $siswa->tgl_lahir }}</li>
            <li class="list-group-item"><strong>Alamat:</strong> {{ $siswa->alamat }}</li>
        </ul>
    </div>
</div>
</body>
</html>
