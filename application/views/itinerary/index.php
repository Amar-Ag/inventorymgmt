<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Itinerary Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('itinerary/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ItineraryId</th>
						<th>ToDate</th>
						<th>ActivitiesId</th>
						<th>CreatedDate</th>
						<th>IsActive</th>
						<th>UserId</th>
						<th>DestinationId</th>
						<th>FromDate</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($itinerary as $i){ ?>
                    <tr>
						<td><?php echo $i['ItineraryId']; ?></td>
						<td><?php echo $i['ToDate']; ?></td>
						<td><?php echo $i['ActivitiesId']; ?></td>
						<td><?php echo $i['CreatedDate']; ?></td>
						<td><?php echo $i['IsActive']; ?></td>
						<td><?php echo $i['UserId']; ?></td>
						<td><?php echo $i['DestinationId']; ?></td>
						<td><?php echo $i['FromDate']; ?></td>
						<td>
                            <a href="<?php echo site_url('itinerary/edit/'.$i['ItineraryId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('itinerary/remove/'.$i['ItineraryId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
