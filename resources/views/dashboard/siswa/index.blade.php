@extends('dashboard.layouts.main')
@section('content')
    <button type="submit" class="tambahdata"><a href="/dashboard/siswa/add">Tambah Data</a></button>
    <div class=filter-form>
        <div class="form-group">
            <label for="data_filter">Filter by Kelas:</label>
            <form  action="{{ url('/dashboard/filter') }}">
                <div class="input-group">
                    <select class="form-select" name="kelas_id">
                        @foreach($filter as $item)
                            <option value="{{$item->id}}">{{$item->kelas}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </form>
        </div>
    </div>
    <div class="table-container">
        <table>
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">NIS</th>
                <th scope="col">Kelas</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1 @endphp
            @foreach ($siswa as $data)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td><h3>{{$data->nama}}</h3></td>
                    <td><h3>{{$data->NIS}}</h3></td>
                    <td><h3>{{$data->kelass->kelas}}</h3></td>
                    <td><h3>{{$data->tgl_lahir}}</h3></td>
                    <td><h3>{{$data->alamat}}</h3></td>
                    <td>
                        <div class="actions">
                            <div>
                                <a href="/dashboard/siswa/detail/{{$data->id}}"> <button type="submit" class="details"><i style="color: white" class="fas fa-info-circle action-icons"></i>Details</button></a>
                                <form class="delete" action="{{ route('dashboard.siswa.destroy', $data->id) }}"  method="post" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')"><i style="color: white" class="fas fa-trash-alt action-icons"></i>Delete</button>
                                    </button>
                                </form>
                                <div>
                                    <a href="/dashboard/siswa/edit/{{$data->id}}"> <button type="submit" class="edit"><i style="color: white" class="fas fa-edit action-icons"></i>Edit</button></a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <button type="submit" class="tambahdata"><a href="/dashboard/siswa/index">Show all</a></button>
    <div class="pagination">
        {{$siswa->links()}}
    </div>
@endsection
