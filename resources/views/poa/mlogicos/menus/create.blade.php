@component('admin.elements.buttons.default')
    @slot('title', 'CRUD Marcos Lógicos')
    @slot('class_bt', 'info')
    @slot('route', route('mlogicos.index'))
    @slot('icon', 'fab fa-delicious')
@endcomponent 

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD POAS')
    @slot('class_bt', 'info')
    @slot('route', route('poas.index'))
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