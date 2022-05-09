@extends('mitra.layouts.main')

@section('container')
<div class="container" style="margin-top: 50px">
    <h1 {{$user = Auth()->user('id');}}>Tambah Produk</h1>
    <hr />

    <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ route('create', $user->id) }}">
    @csrf
        <div class="form-group">
            <label class="col-sm-2 control-label">Jenis Produk</label>
            <div class="col-sm-4">
                <input type="text" id="jenis" name="jenis" class="form-control @error('nama') is-invalid @enderror" placeholder="Arabica" >
                <div class="invalid-feedback">
                    Tolong Masukkan Nama Produk Anda!
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Gambar</label>
            <div class="col-sm-4">
                <input enctype="multipart/form-data"  id="images"
                                        placeholder="" name="images" type="file" oninput="showImage()"
                                        class="form-control">
                <div class="invalid-feedback">
                    Tolong Masukkan Alamat Anda!
                </div>
            </div>
        </div>
        <div class="mb-3">
            <h6>Preview Image</h6>
        </div>
        <div class="mb-3">
            <div>
                <img id="imgContainer" src=""
                    style="object-fit: fill; display: inline; max-height: 300px; max-width:450px;"
                    alt="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Stok</label>
            <div class="col-sm-4">
                <input type="text" name="stok" class="form-control @error('stok') is-invalid @enderror" placeholder="100" id="stok">
                <div class="invalid-feedback">
                    Tolong Masukkan Jumlah stock Anda!
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Harga</label>
            <div class="col-sm-4">
                <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="100" id="harga">
                <div class="invalid-feedback">
                    Tolong Masukkan harga barang Anda!
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Tanggal</label>
            <div class="col-sm-4">
                <input type="date" name="date" class="form-control @error('pekerjaan') is-invalid @enderror" placeholder="Karyawan" id="date">
                <div class="invalid-feedback">
                    Tolong Masukkan Profesi Anda saat ini!
                </div>
            </div>
        </div>
        <div><br></div>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-8">
                <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </form>
</div>
@endsection
<script>
    $(document).ready(function() {
            $('#contents').summernote({
                height: 400,
                placeholder: 'Isi Contents',
            });
        });
    function showImage() {
        var fileImage = document.getElementById('image')
        var reader = new FileReader();
        var imageContainer = document.getElementById('imgContainer')
        var file = fileImage.files[0]
        reader.onload = function() {
            const result = reader.result;
            imageContainer.src = result;
        }
        reader.readAsDataURL(file);
    }
</script>
