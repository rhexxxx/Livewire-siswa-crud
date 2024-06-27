<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Siswa;

class FormEdit extends Component
{
    public $siswaId;
    public $nama;
    public $nis;
    public $kelas;
    public $gender;
    public $jurusan;
    public $isEditMode = false;

    protected $rules = [
        'nama' => 'required|string|max:255',
        'nis' => 'required|string|max:255',
        'kelas' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'jurusan' => 'required|string|max:255',
    ];

    public function mount($siswa = null)
    {
        if ($siswa) {
            $this->siswaId = $siswa->id;
            $this->nama = $siswa->nama;
            $this->nis = $siswa->nis;
            $this->kelas = $siswa->kelas;
            $this->gender = $siswa->gender;
            $this->jurusan = $siswa->jurusan;
            $this->isEditMode = true;
        }
    }

    public function submit()
    {
        $this->validate();

        if ($this->isEditMode) {
            $siswa = Siswa::findOrFail($this->siswaId);
            $siswa->update([
                'nama' => $this->nama,
                'nis' => $this->nis,
                'kelas' => $this->kelas,
                'gender' => $this->gender,
                'jurusan' => $this->jurusan,
            ]);
            session()->flash('message', 'Siswa updated successfully.');
        } else {
            Siswa::create([
                'nama' => $this->nama,
                'nis' => $this->nis,
                'kelas' => $this->kelas,
                'gender' => $this->gender,
                'jurusan' => $this->jurusan,
            ]);
            session()->flash('message', 'Siswa created successfully.');
        }
        return redirect()->route('index');
    }
    public function render()
    {
        return view('livewire.form-edit');
    }
}
