<form wire:submit.prevent="submit">
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" wire:model="nama" required>
    </div>
    <div class="form-group">
        <label for="nis">NIS:</label>
        <input type="text" class="form-control" id="nis" name="nis" wire:model="nis" required>
    </div>
    <div class="form-group">
        <label for="jurusan">Jurusan:</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan" wire:model="jurusan" required>
    </div>
    <div class="form-group">
        <label for="kelas">kelas:</label>
        <input type="text" class="form-control" id="kelas" name="kelas" wire:model="kelas" required>
    </div>
    <div class="form-group">
        <label for="gender">Gender:</label>
        <input type="text" class="form-control" id="gender" name="gender" wire:model="gender" required>
    </div>
</form>