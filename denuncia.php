<?php
require('header.php');
?>
<div class="android-content mdl-layout__content"  align="center">
     <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--6-col-desktop">
              
              <div class="card-header mdl-color-text--grey-600">
                <p class="titulo-carta">Denuncia</p>
              </div>
              <div class="mdl-card__actions mdl-card--border">
              <form action="#">
                <div class="input-unic mdl-js-textfield mdl-textfield--floating-label mdl-cell--4-col ">
                  <input class="mdl-textfield__input" type="text" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">Motivo</label>
                </div>
                <div class="input-unic mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">Hora</label>
                </div>
                <div>
                <div class="input-unic mdl-js-textfield mdl-textfield--floating-label">
                  <label class="mdl-textfield__label" for="sample3">Lugar del incidente</label>
                </div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.1453382081995!2d-100.44598548581604!3d20.704321986174996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35760bd55a777%3A0xe768790d34a14980!2sUniversidad+Aut%C3%B3noma+de+Quer%C3%A9taro%2C+Campus+Juriquilla!5e0!3m2!1ses!2smx!4v1490450785423" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                
                
              <div id="Evidencia">
              	<div class="input-unic mdl-js-textfield mdl-textfield--floating-label">
                  <label class="mdl-textfield__label" for="sample3">Evidencia</label>
                </div>
					<input id="boton" type="file" name="datafile" size="50">

              </div>
                
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
  					Enviar
				</button>
              </div>
</div>

<style type="text/css">
	#Evidencia
	{
		color: #B4B4B4;
		margin-left: 10%;
		text-align: left;
	}
	

</style>
<?php
require('footer.php');
?>