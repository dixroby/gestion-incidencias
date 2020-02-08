

<div class="card">
    <div class="card-header">Menu</div>

    <div class="card-body">
        <div class="list-group">
            @if(auth()->check())
                <a href="#" class="list-group-item list-group-item-action ">
                    Gestion de incidencias
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Ver incidencias
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Reportar incidencias
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Administración
                </a>

                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        xd
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                        <a class="dropdown-item" href="{{url('/usuarios')}}">Usuarios</a>
                        <a class="dropdown-item" href="{{url('/proyectos')}}">Proyectos</a>
                        <a class="dropdown-item" href="{{url('/config')}}">Administración</a>
                    </div>
                </div>


            @else
                <a href="#" class="list-group-item list-group-item-action">
                    Bienvenido
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Instrucciones
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Créditos
                </a>
            @endif
        </div>
    </div>
</div>
<script !src="">


</script>
