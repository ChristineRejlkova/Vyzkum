<?php
 include 'include/vaha.php';

?>
<style>

.form-control {
  width: auto !important;
  }
</style>


<div class="modal-content">

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Přidej záznam</h4>
</div>
<div class="modal-body">
    <div class="container">

        <form method="POST">
            <input type="hidden" name="add" value = "true">             
            <div class="form-group">
                <label class="control-label col-sm-2" >Dům:</label>
                    <div class="col-sm-10">
                        <input type="text"  class="form-control" name="dum" value="" required>
                    </div>
            </div>    
            <div class="form-group">
                    <label class="control-label col-sm-2" >Byt:</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" name="byt" value="" required>
                        </div>
            </div>     
            <div class="form-group">
                <label class="control-label col-sm-2" >Váha bytu: </label>
                    <div class="col-sm-10">

                        <select  class="form-control" name="idvaha[]">
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
                        <input type="text"  class="form-control" name="info" value="" required><br>
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




