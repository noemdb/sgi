@extends('poa.layouts.dashboard.app')

@section('main')

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">

        <div class="card bd-callout bd-callout-primary mt-2">

            <div class="card-header">

                <h2>

                    Nuevo registro para la Matriz Productos

                        {{-- INI Menu rapido --}}
                        <div class="btn-group float-right">

                            @include('poa.mproductos.mproductos.menus.edit')

                        </div>
                        {{-- FIN Menu rapido --}}

                </h2>

            </div>

            <div class="card-body">

                @include('poa.mproductos.mproductos.forms.create')

            </div>

        </div>

    </main>

@endsection

@section('scripts')
    @parent

    {{-- <script src="{{ asset("js/models/users/create.js") }}"></script> --}}

@endsection