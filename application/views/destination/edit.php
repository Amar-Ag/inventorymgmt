<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Destination Edit</h3>
            </div>
			<?php echo form_open('destination/edit/'.$destination['DestinationId']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="DestinationTitle" class="control-label">DestinationTitle</label>
						<div class="form-group">
							<input type="text" name="DestinationTitle" value="<?php echo ($this->input->post('DestinationTitle') ? $this->input->post('DestinationTitle') : $destination['DestinationTitle']); ?>" class="form-control" id="DestinationTitle" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CreatedBy" class="control-label">CreatedBy</label>
						<div class="form-group">
							<input type="text" name="CreatedBy" value="<?php echo ($this->input->post('CreatedBy') ? $this->input->post('CreatedBy') : $destination['CreatedBy']); ?>" class="form-control" id="CreatedBy" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CreatedDate" class="control-label">CreatedDate</label>
						<div class="form-group">
							<input type="text" name="CreatedDate" value="<?php echo ($this->input->post('CreatedDate') ? $this->input->post('CreatedDate') : $destination['CreatedDate']); ?>" class="has-datepicker form-control" id="CreatedDate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="IsActive" class="control-label">IsActive</label>
						<div class="form-group">
							<input type="text" name="IsActive" value="<?php echo ($this->input->post('IsActive') ? $this->input->post('IsActive') : $destination['IsActive']); ?>" class="form-control" id="IsActive" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DestinationDetails" class="control-label">DestinationDetails</label>
						<div class="form-group">
							<textarea name="DestinationDetails" class="form-control" id="DestinationDetails"><?php echo ($this->input->post('DestinationDetails') ? $this->input->post('DestinationDetails') : $destination['DestinationDetails']); ?></textarea>
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