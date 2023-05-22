<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
                <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" wire:model="nombre">
                            @error('nombre') <span class="error text-xs select-none border-l-4 border-red-400 bg-red-100 p-4 font-medium hover:border-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="descripcion_larga" class="block text-gray-700 text-sm font-bold mb-2">Descripción Larga:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion_larga" wire:model="descripcion_larga">
                            @error('descripcion_larga') <span class="error text-xs select-none border-l-4 border-red-400 bg-red-100 p-4 font-medium hover:border-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="descripcion_corta" class="block text-gray-700 text-sm font-bold mb-2">Descripción Corta:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion_corta" wire:model="descripcion_corta">
                            @error('descripcion_corta') <span class="error text-xs select-none border-l-4 border-red-400 bg-red-100 p-4 font-medium hover:border-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="precio_normal" class="block text-gray-700 text-sm font-bold mb-2">Precio Normal:</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="precio_normal" wire:model="precio_normal">
                            @error('precio_normal') <span class="error text-xs select-none border-l-4 border-red-400 bg-red-100 p-4 font-medium hover:border-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="precio_con_descuento" class="block text-gray-700 text-sm font-bold mb-2">Precio Descuento:</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="precio_con_descuento" wire:model="precio_con_descuento">
                            @error('precio_con_descuento') <span class="error text-xs select-none border-l-4 border-red-400 bg-red-100 p-4 font-medium hover:border-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="tipo_producto" class="block text-gray-700 text-sm font-bold mb-2">Tipo Producto:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tipo_producto" wire:model="tipo_producto">
                            @error('tipo_producto') <span class="error text-xs select-none border-l-4 border-red-400 bg-red-100 p-4 font-medium hover:border-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="marca" class="block text-gray-700 text-sm font-bold mb-2">Marca:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="marca" wire:model="marca">
                            @error('marca') <span class="error text-xs select-none border-l-4 border-red-400 bg-red-100 p-4 font-medium hover:border-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="cantidad" class="block text-gray-700 text-sm font-bold mb-2">Cantidad:</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cantidad" wire:model="cantidad">
                            @error('cantidad') <span class="error text-xs select-none border-l-4 border-red-400 bg-red-100 p-4 font-medium hover:border-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="guardar()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                            </span>

                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="cerrarModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                            </span>
                        </div>

                    </div>
                </form>    
            </div>


    </div>
</div>