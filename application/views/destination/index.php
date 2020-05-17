<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Destination Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('destination/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>DestinationId</th>
						<th>DestinationTitle</th>
						<th>CreatedBy</th>
						<th>CreatedDate</th>
						<th>IsActive</th>
						<th>DestinationDetails</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($destination as $d){ ?>
                    <tr>
						<td><?php echo $d['DestinationId']; ?></td>
						<td><?php echo $d['DestinationTitle']; ?></td>
						<td><?php echo $d['CreatedBy']; ?></td>
						<td><?php echo $d['CreatedDate']; ?></td>
						<td><?php echo $d['IsActive']; ?></td>
						<td><?php echo $d['DestinationDetails']; ?></td>
						<td>
                            <a href="<?php echo site_url('destination/edit/'.$d['DestinationId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('destination/remove/'.$d['DestinationId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
