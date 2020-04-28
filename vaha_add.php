<style>

.form-control {
  width: auto !important;
  }
</style>

 
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editace</h4>
    </div>
                <div class="modal-body">
                    <div class="container">
                        <form  class="form-horizontal" method="POST">
                            <input type="hidden" name="B" value = "true"> 
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Barva:</label>
                                <div class="col-sm-10">
                                    <input type="text"  class="form-control" name="barva" value="" required>
                                </div>
                            </div>     

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Váha:</label>
                                <div class="col-sm-10">
                                    <input type="text"  class="form-control" name="vaha" value="" required>
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
                    <a href="vaha.php"><button type="button" class="btn btn-default" data-dismiss="modal">Zpět</button></a>
                </div>
    </div>


    