<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">User Add</h3>
            </div>
            <?php
            $error_msg = $this->session->flashdata('error_msg');

            if ($error_msg) {
                ?>
                <div class="alert alert-danger">
                    <?php echo $error_msg; ?>
                </div>
                <?php
            }
            ?>
            <?php echo form_open('user/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="FirstName" class="control-label">FirstName</label>
                        <div class="form-group">
                            <input type="text" name="FirstName" value="<?php echo $this->input->post('FirstName'); ?>"
                                   class="form-control" id="FirstName"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="LastName" class="control-label">LastName</label>
                        <div class="form-group">
                            <input type="text" name="LastName" value="<?php echo $this->input->post('LastName'); ?>"
                                   class="form-control" id="LastName"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="Address" class="control-label">Address</label>
                        <div class="form-group">
                            <input type="text" name="Address" value="<?php echo $this->input->post('Address'); ?>"
                                   class="form-control" id="Address"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="Email" class="control-label">Email</label>
                        <div class="form-group">
                            <input type="email" name="Email" value="<?php echo $this->input->post('Email'); ?>"
                                   class="form-control" id="Email"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="Password" class="control-label">Password</label>
                        <div class="form-group">
                            <input type="password" name="Password" value="<?php echo $this->input->post('Password'); ?>"
                                   class="form-control" id="Password"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="UserType" class="control-label">UserType</label>
                        <div class="form-group">
                            <select name="UserType" class="form-control" id="UserType">
                                <option value="1">Agent</option>
                                <option value="2" selected>Traveller</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>