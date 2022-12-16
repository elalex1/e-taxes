<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

   <div class="valign-wrapper" style="width:100%;height:100%;position: absolute;">
      <div class="valign" style="width:100%;">
          <div class="container">
             <div class="row">
                <div class="col s12 m6 offset-m3">
                   <div class="card">
                      <div class="card-content">
                         <span class="card-title black-text">Sign In</span>
                         <form method="POST" action="{{ route('password.update') }}">
                           @csrf
                           <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div class="row">
                               <div class="input-field col s12">
                                  <input type="email" name="email" id="email">
                                  <label for="email" class="active">Correo</label>
                               </div>
                            </div>
   
                            <div class="row">
                               <div class="input-field col s12">
                                  <input type="password" name="password" id="password">
                                  <label for="password" class="active">Nueva Contraseña</label>
                               </div>
                            </div>
   
                            <div class="row">
                              <div class="input-field col s12">
                                 <input type="password" name="password_confirmation" id="password_confirmation">
                                 <label for="password_confirmation" class="active">Confirmar Contraseña</label>
                              </div>
                            </div>
   
                         
                      </div>
                      <div class="card-action">
                        <button type="submit">Cambiar Contraseña</button>
                      </div>
                     </form>
                   </div>
                </div>
             </div>
          </div>
      </div>
   </div>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
      





