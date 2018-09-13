@extends('poa.layouts.dashboard.app')

@section('main')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h1 class="page-header">
                Bienvenido al Dashboard
        </h1>

        {{-- labels --}}
        @includeIf('poa.home.partials.labels')

        {{-- listas --}}
        {{-- @includeIf('poa.home.partials.list') --}}

        {{-- graficas --}}
        @includeIf('poa.home.partials.graphics')

    </main>

@endsection
{{-- FIN section--}}

{{-- @section('stylesheet') --}}
    {{-- @parent --}}

    {{-- <link rel="stylesheet" href="{{ asset('css/timeline.css') }}"> --}}

{{-- @endsection --}}

{{-- @section('scripts') --}}
    {{-- @parent --}}

{{-- @endsection --}}
