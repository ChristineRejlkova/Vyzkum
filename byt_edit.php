

<?php
include 'include/byt_edit.php';
include 'include/vaha.php';
include 'include/header.php';


?>



            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Editace</h4>
                    <?php
                    if (strlen($message)>0) { 
                        echo "<p>".$message."</p>";
                    }

                    ?>
                </div>
                <div class="modal-body">
                    <div class="container">

                        <form method="POST">
                            <input type="hidden" name="C" value = "true"> 
                            <input type="hidden" name="idb" value="<?php echo $byt->idb;?>">                
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" >Dům:</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" name="dum" value="<?php echo $byt->dum;?>" required>
                                    </div>
                            </div>    
                            <div class="form-group">
                                    <label class="control-label col-sm-2" >Byt:</label>
                                        <div class="col-sm-10">
                                            <input type="text"  class="form-control" name="byt" value="<?php echo $byt->byt;?>" required>
                                        </div>
                            </div>     

                            <div class="form-group">
                                <label class="control-label col-sm-2" >Váha bytu: </label>
                                    <div class="col-sm-10">

                                            <select  class="form-control" name="idvaha" >
                                                <?php
                                                foreach ($vahay as $key => $vaha) {
                                                    if ($byt->idvaha == $vaha->idvaha) {
                                                        $selected = "SELECTED";
                                                    } else {
                                                        $selected = "";
                                                    }
                                                    echo '<option value="'.$vaha->idvaha.'" '. $selected .'>'.$vaha->vaha.'</option>';
                                                }
                                                ?>  
                                            </select>
                                    </div>          
                            </div>        
                                        
                            <div class="form-group">
                                <label class="control-label col-sm-2"  >Informace o bytu:</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" name="info" value="<?php echo $byt->info;?>" required><br>
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
                    <a href="byt.php"><button type="button" class="btn btn-default" data-dismiss="modal">Zpět</button></a>
                </div>
            </div>



