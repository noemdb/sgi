@extends('admin.layouts.dashboard.app')

{{-- @section('page_heading','Listado de Usuarios') --}}

@section('main')

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
        
        <div class="card mt-2 bd-callout bd-callout-info">

            <div class="card-header">
                
                <h2>

                    Información del Marco Lógico.

                    {{-- INI Menu rapido --}}
                    <div class="btn-group float-right border border-white rounded">

                        @include('admin.poa.mlogicos.menus.show')

                    </div>
                    {{-- FIN Menu rapido --}}

                </h2>

            </div>

            <div class="card-body p-0">

                <div class="container">

                    <div class="row">

                        {{-- <div class="col-sm-3 align-self-center"> --}}

                            {{-- <img alt="{{$mlogico->id}}" class="img-thumbnail img-rounded" src="{{ isset($direccion->url_img) or asset('images/avatar/user_direccion.png') }}"> --}}
                            {{-- <i class="fab fa-delicious fa-10x"></i> --}}

                        {{-- </div> --}}

                        <div class="col-12">
                          
                            {{-- Partial con los tabs de usuario (perfiles, roles) --}}
                            @include('admin.poa.mlogicos.show.mlogico')

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-12">
                            {{-- INI Menu modelos realcionados --}}
                            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                              
                              <a class="btn btn-dark w-100" href="{{ route('mlogicos.edit',$mlogico->id) }}" role="button">
                                Actualzar
                                <i class="fas fa-th"></i>
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