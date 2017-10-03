    <?php  
//?	
        $stid = oci_parse($conn, "select * from table(PCK_AVISTAMIENTO.AVE_CANTIDAD);");
        oci_execute($stid);
 $avistamientos =  '';
        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
            
            
        $stid = oci_parse($conn,"select * from table(PCK_AVISTAMIENTO.avistamiento_ave(".$row['ID_AVE']."));"); 
        oci_execute($stid);
        $ave = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
            
            
            $avistamientos .=  ' 
            
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                    <div class="single-plan">
                                        <div class="plan-icon">
                                            <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="plan-details">
                                            <h3><a href="?page=usuarios">'.$ave['NOMBRE_COMUN'].'</a></h3>
                                            <p>Avistamientos: 40</p>
                                            <div class="read-more">
                                                <a href="?page=usuarios">Ver mas</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
        }




    ?>