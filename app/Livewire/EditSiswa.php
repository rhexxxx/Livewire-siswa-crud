<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Siswa;

class EditSiswa extends Component
{
    public $siswaId;

    public function mount($id)
    {
        $this->siswaId = $id;
    }

    public function render()
    {
        $siswa = Siswa::findOrFail($this->siswaId);
        return view('livewire.edit-siswa', compact('siswa'));
    }
}
