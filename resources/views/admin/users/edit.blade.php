@extends('admin.layouts.dashboard.app')
{{-- @section('page_heading','Listado de Usuarios') --}}
@section('main')

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
        
        <div class="card card-primary mt-2 bd-callout bd-callout-warning">

            <div class="card-header">
                
                <h2>

                    Actualizar Usuario

                        {{-- INI Menu rapido --}}
                        <div class="btn-group float-right">

                            @include('admin.elements.buttons.user-index')

                            @include('admin.elements.buttons.profile-index')

                            @include('admin.elements.buttons.rol-index') 

                            @include('admin.elements.buttons.goback')      

                            @include('admin.elements.buttons.url-refresh')

                        </div>
                        {{-- FIN Menu rapido --}}

                </h2>

            </div>

            <div class="card-body">

                @include('admin.users.forms.update')

            </div>

        </div>

    </main>

@endsection