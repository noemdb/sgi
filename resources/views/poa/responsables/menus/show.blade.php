@component('elements.buttons.default')
    @slot('title', 'Crear nuevo Responsable')
    @slot('class_bt', 'primary')
    @slot('route', route('responsables.create'))
    @slot('icon', 'fas fa-plus')
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'CRUD de Responsables')
    @slot('class_bt', 'info')
    @slot('route', route('responsables.index'))
    @slot('icon', $icon_menus['responsables'])
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'CRUD Direcciones')
    @slot('class_bt', 'info')
    @slot('route', route('direccions.index'))
    @slot('icon', $icon_menus['direcciones'])
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