<div>
    <h2>Listado de Clientes</h2>
    <br>
    <div class="input-group rounded">
        <input type="search" class="form-control rounded" placeholder="Buscar Cliente" aria-label="Search" aria-describedby="search-addon" wire:model='valor' />
        <span class="input-group-text border-0" id="search-addon">
          <i class="fas fa-search"></i>
        </span>
    </div>
    <div class="col-12 mt-4 justify-content-center align-content-center mt-2">
        <center>
            {{$clientes->links()}}
        </center>
    </div>
    <div class="row">
        @foreach ($clientes as $cliente)
        <div class="col col-md-4 col-lg-5 col-xl-4 mt-4">
            <div class="card" style="border-radius: 15px; background-color: #f5f5f5;">
              <div class="card-body p-4 text-black">
                <div>
                  <h6 class="mb-4">Cliente: {{ $cliente-> apellido }}, {{ $cliente-> nombre }}</h6>
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <p class="small mb-0"><i class="far fa-id-card me-2"></i>&nbsp;DPI: </p>
                    <p class="fw-bold mb-0">{{ $cliente-> dpi }}</p>
                  </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                  <div class="flex-shrink-0">
                    <i class="fas fa-user-circle fa-2x" style="width: 70px;"></i>
                  </div>
                  <div class="flex-grow-1 ms-3 text-truncate">
                    <div class="d-flex flex-row align-items-center mb-2">
                      <p class="mb-0 me-2">Email: {{ $cliente-> email}}</p>
                    </div>
                    <div>
                        <p class="mb-0 me-2">Tel: {{ $cliente-> tel}}</p>
                        <p class="mb-0 me-2"> Direccion: {{ $cliente-> direccion}}</p>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button wire:click='edit({{$cliente->id_cliente}})' class="btn btn-primary">
                        <i class="fas fa-user-edit"></i>
                        Editar
                    </button>
                    <button wire:click='destroy({{$cliente->id_cliente}})' class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                        Eliminar
                    </button>
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>

<div class="col-12 mt-4 justify-content-center align-content-center">
    <center>
        {{$clientes->links()}}
    </center>
</div>


