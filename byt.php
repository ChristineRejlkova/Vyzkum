<?php

 include 'include/byt_edit.php';

 include 'include/modal.php';

 include 'include/header.php'; 


?>
<style>

.form-control {
  width: 20% !important;
  }
</style>



<div id="content">
    <center>
        <h1>Moje byty</h1>
        <?php
    if (strlen($message)>0) { 
        echo "<p>".$message."</p>";
    }

    
    ?>
    
    </center>
        <div class="container">

            <form method="POST">
                <input type="hidden" name="search" value = "true">             
                <div class="form-group">
                    <label class="control-label col-sm-2" >Dům:</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" name="dum" value="" >
                        </div>
                </div>    
                <div class="form-group">
                        <label class="control-label col-sm-2" >Byt:</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" name="byt" value="" >
                            </div>
                </div>     
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Najdi</button>
                    </div>
                </div>
            </form>
        </div>

    <div class="container b_hole_before all_songs small_cont">
        <table width="100%" class="table table-striped" id="example" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">Dům </th>
                    <th scope="col">Byt</th>
                    <th scope="col">Váha</th>
                    <th scope="col">Barva</th>
                    <th scope="col">Informace o bytě</th>                    
                    <th></th>
                    <th><a href="byt_add.php" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i></a></th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach ($byty as $key => $byt) {
                    ?>
                        <tr>
                        <td><a href="byt_detail.php?idb=<?php echo $byt->idb;?>"><?php echo $byt->dum;?></a></td>
                        <td><?php echo $byt->byt;?></td>
                        <td><?php echo $byt->vaha;?></td>
                        <td><?php echo $byt->barva;?></td>
                        <td><?php echo $byt->info;?></td>
                        <td><a href="byt_edit.php?editace=<?php echo $byt->idb;?>"><i class="fa fa-edit"></i></a></td>
                        <td><a href="?del=<?php echo $byt->idb;?>"><i class="fa fa-trash-o"></i></a></td>  
                        </tr>
                    <?php
                    }
                

                ?>
            </tbody>

        </table>


    </div>

</body>