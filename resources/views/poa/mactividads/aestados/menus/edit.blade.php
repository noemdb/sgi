@component('elements.buttons.default')
    @slot('title', 'Crear nuevo Estado')
    @slot('class_bt', 'primary')
    @slot('route', route('aestados.create'))
    @slot('icon', $icon_menus['create'])
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'CRUD Estados')
    @slot('class_bt', 'info')
    @slot('route', route('aestados.index'))
    @slot('icon', $icon_menus['aestados'])
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