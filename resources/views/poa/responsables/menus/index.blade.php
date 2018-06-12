@component('admin.elements.buttons.default')
    @slot('title', 'Crear nuevo Responsable')
    @slot('class_bt', 'primary')
    @slot('route', route('responsables.create'))
    @slot('icon', $icon_menus['responsables'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD Direcciones')
    @slot('class_bt', 'info')
    @slot('route', route('direccions.index'))
    @slot('icon', $icon_menus['direcciones'])
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