@component('elements.buttons.default')
    @slot('title', 'Crear nueva Indicatores')
    @slot('class_bt', 'primary')
    @slot('route', route('pindicadors.create'))
    @slot('icon', $icon_menus['create'])
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'CRUD Indicatores')
    @slot('class_bt', 'info')
    @slot('route', route('pindicadors.index'))
    @slot('icon', $icon_menus['pindicadors'])
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'CRUD de Productos')
    @slot('class_bt', 'info')
    @slot('route', route('mproductos.index'))
    @slot('icon', $icon_menus['mproductos'])
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'CRUD de Objetivos')
    @slot('class_bt', 'info')
    @slot('route', route('mobjetivos.index'))
    @slot('icon', $icon_menus['mobjetivos'])
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

