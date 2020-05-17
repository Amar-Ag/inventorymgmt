<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">User Edit</h3>
            </div>
            <?php echo form_open('user/edit/' . $user['UserId']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="FirstName" class="control-label">FirstName</label>
                        <div class="form-group">
                            <input type="text" name="FirstName"
                                   value="<?php echo($this->input->post('FirstName') ? $this->input->post('FirstName') : $user['FirstName']); ?>"
                                   class="form-control" id="FirstName"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="LastName" class="control-label">LastName</label>
                        <div class="form-group">
                            <input type="text" name="LastName"
                                   value="<?php echo($this->input->post('LastName') ? $this->input->post('LastName') : $user['LastName']); ?>"
                                   class="form-control" id="LastName"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="Address" class="control-label">Address</label>
                        <div class="form-group">
                            <input type="text" name="Address"
                                   value="<?php echo($this->input->post('Address') ? $this->input->post('Address') : $user['Address']); ?>"
                                   class="form-control" id="Address"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="Email" class="control-label">Email</label>
                        <div class="form-group">
                            <input type="text" name="Email"
                                   value="<?php echo($this->input->post('Email') ? $this->input->post('Email') : $user['Email']); ?>"
                                   class="form-control" id="Email"/>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <input type="text" name="oldPassword"
                                   value="<?php echo($this->input->post('Password') ? $this->input->post('Password') : $user['Password']); ?>" class="form-control" id="oldPassword"/>
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="Password" class="control-label">Password</label>
                        <br>
                        If you dont want to change the password leave it be.
                        <div class="form-group">
                            <input type="password" name="Password"
                                   value="" class="form-control" id="Password"/>
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        &nbsp;
                        <br>
                        <label for="ConfirmPassword" class="control-label">Confirm Password</label>

                        <div class="form-group">
                            <input type="password" name="newPassword" value="<?php echo $this->input->post('Password'); ?>"
                                   class="form-control" id="newPassword"/>
                            <span class="text-danger" id="Errormessage"></span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success" id="btn">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
    $('#Password').keyup(function () {
        //function checkPassword() {
        if (document.getElementById('Password').value == document.getElementById('newPassword').value) {
            document.getElementById('Errormessage').style.color = '';
            document.getElementById('Errormessage').innerHTML = '';
            document.getElementById('btn').disabled = false;
        } else {
            document.getElementById('Errormessage').style.color = 'red';
            document.getElementById('Errormessage').innerHTML = 'Password mismatch';
            document.getElementById('btn').disabled = true;
        }
    });
        $('#newPassword').keyup(function () {
            //function checkPassword() {
            if (document.getElementById('Password').value == document.getElementById('newPassword').value) {
                document.getElementById('Errormessage').style.color = '';
                document.getElementById('Errormessage').innerHTML = '';
                document.getElementById('btn').disabled = false;
            }

            else {
                document.getElementById('Errormessage').style.color = 'red';
                document.getElementById('Errormessage').innerHTML = 'Password mismatch';
                document.getElementById('btn').disabled = true;
            }
        });

</script>