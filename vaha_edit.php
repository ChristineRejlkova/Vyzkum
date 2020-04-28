
<?php
include 'include/vaha_edit.php';
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
                            <input type="hidden" name="A" value = "true"> 
                            <input type="hidden" name="idvaha" value="<?php echo $vaha->idvaha;?>">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Barva:</label>
                                <div class="col-sm-10">
                                    <input type="text"  class="form-control" name="barva" value="<?php echo $vaha->barva;?>" required>
                                </div>
                            </div>     

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Váha:</label>
                                <div class="col-sm-10">
                                    <input type="text"  class="form-control" name="vaha" value="<?php echo $vaha->vaha;?>" required>
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
                    <a href="vaha.php"><button type="button" class="btn btn-default" data-dismiss="modal">Zpět</button></a>
                </div>
    </div>


    


