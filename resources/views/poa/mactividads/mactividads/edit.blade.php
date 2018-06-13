@extends('poa.layouts.dashboard.app')
{{-- @section('page_heading','Listado de Usuarios') --}}
@section('main')

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">

        <div class="card card-primary mt-2 bd-callout bd-callout-warning">

            <div class="card-header">

                <h2>

                    Actualizar Actividad

                        {{-- INI Menu rapido --}}
                        <div class="btn-group float-right">

                            @include('poa.mactividads.mactividads.menus.edit')

                        </div>
                        {{-- FIN Menu rapido --}}

                </h2>

            </div>

            <div class="card-body">

                @include('poa.mactividads.mactividads.forms.update')

            </div>

        </div>

    </main>

@endsection