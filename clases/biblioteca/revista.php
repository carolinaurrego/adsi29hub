<?php 
include_once ('material.php');
class Revista extends Material{
     private $tema; 
     private $fechaPublicacion;
     private $LugarPublicacion;
     private $numeroEdicion;
        
function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status,$tema,$fechaPublicacion,$LugarPublicacion,$numeroEdicion){
    parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status);
    $this->tema=$tema;
    $this->fechaPublicacion=$fechaPublicacion;
    $this->lugarPublicacion=$LugarPublicacion;
    $this->numeroEdicion=$numeroEdicion;
}
    function setTema($tema){
        $this->tema=$tema;
    }
    function setFechaPublicacion($fechaPublicacion){
        $this->fechaPublicacion=$fechaPublicacion;
    }
    function setLugarPublicacion($LugarPublicacion){
        $this->lugarPublicacion=$LugarPublicacion;
    }
    function setNumeroEdicion($numeroEdicion){
        $this->numeroEdicion=$numeroEdicion;
    }
    function getTema(){
        return $this->tema;
    }
    function getFechaPublicacion(){
        return $this->fechaPublicacion;
    }
    function getLugarPublicacion(){
        return $this->lugarPublicacion;
    }
    function getNumeroEdicion(){
        return $this->numeroEdicion;
    }
}
$ob=new Revista('papel brillante','102387','Mark reinecke','mantenga la calma y siga adelante',2018,'Excelente estado','lecciones de calma','18 octubre','colombia','5');
echo $ob->datos().'<br>';
echo '<b>'.'Tema: '.'</b>'.$ob->getTema().'<br>';
echo '<b>'.'Fecha de publicación: '.'</b>'.$ob->getFechaPublicacion().'<br>';  
echo '<b>'.'Lugar de publicacion: '.'</b>'.$ob->getLugarPublicacion().'<br>';
echo '<b>'.'Numero de edición: '.'</b>'.$ob->getNumeroEdicion().'<br>';
?>



