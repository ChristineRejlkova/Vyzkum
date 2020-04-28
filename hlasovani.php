<?php

 include 'include/hlasovani_edit.php';
 include 'include/modal.php';

 include 'include/header.php';

?>



<div id="content">
    <center>
        <h1>Hlasování</h1>
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
                    <th scope="col">Návrh</th>
                    <th scope="col">Změna</th>
                    <th scope="col">Segment</th>
                    <th scope="col">Pro</th>
                    <th scope="col">Proti</th>
                    <th scope="col">Zdrželo se</th>                    
                    <th></th>
                    <th><a href="hlasovani_add.php" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i></a></th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach ($hlasovaniy as $key => $hlasovani) {
                    ?>
                        <tr>
                        <td><a href="hlasovani_detail.php?idhlasovani=<?php echo $hlasovani->idhlasovani;?>"><?php echo $hlasovani->navrh;?></a></td>
                        <td><?php echo $hlasovani->zmena;?></td>
                        <td><?php echo $hlasovani->segment;?></td>
                        <td><?php echo $hlasovani->pro;?></td>
                        <td><?php echo $hlasovani->proti;?></td>
                        <td><?php echo $hlasovani->zdrzel;?></td>
                        <td><a href="hlasovani_edit.php?editace=<?php echo $hlasovani->idhlasovani;?>"><i class="fa fa-edit"></i></a></td>
                        <td><a href="?del=<?php echo $hlasovani->idhlasovani;?>"><i class="fa fa-trash-o"></i></a></td>  
                        </tr>
                    <?php
                    }
                

                ?>
            </tbody>

        </table>


    </div>

</body>