<div class="container mt-5">
    <h1 class="text-center mb-4">Add New Siswa</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <x-form-tambah />
        <button type="submit" class="mt-5 btn btn-primary">Add Siswa</button>
    </form>
</div>