
<?php
include 'include/clovek.php';
include 'include/vlastnik.php';

?>
<style>

.form-control {
  width: auto !important;
  }
</style>

 
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Přidej</h4>
    </div>
                <div class="modal-body">
                    <div class="container">
                        <form  class="form-horizontal" method="POST">
                            <input type="hidden" name="add" value = "true"> 
                            <div class="form-group">
                                <label class="control-label col-sm-2" >Vlastník: </label>
                                    <div class="col-sm-10">

                                            <select  class="form-control" name="idv">
                                            <?php
                                                foreach ($vlastniky as $key => $vlastnik) {
                                                    if ($zastupce->idv == $vlastnik->idv) {
                                                        $selected = "SELECTED";
                                                    } else {
                                                        $selected = "";
                                                    }
                                                    echo '<option value="'.$vlastnik->idv.'" '. $selected .'>'.$vlastnik->jmeno.' '.$vlastnik->prijmeni.'</option>';
                                                }
                                                ?>  
                                            </select>
                                    </div>          
                            </div>            

                            <div class="form-group">
                                <label class="control-label col-sm-2" >Zástupce vlastníka: </label>
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
                                <label class="control-label col-sm-2" >Datum od: </label>
                                    <div class="col-sm-10">
                                        <input type="date"  name="datumOd" require>
                                    </div>          
                            </div>                     
                           
                            <div class="form-group">
                                <label class="control-label col-sm-2" >Datum do: </label>
                                    <div class="col-sm-10">
                                        <input type="date" name="datumDo" require>
                                    </div>          
                            </div>

                             <div class="form-group">
                                <label class="control-label col-sm-2" >Kde to najdu?: </label>
                                    <div class="col-sm-10">
                                        <input type="textarea" name="kde">
                                    </div>          
                            </div> 

                            <div class="form-group">
                                <label class="control-label col-sm-2" >Doplňující informace: </label>
                                    <div class="col-sm-10">
                                        <input type="textarea" name="info">
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
                    <a href="zastupce.php"><button type="button" class="btn btn-default" data-dismiss="modal">Zpět</button></a>
                </div>
    </div>


    