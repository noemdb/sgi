@php ($chart = ['range'=>'Todos','id_chart'=>'poaxactividadchart','urlapi'=>route('poas.charts.poaxactividad'),'tipo'=>'bar','limit'=>8, 'legend'=>true ])
@section('scripts')
    @parent
    {{-- Llamado a la funcion responsable de inicilizar el Chart --}}
     <script> requestData('{{ $chart['range'] }}','{{ $chart['id_chart'] }}','{{ $chart['urlapi'] }}','{{ $chart['tipo'] }}','{{ $chart['limit'] }}','{{ $chart['legend'] }}'); </script>
@endsection

@component('elements.card.panel')
    @slot('class', 'danger')
    @slot('panelControls', 'true')
    @slot('id', $chart['id_chart'])
    @slot('header', "Poa's por Actividades")
    @slot('iconTitle', $icon_menus['chartline'])
    @slot('body')
        @component('elements.canvas.chart')
            @slot('class', 'borderRBL')
            @slot('nav')
              @component('elements.chart.navyear')
                @slot('id_chart', $chart['id_chart'])
                @slot('urlapi', $chart['urlapi'])
                @slot('tipo', $chart['tipo'])
                @slot('limit', $chart['limit'])
                @slot('legend', $chart['legend'])
              @endcomponent
            @endslot
            @slot('id', $chart['id_chart'])
        @endcomponent
    @endslot
@endcomponent