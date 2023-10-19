<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Inventory</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            {{-- kode barang --}}
                            <div class="form-group">
                                <label class="font-weight-bold">Kode Barang</label>
                                <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" name="kode_barang" value="{{ old('kode_barang', $post->kode_barang) }}" placeholder="Masukkan Kode Barang">
                            
                                <!-- error message untuk title -->
                                @error('kode_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- tanggal --}}
                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal</label>
                                <input type="date" format="DD-MM-YY" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal', $post->tanggal) }}" placeholder="Masukkan Tanggal Masuk Barang">
                            
                                <!-- error message untuk title -->
                                @error('tanggal')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- nama_barang--}}
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Barang</label>
                                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang', $post->nama_barang) }}" placeholder="Masukkan Tanggal Nama Barang">
                            
                                <!-- error message untuk nama barang -->
                                @error('nama_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- satuan--}}
                            <div class="form-group">
                                <label class="font-weight-bold">satuan</label>
                                <input type="text" class="form-control @error('satuan') is-invalid @enderror" name="satuan" value="{{ old('satuan', $post->satuan) }}" placeholder="Masukkan satuan">
                            
                                <!-- error message untuk satuan -->
                                @error('satuan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- jumlah--}}
                            <div class="form-group">
                                <label class="font-weight-bold">jumlah</label>
                                <input type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlah', $post->jumlah) }}" placeholder="Masukkan jumlah">
                            
                                <!-- error message untuk jumlah-->
                                @error('jumlah')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- harga_barang--}}
                            <div class="form-group">
                                <label class="font-weight-bold">harga barang</label>
                                <input type="text" class="form-control @error('harga_barang') is-invalid @enderror" name="harga_barang" value="{{ old('harga_barang', $post->harga_barang) }}" placeholder="Masukkan harga barang">
                            
                                <!-- error message untuk harga barang -->
                                @error('harga_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>