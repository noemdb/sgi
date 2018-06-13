<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mlogicos-tab" data-toggle="tab" href="#mlogicos" role="tab" aria-controls="mlogicos" aria-selected="false" title="Marco Lógico">Lógico</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="presupuestarias-tab" data-toggle="tab" href="#presupuestarias" role="tab" aria-controls="presupuestarias" aria-selected="false" title="Matriz de Problemas">Problemas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="presupuestarias-tab" data-toggle="tab" href="#presupuestarias" role="tab" aria-controls="presupuestarias" aria-selected="false" title="Matriz de Presupuestaria">Presupuestaria</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mproductos-tab" data-toggle="tab" href="#mproductos" role="tab" aria-controls="mproductos" aria-selected="false" title="Matriz de Productos">Productos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mactividades-tab" data-toggle="tab" href="#mactividades" role="tab" aria-controls="mactividades" aria-selected="false" title="Matriz de Actividades">Actividades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mpresupuestaria-tab" data-toggle="tab" href="#mpresupuestaria" role="tab" aria-controls="mpresupuestaria" aria-selected="false" title="Matriz de Presupuestaria">Presupuestaria</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
      @include('poa.poas.show.poa')
  </div>
  <div class="tab-pane fade pt-2" id="mlogicos" role="tabpanel" aria-labelledby="profile-tab">

    @isset($mlogicos)

        @foreach($mlogicos as $mlogico)

            @include('poa.mlogicos.show.mlogico')

        @endforeach

    @endisset

  </div>
  <div class="tab-pane fade pt-2" id="presupuestarias" role="tabpanel" aria-labelledby="presupuestarias-tab">
      {{-- @include('rols.show.rols') --}}
  </div>
  <div class="tab-pane fade pt-2" id="presupuestarias" role="tabpanel" aria-labelledby="presupuestarias-tab">
      {{-- @include('poa.poas.show.poa') --}}
  </div>
  <div class="tab-pane fade pt-2" id="mproductos" role="tabpanel" aria-labelledby="mproductos-tab">
      {{-- @include('profiles.show.profile') --}}
  </div>
  <div class="tab-pane fade pt-2" id="mactividades" role="tabpanel" aria-labelledby="mactividades-tab">
      {{-- @include('rols.show.rols') --}}
  </div>
  <div class="tab-pane fade pt-2" id="mpresupuestaria" role="tabpanel" aria-labelledby="mpresupuestaria-tab">
      {{-- @include('rols.show.rols') --}}
  </div>
</div>