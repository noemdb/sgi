@component('elements.buttons.default')
    @slot('title', 'Crear nuevo Problema')
    @slot('class_bt', 'primary')
    @slot('route', route('mproblemas.create'))
    @slot('icon', $icon_menus['create'])
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'CRUD POAS')
    @slot('class_bt', 'info')
    @slot('route', '#')
    @slot('icon', $icon_menus['poas'])
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'CRUD Direcciones')
    @slot('class_bt', 'info')
    @slot('route', '#')
    @slot('icon', $icon_menus['direcciones'])
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