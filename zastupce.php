<?php

 include 'include/zastupce_edit.php';
 include 'include/modal.php';

 include 'include/header.php';

?>



<div id="content">
    <center>
        <h1>Zástupci</h1>
        <?php
    if (strlen($message)>0) { 
        echo "<p>".$message."</p>";
    }

    ?>
        
    </center>
    <div class="container b_hole_before all_songs small_cont">
        <table width="100%" class="table table-striped" id="example" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">Byt</th>
                    <th scope="col">Vlastník</th>
                    <th scope="col">Zástupce</th>
                    <th scope="col">Od - Do</th>
                    <th scope="col">Informace</th>
                    <th></th>
                    <th><a href="zastupce_add.php" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i></a></th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach ($zastupcey as $key => $zastupce) {
                    ?>
                        <tr>
                        <td><a href="zastupce_detail.php?idzastupce=<?php echo $zastupce->idzastupce;?>"><?php echo $zastupce->dum;?> - <?php echo $zastupce->byt;?></a></td>
                        <td><?php echo $zastupce->jmeno_v;?> <?php echo $zastupce->prijmeni_v;?></td>
                        <td><?php echo $zastupce->jmeno;?> <?php echo $zastupce->prijmeni;?></td>
                        <td><?php echo $zastupce->datumOd;?> - <?php echo $zastupce->datumDo;?> </td>
                        <td><?php echo $zastupce->kde;?> ; <?php echo $zastupce->info;?></td>
                        <td><a href="zastupce_edit.php?editace=<?php echo $zastupce->idzastupce;?>"><i class="fa fa-edit"></i></a></td>
                        <td><a href="?del=<?php echo $zastupce->idzastupce;?>"><i class="fa fa-trash-o"></i></a></td>  
                        </tr>
                    <?php
                    }
                

                ?>
            </tbody>

        </table>


    </div>

</body>