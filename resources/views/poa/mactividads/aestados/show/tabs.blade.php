<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mlogicos-tab" data-toggle="tab" href="#mlogicos" role="tab" aria-controls="mlogicos" aria-selected="false" title="Marco Lógico">Lógico</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mactividads-tab" data-toggle="tab" href="#mactividads" role="tab" aria-controls="mactividads" aria-selected="false" title="Matriz de Problemas">Problemas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mactividads-tab" data-toggle="tab" href="#mactividads" role="tab" aria-controls="mactividads" aria-selected="false" title="Matriz de Estados">Estados</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mactividads-tab" data-toggle="tab" href="#mactividads" role="tab" aria-controls="mactividads" aria-selected="false" title="Matriz de Estados">Estados</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mactividades-tab" data-toggle="tab" href="#mactividades" role="tab" aria-controls="mactividades" aria-selected="false" title="Matriz de Actividades">Actividades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mpresupuestaria-tab" data-toggle="tab" href="#mpresupuestaria" role="tab" aria-controls="mpresupuestaria" aria-selected="false" title="Matriz de Estados">Estados</a>
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
  <div class="tab-pane fade pt-2" id="mactividads" role="tabpanel" aria-labelledby="mactividads-tab">
      {{-- @include('rols.show.rols') --}}
  </div>
  <div class="tab-pane fade pt-2" id="mactividads" role="tabpanel" aria-labelledby="mactividads-tab">
      {{-- @include('poa.poas.show.poa') --}}
  </div>
  <div class="tab-pane fade pt-2" id="mactividads" role="tabpanel" aria-labelledby="mactividads-tab">
      {{-- @include('profiles.show.profile') --}}
  </div>
  <div class="tab-pane fade pt-2" id="mactividades" role="tabpanel" aria-labelledby="mactividades-tab">
      {{-- @include('rols.show.rols') --}}
  </div>
  <div class="tab-pane fade pt-2" id="mpresupuestaria" role="tabpanel" aria-labelledby="mpresupuestaria-tab">
      {{-- @include('rols.show.rols') --}}
  </div>
</div>