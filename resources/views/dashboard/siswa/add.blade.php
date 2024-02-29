@extends('dashboard.layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Tambah Data Siswa</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('dashboard/siswa/store/')}}">
                @csrf
                @method('PUT')
                <label class="label" for="nama">Nama Siswa:</label>
                <input class="input" type="text" name="nama" required>
                <label  class="label" for="NIS">NIS:</label>
                <input class="input" type="number" name="NIS"  required>
                <select name="kelas_id" class="form-control">
                    @foreach ($kelas as $data)
                        <option name="kelas_id" value="{{ $data->id }}">{{$data->kelas}}</option>
                    @endforeach
                </select>
                <label  class="label" for="tgl_lahir">Tanggal Lahir:</label>
                <input class="input" type="date" name="tgl_lahir" required>
                <label  class="label" for="alamat">Alamat:</label>
                <input class="input" type="text" name="alamat" required>
                <button type="submit" class="save-changes">Save Changes</button>
            </form>
        </div>
    </div>
@endsection
