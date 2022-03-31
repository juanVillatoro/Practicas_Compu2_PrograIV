
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" align="center">
            CRUD PARA ALUMNO
        </h2>
</x-slot>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <button wire:click="create()"
                class="my-4 inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base font-bold text-white shadow-sm hover:bg-red-700">
                Agregar Alumno
            </button>
            @if($isModalOpen)
            @include('livewire.create')
            @endif
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 w-20">Id</th>
                            <th class="px-4 py-2">Nombre</th>
                            <th class="px-4 py-2">Edad</th>
                            <th class="px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alumnos as $alumno)
                        <tr>
                            <td class="border px-4 py-2">{{ $alumno->id }}</td>
                            <td class="border px-4 py-2">{{ $alumno->nombre }}</td>
                            <td class="border px-4 py-2">{{ $alumno->edad }}</td>
                            <td class="border px-4 py-2">
                                <button wire:click="edit({{ $alumno->id }})"
                                type="button" class="btn btn-primary">Editar</button>
                                <button wire:click="delete({{ $alumno->id }})"
                                type="button" class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
