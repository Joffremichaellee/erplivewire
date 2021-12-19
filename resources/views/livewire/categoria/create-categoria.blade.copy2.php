<div>
    
    <x-jet-danger-button wire:click="$set('open',true)">
    
        agregar
    
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
           Nueva Categoria
                
        </x-slot>

        <x-slot name="content">

            <x-jet-label>nombre</x-jet-label>
            <input type="text" class="form-control" wire:model.defer="nombre">
            
            @error('nombre')
                {{$message}}
            @enderror


            <x-jet-label>descripcion</x-jet-label>
            <input type="text" class="form-control" wire:model.defer="descripcion">
                
        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button>
    
                cancelar
            
            </x-jet-danger-button>

            <x-jet-danger-button wire:click="agregar">
    
                agregar
            
            </x-jet-danger-button>
        </x-slot>


    </x-jet-dialog-modal>
</div>
