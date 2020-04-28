<?php
include 'include/segment_detail.php';
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
                    <label class="control-label col-sm-2" for="email">Segment:</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" name="segment" value="<?php echo $segment->segment;?>" disabled>
                        </div>
                </div>              
            </div>
        </div>      
    </div>
    
    <div class="modal-footer">
        <a href="segment.php"><button type="button" class="btn btn-default" data-dismiss="modal">Zpět</button></a>
    </div>
</div>





