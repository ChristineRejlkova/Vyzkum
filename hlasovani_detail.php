<?php
include 'include/hlasovani_detail.php';
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
                                <label class="control-label col-sm-2" >Návrh: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="navrh" value="<?php echo $hlasovani->navrh;?>" disabled>
                                    </div>          
                            </div> 

                            <div class="form-group">
                                <label class="control-label col-sm-2" >Změna návrhu: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="zmena" value="<?php echo $hlasovani->zmena;?>" disabled>
                                    </div>          
                            </div> 

                            <div class="form-group">
                                <label class="control-label col-sm-2" >Segment: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="segment" value="<?php echo $hlasovani->segment;?>" disabled>
                                    </div>          
                            </div>         

            </div>
        </div>      
    </div>
    
    <div class="modal-footer">
        <a href="hlasovani.php"><button type="button" class="btn btn-default" data-dismiss="modal">Zpět</button></a>
    </div>
</div>





