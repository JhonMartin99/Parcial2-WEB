<div>
    <div class="form-group">
        <label>DPI:</label>
        <input type="text" class="form-control" wire:model="dpi">
        @error('dpi') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group mt-1">
        <label>Nombre:</label>
        <input class="form-control" wire:model="nombre"></textarea>
        @error('nombre') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group mt-1">
        <label>Apellido</label>
        <input class="form-control" wire:model="apellido">
        @error('apellido') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group mt-1">
        <label>Email:</label>
        <input class="form-control" type="email" wire:model="email">
        @error('email') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group mt-1">
        <label>Telefono:</label>
        <input class="form-control" type="number" wire:model="tel">
        @error('tel') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group mt-1">
        <label>Direccion</label>
        <textarea class="form-control" wire:model="direccion"></textarea>
        @error('direccion') <span class="text-danger">{{$message}}</span> @enderror
    </div>
</div>
