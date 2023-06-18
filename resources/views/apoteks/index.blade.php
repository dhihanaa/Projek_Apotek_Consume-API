<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Data Apotek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="">APOTEK</a>
            <div class="float:left">
                <a class="navbar-brand" href="/">Home</a>
                <a class="navbar-brand" href="/apotek/trash/all">Trash</a>
                <button class="navbar-toggler"data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
            </div>
    </nav>

    <div class="container my-5">
        @if (session('status'))
            <div class="alert alert-success mt-3">
                {{ session('status') }}
            </div>
        @endif

        <a href="/apotek/create" class="btn btn-success">Tambah Data</a>
        <table class="table table-bordered table-success my-3">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Nama</th>
                    <th>Rujukan</th>
                    <th>Rumah Sakit</th>
                    <th>Obat</th>
                    <th>Harga Satuan</th>
                    <th>Total Harga</th>
                    <th>Apoteker</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apotek as $value)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $value['nama'] }}</td>
                        @if ($value['rujukan'] == 1)
                            <td class="text-center">{{ $value['rujukan'] }}</td>
                            <td>{{ $value['rumah_sakit'] }}</td>
                        @else
                            <td class="text-center">Tidak</td>
                            <td class="text-center">Tidak Dirujuk</td>
                        @endif
                        <td>{{ json_encode($value['obat']) }}</td>
                        <td>{{ json_encode($value['harga_satuan']) }}</td>
                        <td>{{ $value['total_harga'] }}</td>
                        <td>{{ $value['apoteker'] }}</td>
                        <td>
                            <a href="/apotek/{{ $value['id'] }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                            <a href="/apotek/edit/{{ $value['id'] }}" class="btn btn-warning"><i
                                    class="bi bi-arrow-clockwise"></i></a>
                            <form action="/apotek/delete/{{ $value['id'] }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mt-1"><i class="bi bi-trash-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
