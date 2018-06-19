<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="poa-tab" data-toggle="tab" href="#poa" role="tab" aria-controls="poa" aria-selected="false">POA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="institucion-tab" data-toggle="tab" href="#institucion" role="tab" aria-controls="institucion" aria-selected="false">Institución</a>
  </li>
  {{-- <li class="nav-item">
    <a class="nav-link" id="direccions-tab" data-toggle="tab" href="#direcciones" role="direcciones" aria-controls="direcciones" aria-selected="false">Direcciones</a>
  </li> --}}
</ul>

<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
      @include('poa.mlogicos.show.mlogico')
  </div>

  <div class="tab-pane fade pt-2" id="poa" role="tabpanel" aria-labelledby="poa-tab">
    @if($mlogico->poa->count()>0)
      @php($poa = $mlogico->poa)
        @include('poa.poas.show.poa')
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="institucion" role="tabpanel" aria-labelledby="institucion-tab">
    @if($mlogico->poa->institucion->count()>0)
      @php($institucion = $mlogico->poa->institucion)
      @include('poa.institucions.show.institucion')
    @endif
  </div>

  {{-- <div class="tab-pane fade pt-2" id="direcciones" role="tabpanel" aria-labelledby="direcciones-tab">
    @if($mlogico->poa->institucion->direccions->count()>0)
      @php($direccions = $mlogico->poa->institucion->direccions)
      @foreach($direccions as $direccion)
        @include('poa.direccions.show.direccion')
      @endforeach
    @endif
  </div> --}}

</div>