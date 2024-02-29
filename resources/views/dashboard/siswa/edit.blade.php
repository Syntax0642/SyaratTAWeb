@extends('dashboard.layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Edit Data Siswa</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('dashboard/siswa/update/' . $siswa->id) }}">
                @csrf
                @method('PUT')
                <label class="label" for="nama">Nama Siswa:</label>
                <input class="input" type="text" name="nama" value="{{ $siswa->nama }}" required>
                <label  class="label" for="NIS">NIS:</label>
                <input class="input" type="number" name="NIS" value="{{ $siswa->NIS }}" required>
                <select name="kelas_id" class="form-control">
                    @foreach ($kelas as $data)
                        <option value="{{ $data->id }}"{{ $data->id == $siswa->kelas_id ? 'selected' : '' }}>
                            {{ $data->kelas }}
                        </option>
                    @endforeach
                </select>
                <label  class="label" for="tgl_lahir">Tanggal Lahir:</label>
                <input class="input" type="text" name="tgl_lahir" value="{{ $siswa->tgl_lahir }}" required>
                <label  class="label" for="alamat">Alamat:</label>
                <input class="input" type="text" name="alamat" value="{{ $siswa->alamat }}" required>
                <button type="submit" class="save-changes">Save Changes</button>
            </form>
        </div>
    </div>
@endsection
