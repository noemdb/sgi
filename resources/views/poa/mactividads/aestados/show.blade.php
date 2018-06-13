@extends('poa.layouts.dashboard.app')

{{-- @section('page_heading','Listado de Usuarios') --}}

@section('main')

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">

        <div class="card mt-2 bd-callout bd-callout-info">

            <div class="card-header">

                <h2>

                    Información del Estado

                    {{-- INI Menu rapido --}}
                    <div class="btn-group float-right border border-white rounded">

                        @include('poa.mactividads.aestados.menus.show')

                    </div>
                    {{-- FIN Menu rapido --}}

                </h2>

            </div>

            <div class="card-body p-2">

                <div class="container">

                    <div class="row">

                        <div class="col-12">

                            {{-- Partial con los tabs de usuario (perfiles, roles) --}}
                            @include('poa.mactividads.aestados.show.aestado')

                            {{-- INI Menu modelos realcionados --}}
                            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                              <a class="btn btn-dark w-100" href="{{ route('aestados.edit',$aestado->id) }}" role="button">
                                Actualzar
                                <i class="{{ $icon_menus['aestados'] or ''}}"></i>
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