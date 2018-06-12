@extends('admin.layouts.dashboard.app')

{{-- @section('page_heading','Listado de Usuarios') --}}

@section('main')

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
        
        <div class="card mt-2 bd-callout bd-callout-info">

            <div class="card-header">
                
                <h2>

                    Información del Usuario

                    {{-- INI Menu rapido --}}
                    <div class="btn-group float-right border border-white rounded">

                        @include('admin.users.menus.show')

                    </div>
                    {{-- FIN Menu rapido --}}

                </h2>

            </div>

            <div class="card-body">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-3 align-self-center">

                            <img alt="{{$user->username}}" class="img-thumbnail img-rounded" src="{{ (isset($profile->url_img)) ? asset($profile->url_img) : asset('images/avatar/user_default.png') }}">

                        </div>

                        <div class="col-sm-9">
                          
                            {{-- Partial con los tabs de usuario (perfiles, roles) --}}
                            @include('admin.users.show.tabs')

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-12">
                            {{-- INI Menu modelos realcionados --}}
                            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                              
                              <a class="btn btn-dark w-100" href="{{ route('users.edit',$user->id) }}" role="button">
                                Actualzar
                                <i class="fas fa-user"></i>
                              </a>

                              <a class="btn btn-secondary w-100" href="{{ isset($profile->id) ? route('profiles.edit',$profile->id) : route('profiles.create')}}" role="button">
                                {{ isset($profile->id) ? 'Actualizar' : 'Crear'}}                
                                <i class="far fa-id-card"></i>
                              </a>

                              {{--
                              <a class="btn btn-secondary w-100" href="{{ ($rols->count() > 0) ? route('rols.edit',$user->id) : route('rols.create')}}" role="button">
                                {{ ($rols->count() > 0) ? 'Actualizar' : 'Crear'}}
                                <i class="far fa-id-badge"></i>
                              </a> 
                              --}}

                            </div>
                            {{-- FIN Menu modelos realcionados --}}
                            
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

@endsection