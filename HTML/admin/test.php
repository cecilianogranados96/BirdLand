<div class="breadcumb-area eight">
    <div class="container">
        <div class="row">
            <div class="breadcumb">
                <center>
                    <h2>Nuevo Avistamiento</h2>
                </center>
            </div>
        </div>
    </div>
</div>
<div class="animal-details">
    <div class="container">
        <div class="row">



            <?php 
$stid = oci_parse ($conn, "SELECT * FROM CANTON ORDER BY ID_CANTON ASC");  
oci_execute ($stid,OCI_DEFAULT);  
$Num_Rows = oci_fetch_all($stid, $row);  
if(!isset($_GET["Page"]))  
{  
    $Page=1;  
}else{
    $Page = $_GET['Page'];
}

$Prev_Page = $Page-1;  
$Next_Page = $Page+1;  
  
$Page_Start = (($total_pagina*$Page)-$total_pagina);  
    
if($Num_Rows<=$total_pagina)  
{  
    $Num_Pages =1;  
}  
else if(($Num_Rows % $total_pagina)==0)  
{  
    $Num_Pages =($Num_Rows/$total_pagina) ;  
}  
else  
{  
    $Num_Pages =($Num_Rows/$total_pagina)+1;  
    $Num_Pages = (int)$Num_Pages;  
}  
$Page_End = $total_pagina * $Page;  
if ($Page_End > $Num_Rows)  
{  
    $Page_End = $Num_Rows;  
}  

for($i=$Page_Start;$i<$Page_End;$i++)  
{  
            echo '<tr>
                    <td>
                        <div align="center">'.$row["ID_CANTON"][$i].'</div>
                    </td>
                    <td>
                        '.$row["NOMBRE"][$i].'
                    </td>
                </tr>';
}
?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="container">
                    <ul class="pagination">
                        <?php
                            if($Prev_Page)  
                            {  

                                 echo '<li><a href="?pag='.$_GET['pag'].'&'.$Prev_Page.'">»</a></li>';
                            }  

                            for($i=1; $i<=$Num_Pages; $i++){  
                                if($i != $Page)  
                                {  
                                    echo '<li><a href="?pag='.$_GET['pag'].'&Page='.$i.'">'.$i.'</a></li>';
                                }  
                                else  
                                {  
                                    echo '<li class="active"><a href="#">'.$i.' <span class="sr-only">(current)</span></a></li>';
                                }  
                            } 

                            if($Page!=$Num_Pages)  
                            {  

                                echo '<li><a href="?pag='.$_GET['pag'].'&'.$Next_Page.'">»</a></li>';
                            }  
                        ?>
                    </ul>
                </div>
            </div>
