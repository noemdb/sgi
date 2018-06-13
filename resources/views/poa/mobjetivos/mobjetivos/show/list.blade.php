@if($mobjetivos->count()>0)

    <ul class="list-group">

        @foreach($mobjetivos as $mobjetivo)

            <li class="list-group-item d-flex justify-content-between align-items-center pl-2 pr-0">

                <div class="continer">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center">

                            {{ $loop->iteration or '' }}. {{$mobjetivo->objetivo or ''}}

                            <span class="badge badge-light badge-pill">
                                @component('admin.poa.elementos.botones.edit')
                                    @slot('title','Mostrar')
                                    @slot('btnclass','link')
                                    @slot('route',route('mobjetivos.show',$mobjetivo->id))
                                    @slot('icon','mostrar')
                                @endcomponent
                            </span>

                        </div>
                    </div>

                    @if($mobjetivo->mproductos->count()>0 && empty($not_product))

                        <div class="row">

                            <div class="col-12">

                                <div>

                                        <table class="table table-bordered table-sm mt-2 pt-2">

                                            <tbody>
                                                <tr>

                                                    <td class="align-middle">
                                                        <div class="vertical-text text-secondary" title="Producto: {{$mproducto->producto or ''}}">
                                                            Productos</td>
                                                        </div>
                                                    <td>

                                                        @php($mproductos = $mobjetivo->mproductos)

                                                        @include('poa.mproductos.mproductos.show.list')

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                </div>

                            </div>

                        </div>

                    @endif

                </div>

            </li>

         @endforeach

    </ul>

@endif
