@extends('admin.layouts.dashboard.app')

{{-- @section('page_heading','Listado de Usuarios') --}}

@section('main')

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
        
        <div class="card mt-2 bd-callout bd-callout-info">

            <div class="card-header">
                
                <h2>

                    Información de la Actividad

                    {{-- INI Menu rapido --}}
                    <div class="btn-group float-right border border-white rounded">

                        @include('admin.poa.mactividads.mactividads.menus.show')                        

                    </div>
                    {{-- FIN Menu rapido --}}

                </h2>

            </div>

            <div class="card-body p-2">

                <div class="container">

                    <div class="row">

                        {{-- <div class="col-sm-3 align-self-center"> --}}

                            {{-- <img alt="{{$poa->id}}" class="img-thumbnail img-rounded" src="{{ isset($direccion->url_img) or asset('images/avatar/user_direccion.png') }}"> --}}
                            {{-- <i class="fas fa-th fa-w-16 fa-10x"></i> --}}

                        {{-- </div> --}}

                        <div class="col-12">
                          
                            {{-- Partial con los tabs de usuario (perfiles, roles) --}}
                            @include('admin.poa.mactividads.mactividads.show.mactividad')

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </main>

@endsection