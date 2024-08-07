<div class="container mx-auto p-4">
    <h1 class="text-5xl font-bold mb-10">Siswa List</h1>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <a href="/create" class="bg-slate-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mb-8">tambah</a>
    <table class="table-auto w-full">
        <thead>
            <tr class="text-xl">
                <th class="px-4 py-2">NIS</th>
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">kelas</th>
                <th class="px-4 py-2">Gender</th>
                <th class="px-4 py-2">Jurusan</th>
                <th class="px-4 py-2">menu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
            <div wire:key = "{{ $siswa->id }}">
            </div>
                <tr>
                    <td class="border px-4 py-2">{{ $siswa->nis }}</td>
                    <td class="border px-4 py-2">{{ $siswa->nama }}</td>
                    <td class="border px-4 py-2">{{ $siswa->kelas }}</td>
                    <td class="border px-4 py-2">{{ $siswa->gender }}</td>
                    <td class="border px-4 py-2">{{ $siswa->jurusan }}</td>
                <td class="border px-4 py-2">
                        <div class="d-flex mx-auto">
                            <button 
                            wire:click="deleteSiswa({{ $siswa->id }})"
                            wire:confirm = "are you sure to delete {{ $siswa->nama }}'s data?"
                            type="submit" class="bg-rose-700 hover:bg-rose-500 text-white font-bold py-2 px-4 rounded">
                                Hapus</button>
                            <a href="{{ route('edit', $siswa->id) }}" class="bg-emerald-700 hover:bg-emerald-400 text-white font-bold py-2 px-4 rounded ms-2">Edit</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <livewire:todo/>
</div>