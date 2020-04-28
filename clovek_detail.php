<?php
include 'include/clovek_detail.php';
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
                                <label class="control-label col-sm-2" >Jméno:</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" name="jmeno" value="<?php echo $clovek->jmeno;?>" disabled>
                                    </div>
                            </div>    
                            <div class="form-group">
                                    <label class="control-label col-sm-2" >Přijmení:</label>
                                        <div class="col-sm-10">
                                            <input type="text"  class="form-control" name="prijmeni" value="<?php echo $clovek->prijmeni;?>" disabled>
                                        </div>
                            </div>     
            
                                        
                            <div class="form-group">
                                <label class="control-label col-sm-2"  >Titul:</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" name="tit" value="<?php echo $clovek->tit;?>" disabled ><br>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2"  >E-mail:</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" name="mail" value="<?php echo $clovek->mail;?>" disabled><br>
                                    </div>
                            </div>
            
            </div>
    <div class="modal-footer">
        <a href="clovek.php"><button type="button" class="btn btn-default" data-dismiss="modal">Zpět</button></a>
    </div>
</div>





