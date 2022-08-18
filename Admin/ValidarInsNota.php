<?php
    include("config/bd.php"); 
    session_start();

    
    $ValorNotaEnvi = $_POST['Nota'];
    $codigoEst = $_POST['Codigoestudiante'];
    $codCurso = $_SESSION['Cod_Cursos'];
    $año = $_SESSION['Año'];
    $peri = $_SESSION ['Periodo'];
    $Codigonota = $_POST['codigocalificacion'];


    if(($ValorNotaEnvi<=5) && ($ValorNotaEnvi>=0)){
        $InsertNota = "UPDATE calificaciones SET valor_nota = '$ValorNotaEnvi' WHERE calificaciones.cod_cal= '$Codigonota'";
        $ResInsertNota = pg_query($InsertNota);

        if($ResInsertNota){
            header('location:InscribirNota.php');
        }  else {
        ?> no se puede hacer nada <?php
        }
    }


?>