<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Transportation Edit</h3>
            </div>
			<?php echo form_open('transportation/edit/'.$transportation['TransportID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="ActivityID" class="control-label">ActivityID</label>
						<div class="form-group">
							<input type="text" name="ActivityID" value="<?php echo ($this->input->post('ActivityID') ? $this->input->post('ActivityID') : $transportation['ActivityID']); ?>" class="form-control" id="ActivityID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="TransportTitle" class="control-label">TransportTitle</label>
						<div class="form-group">
							<input type="text" name="TransportTitle" value="<?php echo ($this->input->post('TransportTitle') ? $this->input->post('TransportTitle') : $transportation['TransportTitle']); ?>" class="form-control" id="TransportTitle" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="TransportDetails" class="control-label">TransportDetails</label>
						<div class="form-group">
							<textarea name="TransportDetails" class="form-control" id="TransportDetails"><?php echo ($this->input->post('TransportDetails') ? $this->input->post('TransportDetails') : $transportation['TransportDetails']); ?></textarea>
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