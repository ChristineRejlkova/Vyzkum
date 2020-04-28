<?php

 include 'include/vlastnik_edit.php';
 include 'include/modal.php';

 include 'include/header.php';

?>



<div id="content">
    <center>
        <h1>Vlastníci</h1>
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
                    <th scope="col">Dům</th>
                    <th scope="col">Byt</th>
                    <th scope="col">Váha</th>
                    <th scope="col">Jméno</th>
                    <th scope="col">Přijmení</th>
                    <th></th>
                    <th><a href="vlastnik_add.php" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i></a></th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach ($vlastniky as $key => $vlastnik) {
                    ?>
                        <tr>
                        <td><a href="vlastnik_detail.php?idv=<?php echo $vlastnik->idv;?>"><?php echo $vlastnik->dum;?></a></td>
                        <td><?php echo $vlastnik->byt;?></td>
                        <td><?php echo $vlastnik->vaha;?></td>
                        <td><?php echo $vlastnik->jmeno;?></td>
                        <td><?php echo $vlastnik->prijmeni;?></td>
                        <td><a href="vlastnik_edit.php?editace=<?php echo $vlastnik->idv;?>"><i class="fa fa-edit"></i></a></td>
                        <td><a href="?del=<?php echo $vlastnik->idv;?>"><i class="fa fa-trash-o"></i></a></td>  
                        </tr>
                    <?php
                    }
                

                ?>
            </tbody>

        </table>


    </div>

</body>