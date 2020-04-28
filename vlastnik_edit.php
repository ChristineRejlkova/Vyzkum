
<?php
include 'include/vlastnik_edit.php';
include 'include/clovek.php';
include 'include/byt.php';


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
                            <input type="hidden" name="idv" value="<?php echo $vlastnik->idv;?>">
                            <div class="form-group">
                                <label class="control-label col-sm-2" >Byt: </label>
                                    <div class="col-sm-10">

                                            <select  class="form-control" name="idb">
                                                <?php
                                                foreach ($byty as $key => $byt) {
                                                ?>                        
                                                    <option value="<?php echo $byt->idb; ?>"><?php echo $byt->dum; ?> - <?php echo $byt->byt; ?></option>
                                                <?php
                                                }
                                                ?>  
                                            </select>
                                    </div>          
                            </div>            

                            <div class="form-group">
                                <label class="control-label col-sm-2" >Vlastník bytu: </label>
                                    <div class="col-sm-10">

                                            <select  class="form-control" name="idc">
                                                <?php
                                                foreach ($cloveky as $key => $clovek) {
                                                ?>                        
                                                    <option value="<?php echo $clovek->idc; ?>"><?php echo $clovek->jmeno; ?> <?php echo $clovek->prijmeni; ?></option>
                                                <?php
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
                    <a href="vlastnik.php"><button type="button" class="btn btn-default" data-dismiss="modal">Zpět</button></a>
                </div>
    </div>


    


