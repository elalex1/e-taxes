<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Agregar Empresa</h4>
            <div class="row">
                <form action=" {{route('CrearEmpresa')}} " method="post">
                    @csrf
                    <div class="input-field col s12">
                        <input type="text" name="NombreEmpresa" id="NombreEmpresa" placeholder="Nombre">
                        <input type="text" name="rfc" id="rfc" placeholder="rfc">
                        <input type="hidden" name="usuario" value=" {{ Session::get('email') }} ">
                    </div>
        
        
            </div>
    </div>
        <div class="modal-footer">
            <button type="submit" class="btn">Agregar</button>
        </div>
                </form>
  </div>
          