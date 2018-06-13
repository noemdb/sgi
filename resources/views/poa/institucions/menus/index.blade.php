@component('admin.elements.buttons.default')
    @slot('title', 'Crear nueva Institución')
    @slot('class_bt', 'primary')
    @slot('route', route('institucions.create'))
    @slot('icon', $icon_menus['institucions'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD Direcciones')
    @slot('class_bt', 'info')
    @slot('route', route('direccions.create'))
    @slot('icon', $icon_menus['direcciones'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD POA')
    @slot('class_bt', 'info')
    @slot('route', route('poas.create'))
    @slot('icon', $icon_menus['poas'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'Ir atrás')
    @slot('class_bt', 'dark')
    @slot('route', url()->previous())
    @slot('icon', $icon_menus['back'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'Refrescar la página')
    @slot('class_bt', 'dark')
    @slot('route', url()->current())
    @slot('icon', $icon_menus['refres'])
@endcomponent