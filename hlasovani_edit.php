
<?php
include 'include/hlasovani_edit.php';
include 'include/segment.php';


include 'include/header.php';

?>

<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editace</h4>
    </div>
                <div class="modal-body">
                    <div class="container">
                        <form  class="form-horizontal" method="POST">
                            <?php
                            if (strlen($message)>0) { 
                                    echo "<p>".$message."</p>";
                                }

                            ?>
                            <input type="hidden" name="edit" value = "true"> 
                            <input type="hidden" name="idhlasovani" value="<?php echo $hlasovani->idhlasovani;?>">
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" >Návrh: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="navrh" value="<?php echo $hlasovani->navrh;?>">
                                    </div>          
                            </div> 

                            <div class="form-group">
                                <label class="control-label col-sm-2" >Změna návrhu: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="zmena" value="<?php echo $hlasovani->zmena;?>">
                                    </div>          
                            </div> 

                            <div class="form-group">
                                <label class="control-label col-sm-2" >Segment: </label>
                                    <div class="col-sm-10">

                                            <select  class="form-control" name="idsegment">
                                                <?php
                                                foreach ($segmenty as $key => $segment) {
                                                    if ($hlasovani->idsegment == $segment->idsegment) {
                                                        $selected = "SELECTED";
                                                    } else {
                                                        $selected = "";
                                                    }
                                                    echo '<option value="'.$segment->idsegment.'" '. $selected .'>'.$segment->segment.'</option>';
                                                }
                                                ?>     
                                            </select>
                                    </div>          
                            </div>         
            
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Uložit</button>
                                </div>
                            </div>                        
                        </form>    
                    
                    </div>
                        
                </div>
                <div class="modal-footer">
                    <a href="hlasovani.php"><button type="button" class="btn btn-default" data-dismiss="modal">Zpět</button></a>
                </div>
    </div>


    


