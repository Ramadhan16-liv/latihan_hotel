<h5>Halaman Tambah Kamar.</h5>
<a href="?url=kamar" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-tambah-kamar">
    <div class="form-group mb-2">
        <label>Nama Kamar</label>
        <input type="text" name="nama_kamar" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Nomor Kamar</label>
        <input type="number" name="nomor_kamar" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Fasilitas</label>
        <input type="text" name="fasilitas" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
    </div>
</form>