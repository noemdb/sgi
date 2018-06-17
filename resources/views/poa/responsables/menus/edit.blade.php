@component('elements.buttons.default')
    @slot('title', 'Crear nuevo Responsable')
    @slot('class_bt', 'primary')
    @slot('route', route('responsables.create'))
    @slot('icon', $icon_menus['create'])
@endcomponent

@component('elements.menus.dropdown')
    @slot('title', 'CRUD relacionados')
    @slot('class', 'info')
    @slot('icon', $icon_menus['crud'])
    @slot('dropdown')
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD Instituciones')
            @slot('text', 'Instituciones')
            @slot('class_bt', 'info')
            @slot('route', route('institucions.index'))
            @slot('icon', $icon_menus['institucions'])
        @endcomponent
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD Direcciones')
            @slot('text', 'Direcciones')
            @slot('class_bt', 'info')
            @slot('route', route('direccions.index'))
            @slot('icon', $icon_menus['direcciones'])
        @endcomponent
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD Responsables')
            @slot('text', 'Responsables')
            @slot('class_bt', 'info')
            @slot('route', route('responsables.index'))
            @slot('icon', $icon_menus['responsables'])
        @endcomponent
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD POA\'S')
            @slot('text', 'POA\'S')
            @slot('class_bt', 'info')
            @slot('route', route('poas.index'))
            @slot('icon', $icon_menus['poas'])
        @endcomponent
    @endslot
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