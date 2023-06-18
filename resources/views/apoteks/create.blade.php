<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Create Apotek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card d-block m-auto bg-blue p-3 mt-4">
            <form action="/apotek/store" method="post">
                @csrf
                <div class="mb-3">
                    <label for="examplename" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Rujukan</label>
                    <input type="text" name="rujukan" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="examplename" class="form-label">Rumah Sakit</label>
                    <input type="text" name="rumah_sakit" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="examplename" class="form-label">Obat</label>
                    <input type="text" name="obat" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="examplename" class="form-label">Harga</label>
                    <input type="text" name="harga_satuan" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="examplename" class="form-label">Apoteker</label>
                    <input type="text" name="apoteker" class="form-control">
                </div>
                <td>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <a href="/apotek" class="btn btn-primary">Back</a>
                </td>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>

</body>

</html>
