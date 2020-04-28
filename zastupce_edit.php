
<?php
include 'include/zastupce_edit.php';
include 'include/clovek.php';
include 'include/vlastnik.php';


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
                            <input type="hidden" name="idzastupce" value="<?php echo $zastupce->idzastupce;?>">
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
                                                    if ($zastupce->idc == $clovek->idc) {
                                                        $selected = "SELECTED";
                                                    } else {
                                                        $selected = "";
                                                    }
                                                    echo '<option value="'.$clovek->idc.'" '. $selected .'>'.$clovek->jmeno.' '.$clovek->prijmeni.'</option>';
                                                }
                                                ?>  
                                            </select>
                                    </div>          
                            </div>                     

                            <div class="form-group">
                                <label class="control-label col-sm-2" >Datum od: </label>
                                    <div class="col-sm-10">
                                        <input type="date"  class="form-control" name="datumOd" value="<?php echo $zastupce->datumOd;?>" require>
                                    </div>          
                            </div>                     
                           
                            <div class="form-group">
                                <label class="control-label col-sm-2" >Datum do: </label>
                                    <div class="col-sm-10">
                                        <input type="date"  class="form-control" name="datumDo"  value="<?php echo $zastupce->datumDo;?>"require>
                                    </div>          
                            </div>

                             <div class="form-group">
                                <label class="control-label col-sm-2" >Kde to najdu?: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kde" value="<?php echo $zastupce->kde;?>">
                                    </div>          
                            </div> 

                            <div class="form-group">
                                <label class="control-label col-sm-2" >Doplňující informace: </label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control"name="info" value="<?php echo $zastupce->info;?>">
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


    


