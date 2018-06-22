<div class="sidebar-sticky">
    <ul class="nav flex-column">

      {{-- INI Sistema --}}
      <li class="nav-item">

          <a class="nav-link pr-2" href="{{ route('poa.home') }}">
            <span data-feather="home"></span>
            Inicio {{-- <span class="sr-only">(current)</span> --}}
          </a>

      </li>
      {{-- FIN Sistema --}}

      {{-- INI Maestros --}}
      <li class="nav-item">

        <a class="accordion nav-link pr-2" href="#">
          <span data-feather="home"></span>
          Princiaples {{-- <span class="sr-only">(current)</span> --}}
        </a>

        {{-- <button class="accordion nav-item">Section 1</button> --}}
        <div class="accordion_panel">
          <ul class="nav flex-column">
            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  Institución {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2 p-1" href="{{ route('institucions.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  Dirección {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('direccions.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  Responsables {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('responsables.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  POA'S {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('poas.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  Marcos Lógicos {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('mlogicos.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

          </ul>
        </div>

      </li>
      {{-- FIN Maestros --}}

      {{-- INI Matrices --}}

      <div class="dropdown-divider"></div>
      <li class="nav-item active">
          <a class="nav-link pr-2" href="#">
            Matrices
          </a>
      </li>

      {{-- INI problemas --}}
      <li class="nav-item">
        <a class="accordion nav-link pr-2 pr-2" href="#" title="Matriz de Problemas">
          <span data-feather="home"></span>
          Problemas {{-- <span class="sr-only">(current)</span> --}}
        </a>
        <div class="accordion_panel">
            <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="accordion nav-link pr-2" href="#">
                    <span data-feather="home"></span>
                    Problemas {{-- <span class="sr-only">(current)</span> --}}
                  </a>
                  <div class="accordion_panel">
                      <ul class="nav flex-column">
                          <li class="nav-item">
                              <a class="nav-link pr-2" href="{{ route('mproblemas.index') }}">
                                <span data-feather="home"></span>
                                CRUD {{-- <span class="sr-only">(current)</span> --}}
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link pr-2" href="#">
                                <span data-feather="home"></span>
                                Gráficas {{-- <span class="sr-only">(current)</span> --}}
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>

              <li class="nav-item">
                  <a class="accordion nav-link pr-2" href="#">
                    <span data-feather="home"></span>
                    Determinantes {{-- <span class="sr-only">(current)</span> --}}
                  </a>
                  <div class="accordion_panel">
                      <ul class="nav flex-column">
                          <li class="nav-item">
                              <a class="nav-link pr-2" href="{{ route('pdeterminantes.index') }}">
                                <span data-feather="home"></span>
                                CRUD {{-- <span class="sr-only">(current)</span> --}}
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link pr-2" href="#">
                                <span data-feather="home"></span>
                                Gráficas {{-- <span class="sr-only">(current)</span> --}}
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>

              <li class="nav-item">
                  <a class="accordion nav-link pr-2" href="#">
                    <span data-feather="home"></span>
                    Causa/Efecto {{-- <span class="sr-only">(current)</span> --}}
                  </a>
                  <div class="accordion_panel">
                      <ul class="nav flex-column">
                          <li class="nav-item">
                              <a class="nav-link pr-2" href="{{ route('pcausaefectos.index') }}">
                                <span data-feather="home"></span>
                                CRUD {{-- <span class="sr-only">(current)</span> --}}
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link pr-2" href="#">
                                <span data-feather="home"></span>
                                Gráficas {{-- <span class="sr-only">(current)</span> --}}
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
            </ul>
        </div>
      </li>
      {{-- FIN problemas --}}

      {{-- INI Objetivos --}}
      <li class="nav-item">
        <a class="accordion nav-link pr-2" href="#">
          <span data-feather="home"></span>
          Objetivos {{-- <span class="sr-only">(current)</span> --}}
        </a>
        <div class="accordion_panel">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link pr-2" href="{{ route('mobjetivos.index') }}">
                      <span data-feather="home"></span>
                      CRUD {{-- <span class="sr-only">(current)</span> --}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pr-2" href="#">
                      <span data-feather="home"></span>
                      Gráficas {{-- <span class="sr-only">(current)</span> --}}
                    </a>
                </li>
            </ul>
        </div>
      </li>
      {{-- FIN Objetivos --}}


      <li class="nav-item">

        <a class="accordion nav-link pr-2" href="#" title="Registros de Matrices">
          <span data-feather="home"></span>
          Reg. Matrices {{-- <span class="sr-only">(current)</span> --}}
        </a>

        {{-- <button class="accordion nav-item">Section 1</button> --}}
        <div class="accordion_panel">
          <ul class="nav flex-column">
            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  Problemas {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('mproblemas.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  Determinantes {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('pdeterminantes.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  Causa/Efecto {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('pcausaefectos.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <div class="dropdown-divider"></div>

            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  Objetivos {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('mobjetivos.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{--
            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  Presupuestarias
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('presupuestarias.index') }}">
                              <span data-feather="home"></span>
                              CRUD
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            --}}

            <div class="dropdown-divider"></div>

            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  Productos {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('mproductos.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  Supuestos {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('psupuestos.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  Verificadores {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('pverificadors.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  Indicadores {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('pindicadors.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <div class="dropdown-divider"></div>

            <li class="nav-item">
                <a class="accordion nav-link pr-2 active" href="#">
                  <span data-feather="home"></span>
                  Actividades {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('mactividads.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  Frecuencia {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('afrecuencias.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="accordion nav-link pr-2" href="#">
                  <span data-feather="home"></span>
                  Estado {{-- <span class="sr-only">(current)</span> --}}
                </a>
                <div class="accordion_panel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="{{ route('aestados.index') }}">
                              <span data-feather="home"></span>
                              CRUD {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-2" href="#">
                              <span data-feather="home"></span>
                              Gráficas {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

          </ul>
        </div>

      </li>
      {{-- FIN Matrices --}}

    </ul>
</div>
