<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Marcos Lógicos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Matriz de Problemas</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
      @include('mlogico.mlogicos.show.mlogico')
  </div>
  <div class="tab-pane fade pt-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      {{-- @include('profiles.show.profile') --}}
  </div>
  <div class="tab-pane fade pt-2" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      {{-- @include('rols.show.rols') --}}
  </div>
</div>