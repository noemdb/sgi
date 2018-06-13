<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="poa-tab" data-toggle="tab" href="#poa" role="tab" aria-controls="poa" aria-selected="false">POA'S</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="direccions-tab" data-toggle="tab" href="#" role="direcciones" aria-controls="direcciones" aria-selected="false">Direcciones</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
      @include('poa.institucions.show.institucion')
  </div>
  <div class="tab-pane fade pt-2" id="poa" role="tabpanel" aria-labelledby="poa-tab">
      {{-- @include('profiles.show.poa') --}}
  </div>
  <div class="tab-pane fade pt-2" id="direcciones" role="tabpanel" aria-labelledby="direcciones-tab">
      {{-- @include('rols.show.rols') --}}
  </div>
</div>