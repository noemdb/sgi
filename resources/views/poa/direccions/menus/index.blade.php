@component('admin.elements.buttons.default')
    @slot('title', 'Crear nueva Dirección')
    @slot('class_bt', 'primary')
    @slot('route', route('direccions.create'))
    @slot('icon', 'fas fa-plus')
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD Instituciones')
    @slot('class_bt', 'info')
    @slot('route', route('institucions.index'))
    @slot('icon', 'fas fa-building')
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