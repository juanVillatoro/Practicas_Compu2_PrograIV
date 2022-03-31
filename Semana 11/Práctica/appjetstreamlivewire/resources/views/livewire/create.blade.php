<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="form-group">
                        <div class="mb-4">
                            <label for="nombreLabel">Nombre:</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="nombreInput" placeholder="Introduzca el nombre" wire:model="nombre"
                            >
                        </div>
                        <div class="mb-4">
                            <label for="edadLabel">Edad:</label>
                            <input type="number"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="edadInput" placeholder="Introduzca la edad" wire:model="edad"
                            >
                        </div>                       
                    </div>

                    <div align="center">
                        <button wire:click.prevent="store()" type="button" class="btn btn-primary btn-lg">    
                            Guardar
                        </button>
                        <button wire:click="closeModalPopover()" type="button" class="btn btn-secondary-info btn-lg">
                        Cancelar
                        </button>
                    </div>

                </div>
                
            </form>
        </div>
    </div>
</div>