<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Transportation Add</h3>
            </div>
            <?php echo form_open('transportation/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="ActivityID" class="control-label">Activity ID</label>
						<div class="form-group">
							<select name="ActivityID" class="form-control">
                                <?php foreach($activities as $a)
                                {
                                    ?>
                                    <option value="<?php echo $a['ActivityId']?>"><?php echo $a['ActivityTitle']?></option>
                                <?php } ?>
                            </select>
                        </div>
					</div>
					<div class="col-md-6">
						<label for="TransportTitle" class="control-label">Transport Title</label>
						<div class="form-group">
							<input type="text" name="TransportTitle" value="<?php echo $this->input->post('TransportTitle'); ?>" class="form-control" id="TransportTitle" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="TransportDetails" class="control-label">Transport Details</label>
						<div class="form-group">
							<textarea name="TransportDetails" class="form-control" id="TransportDetails"><?php echo $this->input->post('TransportDetails'); ?></textarea>
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