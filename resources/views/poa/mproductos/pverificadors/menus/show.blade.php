@component('admin.elements.buttons.default')
    @slot('title', 'Crear nueva Verificadores')
    @slot('class_bt', 'primary')
    @slot('route', route('pverificadors.create'))
    @slot('icon', $icon_menus['create'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD Verificadores')
    @slot('class_bt', 'info')
    @slot('route', route('pverificadors.index'))
    @slot('icon', $icon_menus['pverificadors'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD de Productos')
    @slot('class_bt', 'info')
    @slot('route', route('mproductos.index'))
    @slot('icon', $icon_menus['mproductos'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD de Objetivos')
    @slot('class_bt', 'info')
    @slot('route', route('mobjetivos.index'))
    @slot('icon', $icon_menus['mobjetivos'])
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

