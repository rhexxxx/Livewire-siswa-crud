<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Siswa;

class SiswaList extends Component
{
    public $siswas;

    public $listeners = ['search'];
    public function mount()
    {
        $this->siswas = Siswa::all();
    }

    public function search($query)
    {
        $this->siswas = Siswa::where('nama', 'like', '%'. $query. '%')
        ->orWhere('nis', 'like', '%'. $query. '%')
        ->orWhere('jurusan', 'like', '%'. $query. '%')
        ->orWhere('kelas', 'like', '%'. $query. '%')
        ->orWhere('gender', 'like', '%'. $query. '%')
        ->get(); 
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
