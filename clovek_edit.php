

<?php
include 'include/clovek_edit.php';
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
                            <input type="hidden" name="idc" value="<?php echo $clovek->idc;?>">                
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" >Jméno:</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" name="jmeno" value="<?php echo $clovek->jmeno;?>" required>
                                    </div>
                            </div>    
                            <div class="form-group">
                                    <label class="control-label col-sm-2" >Přijmení:</label>
                                        <div class="col-sm-10">
                                            <input type="text"  class="form-control" name="prijmeni" value="<?php echo $clovek->prijmeni;?>" required>
                                        </div>
                            </div>     
            
                                        
                            <div class="form-group">
                                <label class="control-label col-sm-2"  >Titul:</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" name="tit" value="<?php echo $clovek->tit;?>" ><br>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2"  >E-mail:</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" name="mail" value="<?php echo $clovek->mail;?>" ><br>
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
                    <a href="clovek.php"><button type="button" class="btn btn-default" data-dismiss="modal">Zpět</button></a>
                </div>
            </div>



