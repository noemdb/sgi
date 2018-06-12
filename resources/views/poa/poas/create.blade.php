@extends('admin.layouts.dashboard.app')

@section('main')

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
        
        <div class="card bd-callout bd-callout-primary mt-2">

            <div class="card-header">
                
                <h2>

                    Nueva POA

                        {{-- INI Menu rapido --}}
                        <div class="btn-group float-right">

                            @include('admin.poa.poas.menus.edit')

                        </div>
                        {{-- FIN Menu rapido --}}

                </h2>

            </div>

            <div class="card-body">

                @include('admin.poa.poas.forms.create')

            </div>

        </div>

    </main>

@endsection

@section('scripts')
    @parent

    {{-- <script src="{{ asset("js/models/users/create.js") }}"></script> --}}

@endsection