<?php
require('header.php');
?>


<div class="android-content mdl-layout__content"  align="center">
     <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--6-col-desktop">
              
              <div class="card-header mdl-color-text--grey-600">
                <p class="titulo-carta">Registro</p>
              </div>


              <div class="mdl-card__actions mdl-card--border">
              <form action="#">
                <div class="input-unic mdl-js-textfield mdl-textfield--floating-label mdl-cell--4-col">
                  <input class="mdl-textfield__input" type="text" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">Nombre</label>
                </div>
                
              <div class="input-unic mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="sample4">
                  <label class="mdl-textfield__label" for="sample3">Correo electrónico</label>
                </div>
              

               <div class="input-unic mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="sample5">
                  <label class="mdl-textfield__label" for="sample3">Nombre de usuario</label>
                 </div>
                 </form>
                 </div>


              <div class="input-unic mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="password" id="sample6">
                  <label class="mdl-textfield__label" for="sample3">Contraseña</label>
                </div>


              <div class="input-unic mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="email" id="sample7">
                  <label class="mdl-textfield__label" for="sample3">Confirmar contraseña</label>
                </div>
           

              <div class="input-unic mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="date" id="sample8">
                  <label class="mdl-textfield__label" for="sample3"></label>
                </div>
             

              <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
            Enviar
          </button>
            </div>
            
             </form>
              



            
          





               

<?php
require('footer.php');
?>