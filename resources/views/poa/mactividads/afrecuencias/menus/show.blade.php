{{--
@component('elements.buttons.default')
    @slot('title', 'Crear nueva Frecuencias')
    @slot('class_bt', 'primary')
    @slot('route', route('afrecuencias.create'))
    @slot('icon', $icon_menus['create'])
@endcomponent
--}}

@component('elements.buttons.default')
    @slot('title', 'CRUD Frecuencias')
    @slot('class_bt', 'info')
    @slot('route', route('afrecuencias.index'))
    @slot('icon', $icon_menus['afrecuencias'])
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'CRUD Objetivos')
    @slot('class_bt', 'info')
    @slot('route', route('mobjetivos.index'))
    @slot('icon', $icon_menus['mobjetivos'])
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'CRUD Matriz de Problemas')
    @slot('class_bt', 'info')
    @slot('route', route('mproductos.index'))
    @slot('icon', $icon_menus['mproblemas'])
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

