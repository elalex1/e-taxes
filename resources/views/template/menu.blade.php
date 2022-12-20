<ul id="slide-out" class="sidenav sidenav-fixed li-ppal-menu">  
    <li>
        <div class="user-view">
           
            <img href="{{ asset('/inicio') }}" class="responsive-img imgIconPg puntero" src="{{ asset('img/taxicon.webp') }}">
            <span class="black-text name">{{ Session::get('name') }}</span>
            <span class="pink-text name">{{ Session::get('email') }}</span>
            <input hidden type="text" name="sessionlifetime" value="{{ Config::get('session.lifetime') }}">
            <!-- <span class="black-text email">{{ str_replace('@%', '', Session::get('user')) }}</span> -->
        </div>
    </li>
    <li><a href="#modal6" class="modal-trigger"><i class="material-icons">vpn_key</i>Cambiar Contraseña</a></li>
    <li><a href="{{ route('Logout') }}"><i class="material-icons">exit_to_app</i>Cerrar Sesión</a></li>
    <li><a class="modal-trigger" href="#modal1">AgregarEmpresa</a></li>
    
    <li class="title-divider">
        <label class="title-divider-a">Menú</label>
        <div class="divider"></div>
    </li>
    {{-- <li><a class="subheader ">Menú</a></li> --}}
        <li class="bold"><a class="waves-effect waves-pink" href="{{ asset('/inicio') }}">Inicio</a></li>
    
    <li class="bold"><a class="waves-effect waves-pink" href="{{ asset('/requisicion') }}">Requisiciones</a>

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

{{--Modales---------------------------------------------}}
@include('modals.CrearEmpresa')