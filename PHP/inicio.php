    <?php                
        $stid = oci_parse($conn, " 
SELECT  id_ave, COUNT(*) cantidad
FROM avistamiento WHERE ROWNUM <= 10
GROUP BY id_ave
HAVING COUNT(*) > 0  order by cantidad ;
");
        oci_execute($stid);
 $avistamientos =  '';
        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
            
            
        $stid = oci_parse($conn, " SELECT * avistamiento WHERE id_ave = ".$row['ID_AVE'].";");
        oci_execute($stid);
        $ave = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
            
            
            $avistamientos .=  ' 
            
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                    <div class="single-plan">
                                        <div class="plan-icon">
                                            <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="plan-details">
                                            <h3><a href="plan.html">'.$ave['NOMBRE_COMUN'].'</a></h3>
                                            <p>Avistamientos: 40</p>
                                            <div class="read-more">
                                                <a href="?page=usuarios">Ver mas</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
        }




    ?>