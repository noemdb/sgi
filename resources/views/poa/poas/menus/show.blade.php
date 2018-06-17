@component('elements.buttons.default')
    @slot('title', 'Crear nuevo POA')
    @slot('class_bt', 'primary')
    @slot('route', route('poas.create'))
    @slot('icon', $icon_menus['create'])
@endcomponent

@component('elements.menus.dropdown')
    @slot('title', 'CRUD relacionados')
    @slot('class', 'info')
    @slot('icon', $icon_menus['crud'])
    @slot('dropdown')
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD POAS')
            @slot('text', 'POAS')
            @slot('class_bt', 'info')
            @slot('route', route('poas.index'))
            @slot('icon', $icon_menus['poas'])
        @endcomponent
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD Marcos Logicos')
            @slot('text', 'Marcos Logicos')
            @slot('class_bt', 'info')
            @slot('route', route('mlogicos.index'))
            @slot('icon', $icon_menus['mlogicos'])
        @endcomponent
        @component('elements.buttons.dropdown')
            @slot('title', 'CRUD Matriz de Problemas')
            @slot('text', 'Matriz de Problemas')
            @slot('class_bt', 'info')
            @slot('route', route('mproblemas.index'))
            @slot('icon', $icon_menus['mproblemas'])
        @endcomponent
    @endslot
@endcomponent

@component('elements.buttons.default')
    @slot('title', 'Mostrar/Ocultar botenes de información y creación')
    @slot('class_bt', 'dark btn_info_ctr')
    @slot('route', '#')
    @slot('icon', $icon_menus['btn_ctr'])
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