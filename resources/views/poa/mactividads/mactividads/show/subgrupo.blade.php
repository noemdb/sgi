@if($mactividads->count()>0)

<div class="container">

    {{-- 
    <div class="row">
        <div class="col-sm p-1 text-secondary">
            <strong>Problema:</strong> {{$mproblema->problema or ''}}
        </div>
    </div>
    --}}

    <div class="row alert alert-secondary p-1 mb-0">
        <div class="col-sm-1 p-1">
            <strong>Nº</strong>
        </div>
        <div class="col-sm-4 p-1">
            <strong>Descripción</strong>
        </div>

        <div class="col-sm-3 p-1">
            <strong>Responsable</strong>
        </div>

        {{-- <div class="col-sm p-1">
            <strong>Reprogramada: </strong>
        </div>
        
        <div class="col-sm p-1">
            <strong>Ubicación: </strong>
        </div> --}}

        <div class="col-sm-2 p-1" title="Fecha Inicial">
            <strong>F.Inicial</strong>
        </div>

        <div class="col-sm-2 p-1" title="Fecha Final">
            <strong>F.Final</strong>
        </div>

    </div>

    @foreach($mactividads as $mactividad)
        <div class="row pt-1" title="Actividades">

            <div class="col-sm-1 p-1" >
                {{ $loop->iteration or '' }}
            </div>

            <div class="col-sm-4 p-1">
                {{ $mactividad->descripcion or ''}}
                <br>
                @component('elements.buttons.edit')
                    @slot('title','Nuevo')
                    @slot('btnclass','link')
                    @slot('align','right')
                    {{-- @slot('route',route('mobjetivos.createWithid',$mproblema->id)) --}}
                    @slot('icon','nuevo')
                @endcomponent
            </div>            

            <div class="col-sm-3 p-1">
                {{$mactividad->responsable->nombre or ''}}
                <br>
                @component('elements.buttons.edit')
                    @slot('title','Nuevo')
                    @slot('btnclass','link')
                    @slot('align','right')
                    {{-- @slot('route',route('mobjetivos.createWithid',$mproblema->id)) --}}
                    @slot('icon','nuevo')
                @endcomponent
            </div>

            {{-- <div class="col-sm p-1"> --}}
                {{-- {{$mactividad->ractividada_id or ''}} --}}
                {{-- <br> --}}
                {{-- @component('elements.buttons.edit') --}}
                    {{-- @slot('title','Nuevo') --}}
                    {{-- @slot('btnclass','link') --}}
                    {{-- @slot('align','right') --}}
                    {{-- @slot('route',route('mobjetivos.createWithid',$mproblema->id)) --}}
                    {{-- @slot('icon','nuevo') --}}
                {{-- @endcomponent --}}
            {{-- </div> --}}

            {{-- <div class="col-sm p-1"> --}}
                {{-- {{$mactividad->ubicaion or ''}} --}}
                {{-- <br> --}}
                {{-- @component('elements.buttons.edit') --}}
                    {{-- @slot('title','Nuevo') --}}
                    {{-- @slot('btnclass','link') --}}
                    {{-- @slot('align','right') --}}
                    {{-- @slot('route',route('mobjetivos.createWithid',$mproblema->id)) --}}
                    {{-- @slot('icon','nuevo') --}}
                {{-- @endcomponent --}}
            {{-- </div> --}}

            <div class="col-sm-2 p-1">
                {{ (isset($mactividad->finicial)) ? Carbon\Carbon::parse($mactividad->finicial)->format('d.m.Y') : '' }}
                <br>
                @component('elements.buttons.edit')
                    @slot('title','Nuevo')
                    @slot('btnclass','link')
                    @slot('align','right')
                    {{-- @slot('route',route('mobjetivos.createWithid',$mproblema->id)) --}}
                    @slot('icon','nuevo')
                @endcomponent
            </div>

            <div class="col-sm-2 p-1">
                {{ (isset($mactividad->ffinal)) ? Carbon\Carbon::parse($mactividad->ffinal)->format('d.m.Y') : '' }}
                <br>
                @component('elements.buttons.edit')
                    @slot('title','Nuevo')
                    @slot('btnclass','link')
                    @slot('align','right')
                    {{-- @slot('route',route('mobjetivos.createWithid',$mproblema->id)) --}}
                    @slot('icon','nuevo')
                @endcomponent
            </div>
            
        </div>

    @endforeach


    {{--

    <div class="row">
        <div class="col-sm-12">
            @component('elements.buttons.edit')
                @slot('title','Nuevo')
                @slot('btnclass','link')
                @slot('align','right')
                @slot('icon','nuevo')
            @endcomponent
        </div>
    </div>

    --}}

    <div class="dropdown-divider"></div>

</div>



@endif