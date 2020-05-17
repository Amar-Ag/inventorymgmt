<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Transportation Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('transportation/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>TransportID</th>
						<th>ActivityID</th>
						<th>TransportTitle</th>
						<th>TransportDetails</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($transportation as $t){ ?>
                    <tr>
						<td><?php echo $t['TransportID']; ?></td>
						<td><?php echo $t['ActivityID']; ?></td>
						<td><?php echo $t['TransportTitle']; ?></td>
						<td><?php echo $t['TransportDetails']; ?></td>
						<td>
                            <a href="<?php echo site_url('transportation/edit/'.$t['TransportID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('transportation/remove/'.$t['TransportID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
