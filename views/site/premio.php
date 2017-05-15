<?php
use yii\helpers\Url;

$this->title="Gracias por participar";
?>
<div class="container container-ribbon">

<!-- Premio contenedor -->
	<div class="js-premio-contenedor" style="text-align:center">
		<div class="premio js-premio-ajax">
            <p class="bold">
                <span class="primary-color">Gracias por participar</span>, 
                <?=$nombrePremio?>

            </p>
		</div>
		<a class="btn btn-primary" href="#">Finalizar</a>
	</div>
	<!-- Fin premio contenedor-->

	<!-- Gracias contenedor -->
	<div class="js-gracias-contenedor" style="display: none;">Muchas
		gracias</div>
	<!-- Fin gracias contenedor -->

</div>

<img class="logo" src="<?=Url::base()?>/webAssets/images/logo-fa.png" alt="Fiesta Americana">