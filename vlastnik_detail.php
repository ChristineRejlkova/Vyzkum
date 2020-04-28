<?php
include 'include/vlastnik_detail.php';
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
                            <input type="text"  class="form-control" name="dum" value="<?php echo $vlastnik->dum;?>" disabled>
                        </div>
                </div>     

                <div class="form-group">
                    <label class="control-label col-sm-2"  >Byt:</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" name="byt" value="<?php echo $vlastnik->byt;?>" disabled>
                        </div>
                </div> 

                <div class="form-group">
                    <label class="control-label col-sm-2"  >Váha:</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" name="vaha" value="<?php echo $vlastnik->vaha;?>" disabled>
                        </div>
                </div>    

                <div class="form-group">
                    <label class="control-label col-sm-2"  >Jméno vlastníka:</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" name="jmeno" value="<?php echo $vlastnik->jmeno;?>" disabled>
                        </div>
                </div>    

                <div class="form-group">
                    <label class="control-label col-sm-2"  >Přijmení vlastníka:</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" name="prijmeni" value="<?php echo $vlastnik->prijmeni;?>" disabled>
                        </div>
                </div>                   
            </div>
        </div>      
    </div>
    
    <div class="modal-footer">
        <a href="vlastnik.php"><button type="button" class="btn btn-default" data-dismiss="modal">Zpět</button></a>
    </div>
</div>





