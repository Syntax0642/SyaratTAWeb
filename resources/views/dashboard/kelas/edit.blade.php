@extends('dashboard.layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Edit Data Siswa</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('dashboard/kelas/update/' . $kelas->id) }}">
                @csrf
                @method('PUT')
                <label class="label" for="kelas">Kelas :</label>
                <input class="input" type="text" name="kelas" value="{{ $kelas->kelas }}" required>
                <button type="submit" class="save-changes">Save Changes</button>
            </form>
        </div>
    </div>
@endsection
