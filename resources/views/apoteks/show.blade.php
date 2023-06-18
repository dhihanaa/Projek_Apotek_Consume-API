<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get Show Apotek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="justify-content-center align-items-center container my-5">
        <form>
            <fieldset disabled>
                <legend>Data Apotek {{ $apotek['nama'] }}</legend>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Nama</label>
                    <input type="text" id="disabledTextInput" class="form-control" value="{{ $apotek['nama'] }}">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Rujukan</label>
                    <input type="text" id="disabledTextInput" class="form-control" value="{{ $apotek['rujukan'] }}">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Rumah Sakit</label>
                    <input type="text" id="disabledTextInput" class="form-control"
                        value="{{ $apotek['rumah_sakit'] }}">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Obat</label>
                    <input type="text" id="disabledTextInput" class="form-control"
                        value=" {{ json_encode($apotek['obat']) }}">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Harga Satuan</label>
                    <input type="text" id="disabledTextInput" class="form-control"
                        value=" {{ json_encode($apotek['harga_satuan']) }}">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Total Harga</label>
                    <input type="text" id="disabledTextInput" class="form-control"
                        value=" {{ $apotek['total_harga'] }}">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Apoteker</label>
                    <input type="text" id="disabledTextInput" class="form-control"
                        value=" {{ $apotek['apoteker'] }}">
                </div>
            </fieldset>
            <a href="/apotek" class="btn btn-primary">Back</a>
        </form>
    </div>
</body>

</html>
