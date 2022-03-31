<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Alumno;

class Crud extends Component
{
    public $alumnos, $nombre, $edad, $alumno_id;
    public $isModalOpen = 0;



    public function render()
    {
        $this->alumnos= Alumno::all();
        return view('livewire.crud');
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->nombre = '';
        $this->edad = '';
    }
    
    public function store()
    {
        $this->validate([
            'nombre' => 'required',
            'edad' => 'required'
        ]);
    
        Alumno::updateOrCreate(['id' => $this->alumno_id], [
            'nombre' => $this->nombre,
            'edad' => $this->edad
        ]);
        session()->flash('message', $this->alumno_id ? 'Alumno updated.' : 'Alumno created.');
        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $alumno = Alumno::findOrFail($id);
        $this->alumno_id = $id;
        $this->nombre = $alumno->nombre;
        $this->edad = $alumno->edad;
    
        $this->openModalPopover();
    }
    
    public function delete($id)
    {
        Alumno::find($id)->delete();
        session()->flash('message', 'Alumno deleted.');
    }
}
