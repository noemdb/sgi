@component('admin.elements.buttons.default')
    @slot('title', 'Crear nuevo POA')
    @slot('class_bt', 'primary')
    @slot('route', route('poas.create'))
    @slot('icon', $icon_menus['create'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD POAS')
    @slot('class_bt', 'info')
    @slot('route', route('poas.index'))
    @slot('icon', $icon_menus['poas'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD Marcos Logicos')
    @slot('class_bt', 'info')
    @slot('route', '#')
    @slot('icon', $icon_menus['mlogicos'])
@endcomponent

@component('admin.elements.buttons.default')
    @slot('title', 'CRUD Matriz de Problemas')
    @slot('class_bt', 'info')
    @slot('route', '#')
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