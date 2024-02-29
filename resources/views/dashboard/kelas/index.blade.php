@extends('dashboard.layouts.main')

@section('content')
    <button type="submit" class="tambahdata"><a href="/dashboard/kelas/add">Tambah Data</a></button>
    <div class="table-container">
        <table>
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama Kelas</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1 @endphp
            @foreach ($kelas as $data)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td><h3>{{$data->kelas}}</h3></td>
                    <td><div class="actions">
                            <div>
                                <form class="delete" action="{{ route('dashboard.kelas.destroys', $data->id) }}"  method="post" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')"><i style="color: white" class="fas fa-trash-alt action-icons"></i>Delete</button>
                                    </button>
                                </form>
                                <div>
                                    <a href="/dashboard/kelas/edit/{{$data->id}}"> <button type="submit" class="edit"><i style="color: white" class="fas fa-edit action-icons"></i>Edit</button></a>
                                </div>
                            </div>
                        </div></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
