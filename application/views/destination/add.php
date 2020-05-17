<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Destination Add</h3>
            </div>
            <?php echo form_open('destination/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="DestinationTitle" class="control-label">DestinationTitle</label>
						<div class="form-group">
							<input type="text" name="DestinationTitle" value="<?php echo $this->input->post('DestinationTitle'); ?>" class="form-control" id="DestinationTitle" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DestinationDetails" class="control-label">DestinationDetails</label>
						<div class="form-group">
							<textarea name="DestinationDetails" class="form-control" id="DestinationDetails"><?php echo $this->input->post('DestinationDetails'); ?></textarea>
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