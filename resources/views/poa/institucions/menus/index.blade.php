@component('admin.elements.buttons.default')
    @slot('title', 'Crear nueva Institución')
    @slot('class_bt', 'primary')
    @slot('route', route('institucions.create'))
    @slot('icon', 'fas fa-plus')
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD Direcciones')
    @slot('class_bt', 'info')
    @slot('route', '#')
    @slot('icon', 'fas fa-warehouse')
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD POA')
    @slot('class_bt', 'info')
    @slot('route', '#')
    @slot('icon', 'fas fa-th')
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