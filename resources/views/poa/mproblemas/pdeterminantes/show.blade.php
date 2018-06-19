@extends('poa.layouts.dashboard.app')

{{-- @section('page_heading','Listado de Usuarios') --}}

@section('main')

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">

        <div class="card mt-2 bd-callout bd-callout-info">

            <div class="card-header">

                <h2>

                    Información del Determinante

                    {{-- INI Menu rapido --}}
                    <div class="btn-group float-right border border-white rounded">

                        @include('poa.mproblemas.pdeterminantes.menus.show')

                    </div>
                    {{-- FIN Menu rapido --}}

                </h2>

            </div>

            <div class="card-body p-2">

                {{-- Partial con los tabs de usuario (perfiles, roles) --}}
                {{-- @include('poa.mproblemas.pdeterminantes.show.pdeterminante') --}}
                @include('poa.mproblemas.pdeterminantes.show.tabs')

            </div>

        </div>

    </main>

@endsection