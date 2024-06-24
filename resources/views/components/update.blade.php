<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Siswa</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <x-form-edit :$siswa />
        <button type="submit" class="btn btn-primary mt-5">Update Siswa</button>
    </form>
</div>