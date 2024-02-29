@extends('dashboard.layouts.main')

@section('content')
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
@endsection
