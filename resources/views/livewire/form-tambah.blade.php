<div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" class="form-control" id="nama" name="nama" wire:model="nama" value="{{ old('nama') }}" required>
</div>
<div class="form-group">
    <label for="nis">NIS:</label>
    <input type="text" class="form-control" id="nis" name="nis" wire:model="nis" value="{{ old('nis') }}" required>
</div>
<div class="form-group">
    <label for="jurusan">Jurusan:</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan" wire:model="jurusan" value="{{ old('jurusan') }}" required>
</div>
<div class="form-group">
    <label for="kelas">kelas:</label>
    <input type="text" class="form-control" id="kelas" name="kelas" wire:model="kelas" value="{{ old('kelas') }}" required>
</div>
<div class="form-group">
    <label for="gender">Gender:</label>
    <input type="text" class="form-control" id="gender" name="gender" wire:model="gender" value="{{ old('gender') }}" required>
</div>
