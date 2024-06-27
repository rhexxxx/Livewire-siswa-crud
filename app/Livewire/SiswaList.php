<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Siswa;

class SiswaList extends Component
{
    public $siswas;
    public function mount()
    {
        $this->siswas = Siswa::all();
    }

    public function deleteSiswa($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        $this->siswas = Siswa::all();
    }
    public function render()
    {
        return view('livewire.siswa-list');
    }
}
