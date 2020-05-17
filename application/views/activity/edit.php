<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Activity Edit</h3>
            </div>
			<?php echo form_open('activity/edit/'.$activity['AcitivityId']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="DestinationId" class="control-label">Destination Id</label>
						<div class="form-group">
                            <select name="DestinationId" class="form-control">
                                <?php foreach($destination as $d)
                                {
                                ?>
<!--							<input type="text" name="DestinationId" value="--><?php //echo ($this->input->post('DestinationId') ? $this->input->post('DestinationId') : $activity['DestinationId']); ?><!--" class="form-control" id="DestinationId" />-->
                                    <option <?php if($d['DestinationId'] == $activity['DestinationId']){echo 'selected';}?> value="<?php echo $d['DestinationId']?>" ><?php echo $d['DestinationTitle']?></option>
                                <?php } ?>
                            </select>
                        </div>
					</div>
					<div class="col-md-6">
						<label for="ActivityTitle" class="control-label">Activity Title</label>
						<div class="form-group">
							<input type="text" name="ActivityTitle" value="<?php echo ($this->input->post('ActivityTitle') ? $this->input->post('ActivityTitle') : $activity['ActivityTitle']); ?>" class="form-control" id="ActivityTitle" />
						</div>
					</div>
                    <div class="col-md-6">
                        <label for="ActivityDescription" class="control-label">ActivityDescription</label>
                        <div class="form-group">
                            <textarea name="ActivityDescription" class="form-control" id="ActivityDescription"><?php echo ($this->input->post('ActivityDescription') ? $this->input->post('ActivityDescription') : $activity['ActivityDescription']); ?></textarea>
                        </div>
                    </div>
					<div class="col-md-12">
						<label for="ActviityPreferences" class="control-label">ActviityPreferences</label>
						<div class="form-group">
<!--							<input type="text" name="ActviityPreferences" value="--><?php //echo ($this->input->post('ActviityPreferences') ? $this->input->post('ActviityPreferences') : $activity['ActviityPreferences']); ?><!--" class="form-control" id="ActviityPreferences" />-->
                            <div class="col-sm-2">
                                <label title="Culture" for="home-interestCulture">Culture</label>
                                <select name="culture" class="form-control">
                                    <option value="1" <?php if($activity['Culture']==1) {echo "selected";}?>>Yes</option>
                                    <option value="0" <?php if($activity['Culture']==0) {echo "selected";}?>>No</option>
                                </select>

                            </div>
                            <div class="col-sm-2">
                                <label title="Outdoors" for="home-interestOutdoor">Outdoors</label>
                                <select name="outdoors"  class="form-control">
                                    <option value="1" <?php if($activity['Outdoor']==1) {echo "selected";}?>>Yes</option>
                                    <option value="0" <?php if($activity['Outdoor']==0) {echo "selected";}?>>No</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <label title="Romantic" for="home-interestRomantic">Romantic</label>
                                <select name="romantic"  class="form-control">
                                    <option value="1" <?php if($activity['Romantic']==1) {echo 'selected';}?>>Yes</option>
                                    <option value="0" <?php if($activity['Romantic']==0) {echo 'selected';}?>>No</option>
                                </select>

                            </div>
                            <div class="col-sm-2">
                                <label title="Child Friendly" for="home-category10">Child Friendly</label>
                                <select name="childFriendly"  class="form-control">
                                    <option value="1" <?php if($activity['ChildFriendly']==1) {echo "selected";}?>>Yes</option>
                                    <option value="0" <?php if($activity['ChildFriendly']==0) {echo "selected";}?>>No</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <label title="Elderly Friendly" for="home-category16">Elderly Friendly</label>
                                <select name="elderFriendly"  class="form-control">
                                    <option value="1" <?php if($activity['ElderFriendly']==1) {echo "selected";}?>>Yes</option>
                                    <option value="0" <?php if($activity['ElderFriendly']==0) {echo "selected";}?>>No</option>
                                </select>
                            </div>
                        </div>
					</div>


				</div>
			</div>
            <br>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>