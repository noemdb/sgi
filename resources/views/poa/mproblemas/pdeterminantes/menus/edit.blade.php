@component('elements.buttons.default')
    @slot('title', 'Crear nuevo Problema')
    @slot('class_bt', 'primary')
    @slot('route', route('pdeterminantes.create'))
    @slot('icon', $icon_menus['create'])
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'CRUD Determinantes')
    @slot('class_bt', 'info')
    @slot('route', route('pdeterminantes.index'))
    @slot('icon', $icon_menus['pdeterminantes'])
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'CRUD Matriz de Problemas')
    @slot('class_bt', 'info')
    @slot('route', route('mproblemas.index'))
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