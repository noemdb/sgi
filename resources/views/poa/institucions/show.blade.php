@extends('admin.layouts.dashboard.app')

{{-- @section('page_heading','Listado de Usuarios') --}}

@section('main')

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
        
        <div class="card mt-2 bd-callout bd-callout-info">

            <div class="card-header">
                
                <h2>

                    Información de la Institución

                    {{-- INI Menu rapido --}}
                    <div class="btn-group float-right border border-white rounded">

                        @include('admin.poa.institucions.menus.show')

                    </div>
                    {{-- FIN Menu rapido --}}

                </h2>

            </div>

            <div class="card-body">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-3 align-self-center">

                            {{-- <img alt="{{$institucion->id}}" class="img-thumbnail img-rounded" src="{{ isset($direccion->url_img) or asset('images/avatar/user_direccion.png') }}"> --}}
                            <i class="far fa-building fa-w-16 fa-10x" title="Institución"></i>

                        </div>

                        <div class="col-sm-9">
                          
                            {{-- Partial con los tabs de usuario (perfiles, roles) --}}
                            @include('admin.poa.institucions.show.tabs')

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-12">
                            {{-- INI Menu modelos realcionados --}}
                            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                              
                              <a class="btn btn-dark w-100" href="{{ route('institucions.edit',$institucion->id) }}" role="button">
                                Actualzar
                                <i class="fas fa-building"></i>
                              </a>

                            </div>
                            {{-- FIN Menu modelos realcionados --}}
                            
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

@endsection