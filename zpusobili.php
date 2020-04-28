<?php

 include 'include/zpusobili_edit.php';
 include 'include/modal.php';

 include 'include/header.php';

?>



<div id="content">
    <center>
        <h1>Způsobilí k hlasování</h1>
        
    </center>
    <div class="container b_hole_before all_songs small_cont">
        <table width="100%" class="table table-striped" id="example" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">Byt</th>
                    <th scope="col">Jméno</th>
                    <th scope="col">Přijmení</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach ($zpusobiliy as $key => $zpusobili) {
                    ?>
                        <tr>
                        <td><a href="zpusobili_detail.php?idb=<?php echo $zpusobili->idb;?>&idc=<?php echo $zpusobili->idc;?>"><?php echo $zpusobili->dum;?> - <?php echo $zpusobili->byt;?></a></td>
                        <td><?php echo $zpusobili->jmeno;?></td>
                        <td><?php echo $zpusobili->prijmeni;?></td>

                        </tr>
                    <?php
                    }
                

                ?>
            </tbody>

        </table>


    </div>

</body>