<?php 
include_once ('material.php');
class Libro extends Material{
    
     private $editorial; 
     private $numeroPaginas;
     private $numeroCapitulos;
        
function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status,$editorial,$numeroPaginas,$Capitulos){
    parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status);
    $this->editorial=$editorial;
    $this->numeroPaginas=$numeroPaginas;
    $this->Capitulos=$Capitulos;
}
    function setEditorial($editorial){        
        $this->editorial=$editorial;
    }
    function setnumeroPaginas($numeroPaginas){
        $this->numeroPaginas=$numeroPaginas;
    }
    function setCapitulos($Capitulos){
        $this->Capitulos=$Capitulos;
    }
    function getEditorial(){
        return $this->editorial;
    }
    function getnumeroPaginas(){
        return $this->numeroPaginas;
    }
    function getCapitulos(){
        return $this->Capitulos;
    }

    function getAutor(){
        return $this->autor;
    }
}
$ob2=new Libro('reciclado','53048','keri smith','destroza este diario',2012,'en buen estado','Planeta','100','10');
echo $ob2->datos().'<br>';
echo '<b>'.'EDITORIAL:'.'</b>'.$ob2->getEditorial().'<br>';
echo '<b>'.'NUMERO DE PAGINAS:'.'</b>'.$ob2->getnumeroPaginas().'<br>';
echo '<b>'.'CAPITULOS:'.'</b>'.$ob2->getCapitulos().'<br>';
?>