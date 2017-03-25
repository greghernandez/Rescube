<?php
require('header.php');
?>
<div class="android-content mdl-layout__content"  align="center">
     <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--6-col-desktop">
              
              <div class="card-header mdl-color-text--grey-600">
                <p class="titulo-carta">Inicio de Sesión</p>
              </div>
              <div class="mdl-card__actions mdl-card--border">
              <form action="#">
                <div class="input-unic mdl-js-textfield mdl-textfield--floating-label mdl-cell--4-col ">
                  <input class="mdl-textfield__input" type="text" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">Nombre de usuario</label>
                </div>
                <div class="input-unic mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="password" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">Contraseña</label>
                </div>
              </form>

              <div class="tres">

                <a href="url">olvidé mi contraseña</a>
              </div>

              <style type="text/css">

              .tres
              {
                position: relative;

                margin-bottom: 10px;

              }
              .tres a
              {

                color: #3843b7;
                font-size: 12px;

              }
              .tres>a:hover
              {
                color: #00bcd4;

              }
              .mdl-button.mdl-js-button.mdl-button--raised.mdl-button--colored
              {
                 
                padding-left: 0;
                padding-bottom: 0;
                margin-bottom: 0;
                margin-left: 0;
                width: 100%;
                
             

              }
              .demo-updates.mdl-card.mdl-shadow--2dp.mdl-cell.mdl-cell--4-col.mdl-cell--4-col-tablet.mdl-cell--6-col-desktop
              {
                position: relative;

              }



              </style>
                
        
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
            Enviar
          </button>
            </div>
</div>
<?php
require('footer.php');
?>