<ul id="slide-out" class="sidenav sidenav-fixed li-ppal-menu">  
    <li>
        <div class="user-view">
            <!-- <div class="background">
      <img src="{{ asset('img/plannersMX1.jpg') }}">
    </div> -->
            <img href="{{ asset('/inicio') }}" class="responsive-img imgIconPg puntero" src="{{ asset('img/plannersMX1.jpg') }}">
            <span class="black-text name">{{ Session::get('nombre') }}</span>
            <!-- <span class="black-text name">{{ Session::get('email') }}</span> -->
            <span class="pink-text name">{{ Session::get('rol') }}</span>
            <input hidden type="text" name="sessionlifetime" value="{{ Config::get('session.lifetime') }}">
            <!-- <span class="black-text email">{{ str_replace('@%', '', Session::get('user')) }}</span> -->
        </div>
    </li>
    <li><a href="#modal6" class="modal-trigger"><i class="material-icons">vpn_key</i>Cambiar Contraseña</a></li>
    <li><a href="{{ asset('/logout') }}"><i class="material-icons">exit_to_app</i>Cerrar Sesión</a></li>
    <li class="title-divider">
        <label class="title-divider-a">Menú</label>
        <div class="divider"></div>
    </li>
    {{-- <li><a class="subheader ">Menú</a></li> --}}
    @if (Session::get('rol') == 'Administrador')
        <li class="bold"><a class="waves-effect waves-pink" href="{{ asset('/inicio') }}">Inicio</a></li>
    @else
        <li class="bold"><a class="waves-effect waves-pink" href="{{ asset('/requisicion') }}">Inicio</a></li>
    @endif

    <li class="bold"><a class="waves-effect waves-pink" href="{{ asset('/requisicion') }}">Requisiciones</a>
    </li>
    <li>
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a class="collapsible-header waves-effect waves-pink" tabindex="0">Catalogos<i class="material-icons">arrow_drop_down</i> </a>
                <div class="collapsible-body">
                    <ul>
                        <li class="bold">
                            <a href="{{-- route('deperatmentos') --}}">
                                <div class="row">
                                        <div class="col s12 push-s1">
                                            Departamentos
                                        </div>
                                </div>
                            </a>
                        </li>
                        <li class="bold">
                            <a href="{{-- route('puestos') --}}">
                                <div class="row">
                                    {{-- <div class="col s12"> --}}
                                        <div class="col s12 push-s1">
                                            Puestos
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="bold">
                            <a href="{{-- route('jornadas') --}}">
                                <div class="row">
                                    {{-- <div class="col s12"> --}}
                                        <div class="col s12 push-s1">
                                            Jornadas
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="blob">
                            <a href="{{-- route('conceptos_nomina') --}}">
                                <div class="row">
                                    {{-- <div class="col s12"> --}}
                                        <div class="col s12 push-s1">
                                            Conceptos
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="blob">
                            <a href="{{-- route('tablas_antiguedades') --}}">
                                <div class="row">
                                    {{-- <div class="col s12"> --}}
                                        <div class="col s12 push-s1">
                                            Tablas antiguedad
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="blob">
                            <a href="{{-- route('registrospatronales') --}}">
                                <div class="row">
                                    {{-- <div class="col s12"> --}}
                                        <div class="col s12 push-s1">
                                            Registros patronales
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="blob">
                            <a href="{{-- route('tiposcontratos') --}}">
                                <div class="row">
                                    {{-- <div class="col s12"> --}}
                                        <div class="col s12 push-s1">
                                            Tipos contratos
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="blob">
                            <a href="{{-- route('frecuenciasnominas') --}}">
                                <div class="row">
                                    {{-- <div class="col s12"> --}}
                                        <div class="col s12 push-s1">
                                            Frecuencias nominas
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="blob">
                            <a href="{{-- route('clientes') --}}">
                                <div class="row">
                                    {{-- <div class="col s12"> --}}
                                        <div class="col s12 push-s1">
                                            Clientes
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="blob">
                            <a class="waves-effect" href="#{{-- asset('/catalogos/paises') --}}">
                                <div class="row">
                                    {{-- <div class="col s12"> --}}
                                        <div class="col s12 push-s1">
                                            Paises
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="blob">
                            <a class="waves-effect" href="#{{-- asset('/catalogos/estados') --}}">
                                <div class="row">
                                    {{-- <div class="col s12"> --}}
                                        <div class="col s12 push-s1">
                                            Estados
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="blob">
                            <a class="waves-effect" href="#{{-- asset('/catalogos/municipoios') --}}">
                                <div class="row">
                                    {{-- <div class="col s12"> --}}
                                        <div class="col s12 push-s1">
                                            Municipios
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    @if (Session::get('rol') == 'Administrador')
    <li>
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a class="collapsible-header waves-effect waves-pink" tabindex="0">Configuración<i
                        class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li class="limenu">
                            <a class="waves-effect" href="{{ asset('/configuracion/usuarios') }}">
                                <div class="row">
                                    {{-- <div class="col s12"> --}}
                                        <div class="col s12 push-s1">
                                            Usuarios
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="limenu">
                            <a class="waves-effect" href="{{asset('/configuracion/lotes')}}">
                                <div class="row">
                                    {{-- <div class="col s12"> --}}
                                        <div class="col s12 push-s1">
                                            Lotes
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="limenu">
                            <a class="waves-effect" href="{{asset('/configuracion/producciones/conceptos')}}">
                                <div class="row">
                                    {{-- <div class="col s12"> --}}
                                        <div class="col s12 push-s1 tooltipped" data-tooltip="Configuración conceptos producciones">
                                            Config Conceptos Produc
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    @endif
    <li>

        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a class="collapsible-header waves-effect waves-pink" tabindex="0">Inventarios<i
                        class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <ul class="collapsible">
                                <li>
                                    <a class="collapsible-header in waves-effect waves-pink" tabindex="2">
                                        Catalogos
                                        <i class="material-icons left">arrow_drop_down</i>
                                    </a>
                                    <div class="collapsible-body in">
                                        <ul>
                                            <li>
                                                <a class="waves-effect" href="{{ asset('/catalogo/articulos') }}">
                                                    <div class="row">
                                                        {{-- <div class="cols12"> --}}
                                                            <div class="col s6 push-s2">
                                                                Artículos
                                                            </div>
                                                        {{-- </div> --}}
                                                    </div>

                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect" href="{{ asset('/catalogo/almacenes') }}">
                                                    <div class="row">
                                                        {{-- <div class="cols12"> --}}
                                                            <div class="col s6 push-s2">
                                                                Almacenes
                                                            </div>
                                                        {{-- </div> --}}
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect" href="{{ asset('/catalogo/proveedores') }}">
                                                    <div class="row">
                                                        {{-- <div class="cols12"> --}}
                                                            <div class="col s6 push-s2">
                                                                Proveedores
                                                            </div>
                                                        {{-- </div> --}}
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="title-divider">
                            <label class="title-divider-a">Documentos</label>
                            <div class="divider"></div>
                        </li>
                        <li class="limenu">
                            <a class="waves-effect" href="{{ asset('/inventario/Entradas') }}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s6 push-s1">
                                            Entradas
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="limenu">
                            <a class="waves-effect" href="{{ asset('/inventario/Salidas') }}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s6 push-s1">
                                            Salidas
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        @if (Session::get('rol') == 'Administrador')
                        
                        <li class="limenu">
                            <a class="waves-effect" href="{{ asset('inventario/Traspasos') }}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s6 push-s1">
                                            Traspasos
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        @endif
                        <li class="title-divider">
                            <label class="title-divider-a">Almacen</label>
                            <div class="divider"></div>
                        </li>
                        <li class="limenu">
                            <a class="waves-effect waves-pink" href="{{-- route('recepcionmercancia_enalmacen') --}}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s6 push-s1 truncate tooltipped" data-tooltip="Recepción en almacen">
                                            Recepción en almacen
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="limenu">
                            <a class="waves-effect waves-pink" href="{{-- route('inventory_entrada_produccion') --}}">
                                <div class="row">
                                        <div class="col s6 push-s1 truncate tooltipped" data-tooltip="Entrada a producción">
                                            Entrada a producción
                                        </div>
                                </div>
                            </a>
                        </li>
                        <li class="limenu">
                            <a class="waves-effect waves-pink" href="{{-- route('inventory_entrada_produccion_dev') --}}">
                                <div class="row">
                                        <div class="col s6 push-s1 truncate tooltipped" data-tooltip="Devolucón de producción">
                                            Devolucón de producción
                                        </div>
                                </div>
                            </a>
                        </li>
                        <li class="title-divider">
                            <label class="title-divider-a">Reporte</label>
                            <div class="divider"></div>
                        </li>
                        <li class="limenu">
                            <a class="waves-effect" href="{{-- asset('inventario/stock/lista') --}}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s6 push-s1">
                                            Stock
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>

                        {{-- <li class="limenu">
                <a class="waves-effect" href="{{asset('/catalogo/articulos')}}">
                    <div class="row">
                        <div class="cols12">
                            <div class="col s6 push-s1">
                                Atículos
                            </div>
                        </div>
                    </div>
                    
                </a>
            </li>
            <li class="limenu">
                <a class="waves-effect" href="{{asset('/catalogo/almacencentrocosto')}}">
                    <div class="row">
                        <div class="cols12">
                            <div class="col s6 push-s1">
                                Almacenes
                            </div>
                        </div>
                    </div>
                </a>
            </li>    --}}
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    

    <li>
        <ul class="collapsible collapsible-accordion">
            <li class="blob">
                <a class="collapsible-header waves-effect waves-pink" tabindex="0">
                    Compras<i class="material-icons left">arrow_drop_down</i>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li class="bold">
                            <a class="waves-effect waves-pink" href="{{ asset('/cotizacion') }}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s6 push-s1">
                                            Cotizaciones
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="bold">
                            <a class="waves-effect waves-pink" href="{{ asset('/ordencompra') }}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s12 push-s1 truncate tooltipped" data-tooltip="Ordenes de compra">
                                            Ordenes de compra
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>

                        <li class="bold">
                            <a class="waves-effect waves-pink" href="{{-- route('recepcionmercancia') --}}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s12 push-s1 truncate tooltipped" data-tooltip="Recepción de mercancía">
                                            Recepción de mercancía
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="bold">
                            <a class="waves-effect waves-pink" href="{{--asset('/devrecepcionmercancia') --}}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s12 push-s1 truncate tooltipped" data-tooltip="Devolución de recepción">
                                            Devolución de recepción
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>

                        <li class="bold">
                            <a href="{{ asset('/compra') }}" class="waves-efect waves-pink">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s6 push-s1">
                                            Compra
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="bold">
                            <a href="{{ asset('/devcompra') }}" class="waves-efect waves-pink">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s8 push-s1 truncate tooltipped" data-tooltip="Devolución compra">
                                            <span>Devolución compra</span>
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li>
        <ul class="collapsible collapsible-accordion">
            <li class="blob">
                <a class="collapsible-header waves-effect waves-pink" tabindex="0">
                    Ventas<i class="material-icons left">arrow_drop_down</i>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li class="bold">
                            <a class="waves-effect waves-pink" href="{{ asset('/ventas/cotizaciones') }}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s12 push-s1 truncate tooltipped" data-tooltip="Cotizaciones ">
                                            Cotizaciones
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="bold">
                            <a class="waves-effect waves-pink" href="{{ asset('/ventas/pedidos') }}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s12 push-s1 truncate tooltipped" data-tooltip="Pedidos">
                                            Pedidos
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>

                        <li class="bold">
                            <a class="waves-effect waves-pink" href="{{ asset('/ventas/remisiones') }}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s12 push-s1 truncate tooltipped" data-tooltip="Remisión de mercancía">
                                            Remisión mercancía
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="bold">
                            <a class="waves-effect waves-pink" href="{{ asset('/ventas/devremision') }}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s12 push-s1 truncate tooltipped" data-tooltip="Devolución de remisión">
                                            Devolución remisión
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>

                        <li class="bold">
                            <a href="{{ asset('/ventas/facturas') }}" class="waves-efect waves-pink">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s6 push-s1">
                                            Facturas
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="bold">
                            <a href="{{ asset('/ventas/devfactura') }}" class="waves-efect waves-pink">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s8 push-s1 truncate tooltipped" data-tooltip="Devolución factura">
                                            <span>Devolución factura</span>
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li>
        <ul class="collapsible collapsible-accordion">
            <li class="blob">
                <a class="collapsible-header waves-effect waves-pink" tabindex="0">
                    Ciclo nomina
                    <i class="material-icons left">arrow_drop_down</i>
                </a>
                <div class="collapsible-body">
                    <ul>
                        {{-- <li>
                            <ul class="collapsible">
                                <li>
                                    <a class="collapsible-header in waves-effect waves-teal" tabindex="1">
                                        Catalogos
                                        <i class="material-icons left">arrow_drop_down</i>

                                    </a>
                                    <div class="collapsible-body in">
                                        <ul>
                                            <li class="blob">
                                                <a href="{{ route('empleados') }}">
                                                    <div class="row">
                                                        <div class="cols12">
                                                            <div class="col s6 push-s2">
                                                                Empleados
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            
                                            
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="title-divider">
                            <label class="title-divider-a">Catalogos</label>
                            <div class="divider"></div>
                        </li>
                        <li class="blob">
                            <a href="{{-- route('empleados') --}}">
                                <div class="row">
                                    {{-- <div class="col s12"> --}}
                                        <div class="col s12 push-s1">
                                            Empleados
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="title-divider">
                            <label class="title-divider-a">Apertura</label>
                            <div class="divider"></div>
                        </li>
                        <li class="bold">
                            <a class="waves-effect waves-pink" href="{{asset('nomina/apertura')}}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s12 push-s1">
                                            Apertura
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="title-divider">
                            <label class="title-divider-a">Movimientos</label>
                            <div class="divider"></div>
                        </li>
                        <li class="bold">
                            <a class="waves-effect waves-pink" href="{{asset('nomina/periodosvacacionales')}}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s6 push-s1 truncate tooltipped" data-tooltip="Periodos vacaciones">
                                            Periodos vacaciones
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="bold">
                            <a class="waves-effect waves-pink" href="{{asset('nomina/excepciones')}}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s12 push-s1">
                                            Excepciones
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>
                        <li class="bold">
                            <a class="waves-effect waves-pink" href="{{ asset('nomina/incapacidades') }}">
                                <div class="row">
                                    {{-- <div class="cols12"> --}}
                                        <div class="col s12 push-s1">
                                            Incapacidades
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </a>
                        </li>

                        {{-- <li class="bold"><a class="waves-effect waves-teal" href="{{ asset('/ordencompra') }}">Ordenes de
                      Compra</a></li>
      
                  <li class="bold"><a class="waves-effect waves-teal" href="{{ asset('/recepcionmercancia') }}">Recepción
                      de Mercancía</a></li>
                  <li class="bold"><a class="waves-effect waves-teal" href="{{ asset('/devrecepcionmercancia') }}">Devolución de recepción
                      de Mercancía</a></li>
  
                  <li class="bold">
                      <a href="{{ asset('/compra') }}" class="waves-efect waves-teal">
                          Compra
                      </a>
                  </li>
                  <li class="bold">
                      <a href="{{ asset('/devcompra') }}" class="waves-efect waves-teal">
                          Devolucón compra
                      </a>
                  </li> --}}
                    </ul>
                </div>
            </li>
        </ul>
    </li>



    @if (Session::get('rol') == 'Administrador')
        <li>
            <ul class="collapsible collapsible-accordion">
                <li class="bold">
                    <a class="collapsible-header waves-effect waves-pink" tabindex="0">Aplicaciones<i
                            class="material-icons">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li class="limenu"><a class="waves-effect" href="{{ asset('/aplicacion') }}">Lista
                                    Aplicaciones</a></li>
                            <li class="limenu"><a class="waves-effect"
                                    href="{{ asset('/aplicacion/bitacoraplaguicida/consulta') }}">Bitácora
                                    Agroquímicos</a></li>
                            <li class="limenu"><a class="waves-effect"
                                    href="{{ asset('/aplicacion/bitacorafertilizante/consulta') }}">Bitácora
                                    Fertilizantes</a></li>
                            <li class="limenu"><a class="waves-effect"
                                    href="{{ asset('/aplicacion/reporteaplicacion') }}">Reporte Aplicaciones
                                    Costos</a>
                            </li>
                            <li class="limenu"><a class="waves-effect"
                                    href="{{ asset('/aplicacion/fertilizantenpk/consulta') }}">Reporte Fertilizantes
                                    NPK</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li>

            <ul class="collapsible collapsible-accordion">
                <li class="bold">
                    <a class="collapsible-header waves-effect waves-pink" tabindex="0">Actividades<i
                            class="material-icons">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li class="limenu"><a class="waves-effect"
                                    href="{{ asset('/actividad/manoobra') }}">Actividades M.O. Cuadrillas</a></li>
                            <li class="limenu"><a class="waves-effect" href="#">Actividades M.O.
                                    Tractoristas</a></li>
                            <li class="limenu"><a class="waves-effect" href="#">Reporte Actividades</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>

        <li class="li-ppal-menu"><a class="waves-effect" href="#">Cosecha</a></li>
        <li class="li-ppal-menu"><a class="waves-effect" href="#">Compras/Inventarios</a></li>
        <li class="li-ppal-menu"><a class="waves-effect" href="#">Embarques</a></li>
    @endif
   
</ul>

<!-- Modal Structure Cambiar Password-->
<form id="frm-cambiapassword" class="form-horizontal" method="POST" novalidate="novalidate"
    action="/erp-web/cambiapassword">
    <div id="modal6" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4>Cambiar Contraseña</h4>

            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                <div class="input-field col s6">
                    <input id="new-password" type="password" class="validate" name="newpassword">
                    <label for="new-password" class="col-md-4 control-label">Nueva Contraseña</label>
                    @if ($errors->has('new-password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('new-password') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
            <div class="form-group">
                <div class="input-field col s6">
                    <input id="new-password-confirm" type="password" class="validate"
                        name="newpasswordconfirmation">
                    <label for="new-password-confirm" class="col-md-4 control-label"
                        data-match="#new-password">Confirma
                        la Nueva Contraseña</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-light">
                Cancelar
            </a>
            <button form="frm-cambiapassword" id="cambia-password" type="submit"
                class="waves-effect waves-light btn">
                Cambiar contraseña
            </button>
        </div>
    </div>
</form>
