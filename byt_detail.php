<?php
include 'include/byt_detail.php';
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
                        <label class="control-label col-sm-2"  >Dům:</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" name="dum" value="<?php echo $byt->dum;?>" disabled>
                            </div>
                </div>    
                <div class="form-group">
                        <label class="control-label col-sm-2"  >Byt:</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" name="byt" value="<?php echo $byt->byt;?>" disabled>
                            </div>
                </div>     
                <div class="form-group">
                        <label class="control-label col-sm-2"  >Váha bytu:</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" name="vaha" value="<?php echo $byt->vaha;?>" disabled>
                            </div>
                </div>     
                <div class="form-group">
                        <label class="control-label col-sm-2"  >Informace o bytu:</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" name="info" value="<?php echo $byt->info;?>" disabled>
                            </div>
                </div>      
            
            </div>
    <div class="modal-footer">
        <a href="byt.php"><button type="button" class="btn btn-default" data-dismiss="modal">Zpět</button></a>
    </div>
</div>





