<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="institucion-tab" data-toggle="tab" href="#institucion" role="tab" aria-controls="institucion" aria-selected="false">Institución</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="poa-tab" data-toggle="tab" href="#poa" role="tab" aria-controls="poa" aria-selected="false">POA'S</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
      @include('poa.direccions.show.direccion')
  </div>
  <div class="tab-pane fade pt-2" id="institucion" role="tabpanel" aria-labelledby="institucion-tab">
      @include('poa.institucions.show.institucion')
  </div>
  <div class="tab-pane fade pt-2" id="poa" role="tabpanel" aria-labelledby="poa-tab">
    @if($direccion->institucion->poas->count()>0)
      @php($poas = $direccion->institucion->poas)
      @include('poa.poas.show.list')
    @endisset
  </div>
</div>