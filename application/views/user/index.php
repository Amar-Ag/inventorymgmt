<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Users Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>UserId</th>
						<th>FirstName</th>
						<th>LastName</th>
						<th>Address</th>
						<th>Email</th>
						<th>Password</th>
						<th>UserType</th>
						<th>RegisterDate</th>
						<th>IsActive</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($users as $u){ ?>
                    <tr>
						<td><?php echo $u['UserId']; ?></td>
						<td><?php echo $u['FirstName']; ?></td>
						<td><?php echo $u['LastName']; ?></td>
						<td><?php echo $u['Address']; ?></td>
						<td><?php echo $u['Email']; ?></td>
						<td><?php echo $u['Password']; ?></td>
						<td><?php if($u['UserType']==1) {echo 'Agent';} elseif ($u['UserType']==2) {echo 'Traveller';} else {echo 'Administrator';}  ?>  </td>
						<td><?php echo $u['RegisterDate']; ?></td>
						<td><?php echo $u['IsActive']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$u['UserId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$u['UserId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
