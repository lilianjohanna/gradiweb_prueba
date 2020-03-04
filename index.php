<?php
$salida="<style>
.contenedor{
    position: relative;
    display: inline-block;
    text-align: center;
}
.texto-encima{
    position: absolute;
    top: 10px;
    left: 10px;
}
.centrado{
    position: absolute;
    top: 60%;
    left: 45%;
    transform: translate(-50%, -50%);
	font-family: verdana;
	font-weight: bold;	
}
.letra{
	font-family: verdana;
}
.idarriba{
	position: absolute;
    top: 32%;
    left: 51%;
    transform: translate(-50%, -50%);
	font-size: xx-large;
	font-family: verdana;
	font-weight: bold;
}
.imagenlogo{
	position: absolute; 
    left: 570px; 
	top: 240px;
	
	z-index: 2;
}
.fondoverde{
	width: 100%;
	height: auto;
}
</style>
<script src='vanilla.js'></script>
<div align='center' class='fondoverde'><img src='logo-full.png' /></div>
<div style='color:#FFFFFF;' class='centrado'>Miguel Soler</div>
<div align='center' class='fondoverde'><img src='fondoverde.png' /></div>
<div align='center' class='idarriba' style='color:#FFFFFF;'>117</div>
<div class='imagenlogo'><img src='logo-white.png' /></div>";
echo $salida;
?>