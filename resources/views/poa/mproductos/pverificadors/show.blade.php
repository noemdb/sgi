@extends('poa.layouts.dashboard.app')

{{-- @section('page_heading','Listado de Usuarios') --}}

@section('main')

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">

        <div class="card mt-2 bd-callout bd-callout-info">

            <div class="card-header">

                <h2>

                    Información del Verificador

                    {{-- INI Menu rapido --}}
                    <div class="btn-group float-right border border-white rounded">

                        @include('poa.mproductos.pverificadors.menus.show')

                    </div>
                    {{-- FIN Menu rapido --}}

                </h2>

            </div>

            <div class="card-body p-2">

                <div class="container">

                    <div class="row">

                        <div class="col-12">

                            {{-- Partial con los tabs de usuario (perfiles, roles) --}}
                            @include('poa.mproductos.pverificadors.show.pverificador')

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </main>

@endsection