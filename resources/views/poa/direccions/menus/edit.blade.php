@component('elements.buttons.default')
    @slot('title', 'Crear nueva Dirección')
    @slot('class_bt', 'primary')
    @slot('route', route('direccions.create'))
    @slot('icon', 'fas fa-plus')
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'CRUD Direcciones')
    @slot('class_bt', 'info')
    @slot('route', route('direccions.index'))
    @slot('icon', 'fas fa-warehouse')
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'Ir atrás')
    @slot('class_bt', 'dark')
    @slot('route', url()->previous())
    @slot('icon', 'fas fa-chevron-left')
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'Refrescar la página')
    @slot('class_bt', 'dark')
    @slot('route', url()->current())
    @slot('icon', 'fas fa-redo')
@endcomponent