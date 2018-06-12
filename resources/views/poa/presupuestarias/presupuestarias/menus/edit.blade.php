@component('admin.elements.buttons.default')
    @slot('title', 'Crear nueva Presupuestaria')
    @slot('class_bt', 'primary')
    @slot('route', route('presupuestarias.create'))
    @slot('icon', $icon_menus['create'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD Presupuestaria')
    @slot('class_bt', 'info')
    @slot('route', route('presupuestarias.index'))
    @slot('icon', $icon_menus['presupuestaria'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD Objetivos')
    @slot('class_bt', 'info')
    @slot('route', route('mobjetivos.index'))
    @slot('icon', $icon_menus['mobjetivos'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD Matriz de Problemas')
    @slot('class_bt', 'info')
    @slot('route', route('presupuestarias.index'))
    @slot('icon', $icon_menus['mproblemas'])
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

