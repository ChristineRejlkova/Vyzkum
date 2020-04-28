<?php
include 'include/zpusobili_detail.php';

include 'include/header.php';

?>


<div class="modal-content">

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail</h4>
    </div>
    <div class="modal-body">
        <div id="content">
            <div class="container small_cont">
            
                <div class="form-group">
                    <label class="control-label col-sm-2" >Byt: </label>
                        <div class="col-sm-10">                      
                            <input type="text"   class="form-control" name="byt" value="<?php echo $zpusobili->dum;?> - <?php echo $zpusobili->byt;?>" disabled>
                        </div>          
                </div>   

                <div class="form-group">
                    <label class="control-label col-sm-2" >Způsobilí: </label>
                        <div class="col-sm-10">                      
                            <input type="text"   class="form-control" name="idc" value="<?php echo $zpusobili->jmeno;?> <?php echo $zpusobili->prijmeni;?>" disabled>
                        </div>          
                </div>   

                <div class="form-group">
                    <label class="control-label col-sm-2" >Vlastník: </label>
                        <div class="col-sm-10">      
                                                    
                            <input type="text"   class="form-control" name="idv" value="<?php echo $zastupce->jmeno_v;?> <?php echo $zastupce->prijmeni_v;?>" disabled>
                                            
                        </div>          
                </div>            

                <div class="form-group">
                    <label class="control-label col-sm-2" >Zástupce vlastníka: </label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" name="idc_zastup" value="<?php echo $zastupce->jmeno;?> <?php echo $zastupce->prijmeni;?>" disabled>
                        </div>          
                </div>                     

                <div class="form-group">
                    <label class="control-label col-sm-2" >Datum od: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="datumOd" value="<?php echo $zastupce->datumOd;?>" disabled>
                        </div>          
                </div>                     
                           
                <div class="form-group">
                    <label class="control-label col-sm-2" >Datum do: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="datumDo"  value="<?php echo $zastupce->datumDo;?>"disabled>
                        </div>          
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" >Kde to najdu?: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kde" value="<?php echo $zastupce->kde;?>" disabled>
                        </div>          
                </div> 

                <div class="form-group">
                    <label class="control-label col-sm-2" >Doplňující informace: </label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control"name="info" value="<?php echo $zastupce->info;?>" disabled>
                        </div>          
                </div>      

            </div>
        </div>      
    </div>
    
    <div class="modal-footer">
        <a href="zpusobili.php"><button type="button" class="btn btn-default" data-dismiss="modal">Zpět</button></a>
    </div>
</div>





