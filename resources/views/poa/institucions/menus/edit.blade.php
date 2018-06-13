@component('admin.elements.buttons.default')
    @slot('title', 'Crear nueva Institución')
    @slot('class_bt', 'primary')
    @slot('route', route('institucions.create'))
    @slot('icon', $icon_menus['create'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD Instituciones')
    @slot('class_bt', 'info')
    @slot('route', route('institucions.index'))
    @slot('icon', $icon_menus['institucions'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'Ir atrás')
    @slot('class_bt', 'dark')
    @slot('route', url()->previous())
    @slot('icon', 'fas fa-chevron-left')
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'Refrescar la página')
    @slot('class_bt', 'dark')
    @slot('route', url()->current())
    @slot('icon', 'fas fa-redo')
@endcomponent