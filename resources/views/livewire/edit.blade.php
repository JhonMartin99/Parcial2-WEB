<div>
    <h2>
        Editar Cliente
    </h2>

    @include('livewire.form')

    <br>

    <button wire:click="update" class="btn btn-success">
        actualizar
    </button>

    <button wire:click="default" class="btn btn-link">
        Cancelar
    </button>
</div>
