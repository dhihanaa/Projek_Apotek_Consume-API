<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Data Trash</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

    <div class="container my-5">
        <div class="mt-4 d-flex justify-content-start">
            <a href="/apotek" class="btn btn-primary">Back</a>
        </div>
        <table class="table table-bordered table-light my-3">
            <thead class="table-success">
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
                @if($apotek)
                @foreach($apotek as $value)
                <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $value['nama'] }}</td>
                    <td>{{ $value['rujukan'] }}</td>
                    <td>{{ $value['rumah_sakit'] }}</td>
                    <td>{{ json_encode($value['obat']) }}</td>
                    <td>{{ json_encode($value['harga_satuan']) }}</td>
                    <td>{{ $value['total_harga'] }}</td>
                    <td>{{ $value['apoteker'] }}</td>
                    <td>
                        <a href="/apotek/trash/restore/{{$value['id']}}" class="btn btn-primary mb-1">Restore</a>
                        <a href="/apotek/trash/permanent/{{$value['id']}}" class="btn btn-danger">Permanent</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>