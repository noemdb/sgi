@component('elements.buttons.default')
    @slot('title', 'Crear nuevo Problema')
    @slot('class_bt', 'primary')
    @slot('route', route('pdeterminantes.create'))
    @slot('icon', $icon_menus['create'])
@endcomponent

@component('elements.menus.dropdown')
    @slot('title', 'CRUD relacionados')
    @slot('class', 'info')
    @slot('icon', $icon_menus['crud'])
    @slot('dropdown')
        {{-- @component('elements.buttons.dropdown')
            @slot('title', 'CRUD Determinates')
            @slot('text', 'Determinates')
            @slot('class_bt', 'info')
            @slot('route', route('pdeterminantes.index'))
            @slot('icon', $icon_menus['pdeterminantes'])
        @endcomponent  --}}
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD Causa/Efectos')
            @slot('text', 'Causa/Efectos')
            @slot('class_bt', 'info')
            @slot('route', route('pcausaefectos.index'))
            @slot('icon', $icon_menus['pcausaefectos'])
        @endcomponent
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD Problemas')
            @slot('text', 'Problemas')
            @slot('class_bt', 'info')
            @slot('route', route('mproblemas.index'))
            @slot('icon', $icon_menus['mproblemas'])
        @endcomponent               
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD de Objetivos')
            @slot('text', 'Objetivos')
            @slot('class_bt', 'info')
            @slot('route', route('mobjetivos.index'))
            @slot('icon', $icon_menus['mobjetivos'])
        @endcomponent
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD POAS')
            @slot('text', 'POAS')
            @slot('class_bt', 'info')
            @slot('route', route('poas.index'))
            @slot('icon', $icon_menus['poas'])
        @endcomponent
    @endslot
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'Ir atrás')
    @slot('class_bt', 'dark')
    @slot('route', url()->previous())
    @slot('icon', $icon_menus['back'])
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'Refrescar la página')
    @slot('class_bt', 'dark')
    @slot('route', url()->current())
    @slot('icon', $icon_menus['refres'])
@endcomponent