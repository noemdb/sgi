@component('admin.elements.buttons.default')
    @slot('title', 'Crear nueva Actividades')
    @slot('class_bt', 'primary')
    @slot('route', route('mactividads.create'))
    @slot('icon', $icon_menus['create'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD Matriz de Actividades')
    @slot('class_bt', 'info')
    @slot('route', route('mactividads.index'))
    @slot('icon', $icon_menus['mactividads'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD Matriz de Productos')
    @slot('class_bt', 'info')
    @slot('route', route('mproductos.index'))
    @slot('icon', $icon_menus['mproductos'])
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