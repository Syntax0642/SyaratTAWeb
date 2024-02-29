<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="shortcut icon" href="../assets/images/jejeslogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../siswa.css">
    <link rel="stylesheet" href="../public.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
@include('layouts.partial.navbar')
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
                            <a href="/siswa/detail/{{$data->id}}"> <button type="submit" class="details"><i style="color: white" class="fas fa-info-circle action-icons"></i>Details</button></a>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
