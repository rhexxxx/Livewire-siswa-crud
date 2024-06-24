<div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $siswa->nama )}}" required>
</div>
<div class="form-group">
    <label for="nis">NIS:</label>
    <input type="text" class="form-control" id="nis" name="nis" value="{{ old('nis', $siswa->nis) }}" required>
</div>
<div class="form-group">
    <label for="jurusan">Jurusan:</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ old('jurusan', $siswa->jurusan) }}" required>
</div>
<div class="form-group">
    <label for="kelas">kelas:</label>
    <input type="text" class="form-control" id="kelas" name="kelas" value="{{ old('kelas', $siswa->kelas) }}" required>
</div>
<div class="form-group">
    <label for="gender">Gender:</label>
    <input type="text" class="form-control" id="gender" name="gender" value="{{ old('gender', $siswa->gender) }}" required>
</div>