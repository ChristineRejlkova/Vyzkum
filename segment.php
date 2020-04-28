<?php

 include 'include/segment_edit.php';
 include 'include/modal.php';

 include 'include/header.php';

?>



<div id="content">
    <center>
        <h1>Segment</h1>
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
                    <th scope="col">Segment</th>
                    <th></th>
                    <th><a href="segment_add.php" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i></a></th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach ($segmenty as $key => $segment) {
                    ?>
                        <tr>
                        <td><a href="segment_detail.php?idsegment=<?php echo $segment->idsegment;?>"><?php echo $segment->segment;?></a></td>
                        <td><a href="segment_edit.php?editace=<?php echo $segment->idsegment;?>"><i class="fa fa-edit"></i></a></td>
                        <td><a href="?del=<?php echo $segment->idsegment;?>"><i class="fa fa-trash-o"></i></a></td>  
                        </tr>
                    <?php
                    }
                

                ?>
            </tbody>

        </table>


    </div>

</body>