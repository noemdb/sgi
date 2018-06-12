@isset($mlogicos)

    @foreach($mlogicos as $mlogico)
    
        @include('admin.poa.mlogicos.show.mlogico')

    @endforeach
    
@endisset