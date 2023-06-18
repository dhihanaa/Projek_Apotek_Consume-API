<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Data Rujukan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <div class="container mt-5">
        @if (session('status'))
            <div class="alert alert-success mt-3">
                {{ session('status') }}
            </div>
        @endif

        <form action="/apotek/update/{{ $apotek['id'] }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nama</label>
                <input type="text" name="nama" id="disabledTextInput" class="form-control"
                    value="{{ $apotek['nama'] }}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Rujukan</label>
                <input type="text" name="rujukan" id="disabledTextInput" class="form-control"
                    value="{{ $apotek['rujukan'] }}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Rumah Sakit</label>
                <input type="text" name="rumah_sakit" id="disabledTextInput" class="form-control"
                    value="{{ $apotek['rumah_sakit'] }}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Obat</label>
                <input type="text" name="obat" id="disabledTextInput" class="form-control"
                    value="{{ json_encode($apotek['obat']) }}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Harga Satuan</label>
                <input type="text" name="harga_satuan" id="disabledTextInput" class="form-control"
                    value="{{ json_encode($apotek['harga_satuan']) }}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Apoteker</label>
                <input type="text" name="apoteker" id="disabledTextInput" class="form-control"
                    value="{{ $apotek['apoteker'] }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
