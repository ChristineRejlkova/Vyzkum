<?php

 include 'include/clovek_edit.php';

 include 'include/modal.php';

 include 'include/header.php'; 


?>



<div id="content">
    <center>
        <h1>Členové</h1>
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
                    <th scope="col">Jméno </th>
                    <th scope="col">Přijmení</th>
                    <th scope="col">Titul</th>
                    <th scope="col">E-mail</th>
                    <th></th>
                    <th><a href="clovek_add.php" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i></a></th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach ($cloveky as $key => $clovek) {
                    ?>
                        <tr>
                        <td><a href="clovek_detail.php?idc=<?php echo $clovek->idc;?>"><?php echo $clovek->jmeno;?></a></td>
                        <td><?php echo $clovek->prijmeni;?></td>
                        <td><?php echo $clovek->tit;?></td>
                        <td><?php echo $clovek->mail;?></td>
                        <td><a href="clovek_edit.php?editace=<?php echo $clovek->idc;?>"><i class="fa fa-edit"></i></a></td>
                        <td><a href="?del=<?php echo $clovek->idc;?>"><i class="fa fa-trash-o"></i></a></td>  
                        </tr>
                    <?php
                    }
                

                ?>
            </tbody>

        </table>


    </div>

</body>