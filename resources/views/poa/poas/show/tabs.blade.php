<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mlogicos-tab" data-toggle="tab" href="#mlogicos" role="tab" aria-controls="mlogicos" aria-selected="false" title="Marco Lógico">Lógico</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mproblemas-tab" data-toggle="tab" href="#mproblemas" role="tab" aria-controls="mproblemas" aria-selected="false" title="Matriz de Problemas">Problemas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mobjetivos-tab" data-toggle="tab" href="#mobjetivos" role="tab" aria-controls="mobjetivos" aria-selected="false" title="Matriz de Objetivos">Objetivos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mproductos-tab" data-toggle="tab" href="#mproductos" role="tab" aria-controls="mproductos" aria-selected="false" title="Matriz de Productos">Productos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mactividads-tab" data-toggle="tab" href="#mactividads" role="tab" aria-controls="mactividads" aria-selected="false" title="Matriz de Actividades">Actividades</a>
  </li>
  {{-- 
  <li class="nav-item">
    <a class="nav-link" id="mpresupuestaria-tab" data-toggle="tab" href="#mpresupuestaria" role="tab" aria-controls="mpresupuestaria" aria-selected="false" title="Matriz de Presupuestaria">Presupuestaria</a>
  </li> 
  --}}
</ul>

<div class="tab-content" id="myTabContent">
  
  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">

      @include('admin.poa.poas.show.poa')
      
  </div>

  <div class="tab-pane fade pt-2" id="mlogicos" role="tabpanel" aria-labelledby="profile-tab">

    @isset($mlogicos)
        @foreach($mlogicos as $mlogico)
            @include('admin.poa.mlogicos.show.simple')
            <div class="dropdown-divider"></div>
        @endforeach
    @endisset

  </div>

  <div class="tab-pane fade pt-2" id="mproblemas" role="tabpanel" aria-labelledby="mproblemas-tab">

    @foreach($direccions as $direccion)
      <div class="alert alert-primary mb-1"> Dirección: {{ $direccion->nombre or ''}}</div>
      @if($direccion->mproblemas->count()>0)
        @php($mproblemas = $direccion->mproblemas)
        @include('admin.poa.mproblemas.mproblemas.show.group')
      @endif
    @endforeach

  </div>

  <div class="tab-pane fade pt-2" id="mobjetivos" role="tabpanel" aria-labelledby="mobjetivos-tab">

    @foreach($direccions as $direccion)
      <div class="alert alert-primary mb-0"> Dirección: {{ $direccion->nombre or ''}}</div>
      @if($direccion->mproblemas->count()>0)
        @php($mproblemas = $direccion->mproblemas)
        @foreach($mproblemas as $mproblema)
          @if($mproblema->mobjetivos->count()>0)
            @php($mobjetivos = $mproblema->mobjetivos)
            @php($loop_objetivos = 0)
            @include('admin.poa.mobjetivos.mobjetivos.show.group')
          @endif
        @endforeach
      @endif
    @endforeach

  </div>
  <div class="tab-pane fade pt-2" id="mproductos" role="tabpanel" aria-labelledby="mproductos-tab">

    @foreach($direccions as $direccion)
      <div class="alert alert-primary mb-0"> Dirección: {{ $direccion->nombre or ''}}</div>
      @if($direccion->mproblemas->count()>0)
        @php($mproblemas = $direccion->mproblemas)
        @foreach($mproblemas as $mproblema)
          @foreach($mproblema->mobjetivos as $mobjetivo)
                @if($mobjetivo->mproductos->count()>0)
                  @php($mproductos = $mobjetivo->mproductos)
                  {{-- {{$mproductos}} --}}
                  @include('admin.poa.mproductos.mproductos.show.group')
                @endif
          @endforeach
        @endforeach
      @endif
    @endforeach

  </div>
  <div class="tab-pane fade pt-2" id="mactividads" role="tabpanel" aria-labelledby="mactividads-tab">

    @foreach($direccions as $direccion)
      <div class="alert alert-primary mb-0"> Dirección: {{ $direccion->nombre or ''}}</div>
      @if($direccion->mproblemas->count()>0)
        @php($mproblemas = $direccion->mproblemas)
        @foreach($mproblemas as $mproblema)
          @foreach($mproblema->mobjetivos as $mobjetivo)
            @foreach($mobjetivo->mproductos as $mproducto)
                @if($mproducto->mactividads->count()>0)
                  @php($mactividads = $mproducto->mactividads)
                  @include('admin.poa.mactividads.mactividads.show.group')
                @endif
            @endforeach
          @endforeach
        @endforeach
      @endif
      <div class="dropdown-divider"></div>
    @endforeach

  </div>
  {{-- 
  <div class="tab-pane fade pt-2" id="mpresupuestaria" role="tabpanel" aria-labelledby="mpresupuestaria-tab">

    @foreach($direccions as $direccion)
      <div class="alert alert-primary mb-0"> Dirección: {{ $direccion->nombre or ''}}</div>
      @if($direccion->mproblemas->count()>0)
        @php($mproblemas = $direccion->mproblemas)
        @foreach($mproblemas as $mproblema)
          @if($mproblema->mobjetivos->count()>0)
            @php($mobjetivos = $mproblema->mobjetivos)
            @php($loop_objetivos = 0)
            @include('admin.poa.presupuestarias.presupuestarias.show.group')
          @endif
        @endforeach
      @endif
    @endforeach
    
  </div> 
  --}}
</div> 

@section('stylesheet')
    @parent

    <style type="text/css">
        .vertical-text {
            writing-mode: vertical-rl;
            white-space: nowrap;
            width: 30px;
        }

        .truncate {
            height: 50px;

            /*height: auto;*/
            /*max-height: 100%;*/
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .button_info{
          display: none;
        }

    </style>

@endsection

{{-- para mostrar/ocultar botones de ayuda para edicion o creacion --}}
@section('scripts')
  @parent
  <script type="text/javascript" class="init">
    $(".btn_info_ctr").click(function(){
        // alert("123");
        $(".button_info").toggle();
    });
  </script>
@endsection