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
            <input type="hidden" name="idc" value="">
                            <div class="form-group">
                                <label class="control-label col-sm-2" >Jméno:</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" name="jmeno" value="" required>
                                    </div>
                            </div>    
                            <div class="form-group">
                                    <label class="control-label col-sm-2" >Přijmení:</label>
                                        <div class="col-sm-10">
                                            <input type="text"  class="form-control" name="prijmeni" value="" required>
                                        </div>
                            </div>     
            
                                        
                            <div class="form-group">
                                <label class="control-label col-sm-2"  >Titul:</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" name="tit" value="" ><br>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2"  >E-mail:</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" name="mail" value="" ><br>
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




