<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Inventory</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h4>Nama Barang = {{ $post->kode_barang }}</h4>
                        <h4>Tanggal = {{ $post->tanggal }}</h4>
                        <h4>Nama barang = {{ $post->nama_barang }}</h4>
                        <h4>Satuan = {{ $post->satuan }}</h4>
                        <h4>Jumlah = {{ $post->jumlah }}</h4>
                        <h4>Harga Barang = Rp.{{ number_format($post->harga_barang) }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>