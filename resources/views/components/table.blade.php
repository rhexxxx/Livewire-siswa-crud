<div>
    <h1 class="text-2 font-bold mb-4">Siswa List</h1>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <a href="#" class="btn btn-primary" onclick="loadComponent('create')">tambah</a>
    <table class="table-auto w-full">
        <thead>
            <tr>
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
                <tr>
                    <td class="border px-4 py-2">{{ $siswa->nis }}</td>
                    <td class="border px-4 py-2">{{ $siswa->nama }}</td>
                    <td class="border px-4 py-2">{{ $siswa->kelas }}</td>
                    <td class="border px-4 py-2">{{ $siswa->gender }}</td>
                    <td class="border px-4 py-2">{{ $siswa->jurusan }}</td>
                    <td class="border px-4 py-2">
                        <div class="d-flex">
                            <form action="{{ route('destroy', $siswa->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are You Sure ?')">Hapus</button>
                            </form>
                            <a href="#" class="btn btn-warning ms-2"
                                onclick="loadComponent('update', {{ $siswa->id }})">Edit</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
