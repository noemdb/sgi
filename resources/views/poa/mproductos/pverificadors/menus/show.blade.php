@component('elements.buttons.default')
    @slot('title', 'Crear nueva Verificadores')
    @slot('class_bt', 'primary')
    @slot('route', route('pverificadors.create'))
    @slot('icon', $icon_menus['create'])
@endcomponent

@component('elements.menus.dropdown')
    @slot('title', 'CRUD relacionados')
    @slot('class', 'info')
    @slot('icon', $icon_menus['crud'])
    @slot('dropdown')
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD Verificadores')
            @slot('text', 'Verificadores')
            @slot('class_bt', 'info')
            @slot('route', route('pverificadors.index'))
            @slot('icon', $icon_menus['pverificadors'])
        @endcomponent
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD Supuestos')
            @slot('text', 'Supuestos')
            @slot('class_bt', 'info')
            @slot('route', route('psupuestos.index'))
            @slot('icon', $icon_menus['psupuestos'])
        @endcomponent
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD Indicatores')
            @slot('text', 'Indicatores')
            @slot('class_bt', 'info')
            @slot('route', route('pindicadors.index'))
            @slot('icon', $icon_menus['pindicadors'])
        @endcomponent        
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD Productos')
            @slot('text', 'Productos')
            @slot('class_bt', 'info')
            @slot('route', route('mproductos.index'))
            @slot('icon', $icon_menus['mproductos'])
        @endcomponent
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD Objetivos')
            @slot('text', 'Objetivos')
            @slot('class_bt', 'info')
            @slot('route', route('mobjetivos.index'))
            @slot('icon', $icon_menus['mobjetivos'])
        @endcomponent
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD Matriz de Problemas')
            @slot('text', 'Problemas')
            @slot('class_bt', 'info')
            @slot('route', route('mproblemas.index'))
            @slot('icon', $icon_menus['mproblemas'])
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

