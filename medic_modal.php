
<!-- modal -->

<div id="medic_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    </div>
    <div class="modal-body">

        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Login Medic</strong>
        </div>
        
                    <form class="form-horizontal" method="post" action="logareuser.php" id="login_form" style="border:1px solid #eee;padding-top:50px;margin-top:15px">
                      <div class="control-group">
                        <label class="control-label" for="nume_user">Nume utilizator:</label>
                        <div class="controls">
                          <input type="text" id="nume_user" placeholder="Nume utilizator"  name="nume_user" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="parola">Parola:</label>
                        <div class="controls">
                          <input type="password" id="parola" placeholder="Parola" name="parola" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <input name="Submit" type="submit" id="submit" value="Login" class="btn btn-success"/>
                          <input type="reset" name="Reset" value="Reset" class="btn"/>
                        </div>
                      </div>
                    </form>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign icon-large"></i>&nbsp;Close</button>

    </div>
</div

<!-- end modal -->