<?php

 include 'include/vaha_edit.php';
 include 'include/modal.php';

 include 'include/header.php';

?>



<div id="content">
    <center>
        <h1>Váhy</h1>
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
                    <th scope="col">Barva </th>
                    <th scope="col">Váha</th>
                    <th></th>
                    <th><a href="vaha_add.php" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i></a></th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach ($vahay as $key => $vaha) {
                    ?>
                        <tr>
                        <td><a href="vaha_detail.php?idvaha=<?php echo $vaha->idvaha;?>"><?php echo $vaha->barva;?></a></td>
                        <td><?php echo $vaha->vaha;?></td>
                        <td><a href="vaha_edit.php?editace=<?php echo $vaha->idvaha;?>"><i class="fa fa-edit"></i></a></td>
                        <td><a href="?del=<?php echo $vaha->idvaha;?>"><i class="fa fa-trash-o"></i></a></td>  
                        </tr>
                    <?php
                    }
                

                ?>
            </tbody>

        </table>


    </div>

</body>