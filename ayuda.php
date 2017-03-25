<?php
require('header.php');
?>

<div class="android-content mdl-layout__content"  align="center">
     <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--6-col-desktop">
              
              <div class="card-header mdl-color-text--grey-600">
                <p class="titulo-carta">Contacto</p>
              </div>
              <div class="mdl-card__actions mdl-card--border">
              <h1 class="titu">Telefonos</h1>
              <ul>
              <li class="list">4421161826</li>
              <li class="list">4421167124</li>
              <li class="list">442982844</li>
              </ul>
              <h1 class="titu">Correos</h1>
              <ul>
              <li class="lis1">denuncianonima@uaq.mx</li>
              <li class="lis1">rescube@gmail.com</li>
              <li class="lis1">denunciacorrupcion@gmail.com</li>
              </ul>
              <h1 class="titu">Preguntas</h1>
              <textarea rows="4" cols="50">
				
			  </textarea>
			  <div>
			  <button id="env">Enviar</button>
			  </div>
              </div>
              </div>
              


<style type="text/css">
	.titu
	{
		font-family: 'Dosis', sans-serif;
		font-size: 27px;
		color: #E80083;
	}
	li
	{
		text-align: left;
	}
	.list
	{
		list-style-image: url(images/iconos/001-call-answer.png);
	}
	.lis1
	{
		list-style-image: url(images/iconos/mail.png);
	}
	#env
	{
		font-family: 'Dosis', sans-serif;
		color: white;
		border-radius: 7px;
		background-color: #22ACAC;
		width: 70px;
		height: 30px;

	}
	textarea
	{
		width: auto;
		height: auto;
	}
</style>
<?php
require('footer.php');
?>