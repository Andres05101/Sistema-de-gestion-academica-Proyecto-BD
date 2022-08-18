<?php

    include("config/bd.php");
    session_start();

    

?>
<!--<table class="table table-bordered">
        <thead>
            <tr>
                <th>Codigo Estudiante</th>
                <th>
                    <?php
                                            $consulnota="SELECT * FROM cursos WHERE cod_doc='$Cod_docente' ";
                                            $consulRes=pg_query($consulCur);
                                            while($valores = pg_fetch_array($consulRes)){
                                                echo '<option value="'.$valores['cod_cur'].'">'.$valores['nomb_cur'].'</option>';
                                            
                    ?>
                </th>
                <?php
                                            }
                                            ?>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>-->