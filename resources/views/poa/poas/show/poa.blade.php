@isset($poa)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>

        <tr>
            <th scope="col">Descripción</th>

            <th scope="col">

                <span class="text-poas-descripcion-{{ $poa->id  or ''}}">
                    {{$poa->descripcion or ''}}
                </span>

            </th>
        </tr>

        {{-- falta validacion, cuando el poa no tiene actividades registradas
        <tr>
            <th scope="col">Completado</th>

            <td scope="col">

                <span class="text-poas-periodo-{{ $poa->id  or ''}}">

                    @isset($poa->countact($poa->id,'')->value)

                        {{ $poa->porcetanje or ''}}%                    
                    
                        [{{ $poa->countact($poa->id,'FINALIZADA')->value or ''}} Actividades finalizadas de {{ $poa->countact($poa->id,'')->value or ''}} asignadas]

                    @endisset

                    <div class="progress"  style="height: 3px;">
                        <div class="progress-bar bg-{{$poa->ClassProgressBar or 'secondary'}}" role="progressbar" style="width: {{ $poa->porcetanje or '0'}}%" aria-valuenow="{{ $poa->porcetanje or '0'}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    
                </span>

            </td>
        </tr> 
        --}}

        <tr>
            <th scope="col">Período</th>

            <td scope="col">

                <span class="text-poas-periodo-{{ $poa->id  or ''}}">
                    {{$poa->periodo or ''}}
                </span>

            </td>
        </tr>


        {{-- INI Nuevo formato --}}
        <tr>
            <th scope="col">Gran Objetivo Histórico</th>
            <td scope="col">
                <span class="text-poas-objhistorico-{{ $poa->id  or ''}}">
                    {{$poa->objhistorico or ''}}
                </span>
            </td>
        </tr>
        <tr>
            <th scope="col">Objetivo Nacional</th>
            <td scope="col">
                <span class="text-poas-objnacional-{{ $poa->id  or ''}}">
                    {{$poa->objnacional or ''}}
                </span>
            </td>
        </tr>
        <tr>
            <th scope="col">Objetivo Estratégico</th>
            <td scope="col">
                <span class="text-poas-objestrategico-{{ $poa->id  or ''}}">
                    {{$poa->objestrategico or ''}}
                </span>
            </td>
        </tr>
        {{-- INI Nuevo formato --}}


        {{-- <tr>
            <th scope="col">Área</th>
            <td scope="col">
                <span class="text-poas-area-{{ $poa->id  or ''}}">
                    {{$poa->area or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Estratégia</th>
            <td>
                <span class="text-poas-estrategia-{{ $poa->id  or ''}}">
                    {{$poa->estrategia or ''}}
                </span>
            </td>
        </tr> --}}

        <tr>
            <th scope="row">Usuario</th>
            <td>

                <span class="text-poas-username-{{ $poa->id  or ''}}">
                    {{$poa->user->username or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($poa->created_at))
                    {{$poa->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($poa->updated_at))
                    {{$poa->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        {{-- INI Menu modelos realcionados --}}
        {{-- @if(Auth->) --}}
            <tr>
                <td colspan="2">
                    <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                    <a class="btn btn-info w-100" href="{{ route('poas.showfull', $poa->id) }}" role="button">
                        Detalles
                        <i class="{{ $icon_menus['info'] or ''}}"></i>
                      </a>
                      <a class="btn btn-warning w-100" href="{{ route('poas.edit',$poa->id) }}" role="button">
                        Actualzar
                        <i class="{{ $icon_menus['poas'] or ''}}"></i>
                      </a>
                    </div>
                </td>
            </tr>
        {{-- @endif --}}
        {{-- FIN Menu modelos realcionados --}}
      </tbody>
    </table>
@endisset