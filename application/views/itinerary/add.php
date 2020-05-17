<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Itinerary Add</h3>
            </div>
            <?php echo form_open('itinerary/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="ToDate" class="control-label">ToDate</label>
						<div class="form-group">
							<input type="text" name="ToDate" value="<?php echo $this->input->post('ToDate'); ?>" class="form-control" id="ToDate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ActivitiesId" class="control-label">ActivitiesId</label>
						<div class="form-group">
							<input type="text" name="ActivitiesId" value="<?php echo $this->input->post('ActivitiesId'); ?>" class="form-control" id="ActivitiesId" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CreatedDate" class="control-label">CreatedDate</label>
						<div class="form-group">
							<input type="text" name="CreatedDate" value="<?php echo $this->input->post('CreatedDate'); ?>" class="form-control" id="CreatedDate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="IsActive" class="control-label">IsActive</label>
						<div class="form-group">
							<input type="text" name="IsActive" value="<?php echo $this->input->post('IsActive'); ?>" class="form-control" id="IsActive" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="UserId" class="control-label">UserId</label>
						<div class="form-group">
							<input type="text" name="UserId" value="<?php echo $this->input->post('UserId'); ?>" class="form-control" id="UserId" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DestinationId" class="control-label">DestinationId</label>
						<div class="form-group">
							<input type="text" name="DestinationId" value="<?php echo $this->input->post('DestinationId'); ?>" class="form-control" id="DestinationId" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="FromDate" class="control-label">FromDate</label>
						<div class="form-group">
							<input type="text" name="FromDate" value="<?php echo $this->input->post('FromDate'); ?>" class="form-control" id="FromDate" />
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