<div class="container mt-5">
    <h1 class="text-4xl text-center font-bold mb-4">{{ $isEditMode ? 'Edit' : 'Add' }} Siswa</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form wire:submit.prevent="submit" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg ">
        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama:</label>
            <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="nama" wire:model="nama" placeholder="Masukan nama..." required>
        </div>
        <div class="mb-4">
            <label for="nis" class="block text-sm font-medium text-gray-700">NIS:</label>
            <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="nis" wire:model="nis" placeholder="Masukan nis..." required>
        </div>
        <div class="mb-4">
            <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas:</label>
            <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="kelas" wire:model="kelas" placeholder="Masukan kelas..." required>
        </div>
        <div class="mb-4">
            <label for="gender" class="block text-sm font-medium text-gray-700">Gender:</label>
            {{-- <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="gender" wire:model="gender" placeholder="Masukan gender..." required> --}}
            <select name="gender" id="gender" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="gender" required>
                 <option value="Perempuan">Perempuan</option>
                <option value="laki laki">Laki Laki</option>
                <option value="Netral">Netral</option>
            </select>
        </div>
        {{-- <div class="mb-4">
            <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan:</label>
            <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="jurusan" wire:model="jurusan" placeholder="Masukan jurusan..." required>
        </div> --}}
        <div class="mb-4">
            <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan:</label>
            <select name="jurusan" id="jurusan" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="jurusan" required> 
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Teknik Komputer Jaringan">Teknik Komputer Dan Jaringan</option>
                <option value="MultiMedia">Multimedia</option>
            </select>
        </div>
        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">{{ $isEditMode ? 'Update' : 'Add' }} Siswa</button>
        <span wire:loading class="text-blue-10">Saving .....</span>
    </form>
</div>