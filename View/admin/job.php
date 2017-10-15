<?php
##################################################################
# 
# OBJETIVO:
# =========
#
# Mantenimiento de usuarios
#
# Desarrollo:
# 
# - JOSE ANDRES CECILIANO GRANADOS
#
# Mejoras:
# 
# - SILVIA CALDERON NAVARRO
#
###################################################################
?>
<div class="breadcumb-area eight">
    <div class="container">
        <div class="row">
            <div class="breadcumb">
                <center>
                    <h2>Administración: Usuarios</h2>
                </center>
            </div>
        </div>
    </div>
</div>
<div class="animal-details">
    <div class="container">
        <div class="row">
            <table class="table table-striped" style="background-color: #FFFFFF;" id="table">
                <tr>
                    <td class="titulo">
                        <center>ID</center>
                    </td>
                    <td class="titulo">
                        <center>Fecha</center>
                    </td>
                </tr>
                <?php
                    $stid = oci_parse($conn, "select id_job, TO_CHAR(fecha, 'MM/DD/YYYY HH24:MI:SS A.M.') fecha2 from job where ROWNUM <= 15 order by id_job desc");
                    oci_execute($stid);
                    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                        echo '<tr>
                                <td><center>
                                    '.$row['ID_JOB'].' 
                                </td>
                                <td><center>
                                    '.$row['FECHA2'].'
                                </td>

                              </tr>';
                    }
                ?>
            </table>
        </div>
    </div>
</div>