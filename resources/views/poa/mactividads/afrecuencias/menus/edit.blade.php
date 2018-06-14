{{--
@component('elements.buttons.default')
    @slot('title', 'Crear nuevo Estado')
    @slot('class_bt', 'primary')
    @slot('route', route('afrecuencias.create'))
    @slot('icon', $icon_menus['create'])
@endcomponent
--}}

@component('elements.buttons.default')
    @slot('title', 'CRUD Frecuencias')
    @slot('class_bt', 'info')
    @slot('route', route('afrecuencias.index'))
    @slot('icon', $icon_menus['btn_frecuencias'])
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'CRUD Matriz de Actividades')
    @slot('class_bt', 'info')
    @slot('route', route('mactividads.index'))
    @slot('icon', $icon_menus['mactividads'])
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
