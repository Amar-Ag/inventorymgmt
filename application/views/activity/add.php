<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Activity Add</h3>
            </div>
                <?php echo form_open('activity/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="DestinationId" class="control-label">Destination Id</label>
						<div class="form-group">
                            <select name="DestinationId" class="form-control">
                                <?php foreach($destination as $d)
                                {
                                    ?>

                                    <option value="<?php echo $d['DestinationId']?>"><?php echo $d['DestinationTitle']?></option>
                                <?php } ?>
                            </select>
                        </div>
					</div>
					<div class="col-md-6">
						<label for="ActivityTitle" class="control-label">Activity Title</label>
						<div class="form-group">
							<input type="text" name="ActivityTitle" value="<?php echo $this->input->post('ActivityTitle'); ?>" class="form-control" id="ActivityTitle" />
						</div>
					</div>
                    <div class="col-md-6">
                        <label for="ActivityDescription" class="control-label">Activity Description</label>
                        <div class="form-group">
                            <textarea name="ActivityDescription" class="form-control" id="ActivityDescription"><?php echo $this->input->post('ActivityDescription'); ?></textarea>
                        </div>
                    </div>
					<div class="col-md-12">
						<label for="ActivityPreferences" class="control-label">Activity Preferences</label>
						<div class="form-group">
<!--							<input type="text" name="ActviityPreferences" value="--><?php //echo $this->input->post('ActviityPreferences'); ?><!--" class="form-control" id="ActviityPreferences" />-->
                            <div class="interests-wrap clearfix">
                                <div class="col-sm-2">
                                    <label title="Culture" for="home-interestCulture">Culture</label>
                                    <select name="culture" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0" selected>No</option>
                                    </select>

                                </div>
                                <div class="col-sm-2">
                                    <label title="Outdoors" for="home-interestOutdoor">Outdoors</label>
                                    <select name="outdoors"  class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0" selected>No</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <label title="Romantic" for="home-interestRomantic">Romantic</label>
                                    <select name="romantic"  class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0" selected>No</option>
                                    </select>

                                    </div>
                                <div class="col-sm-2">
                                    <label title="Child Friendly" for="home-category10">Child Friendly</label>
                                    <select name="childFriendly"  class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0" selected>No</option>
                                    </select>
                                    </div>
                                <div class="col-sm-2">
                                    <label title="Elderly Friendly" for="home-category16">Elderly Friendly</label>
                                    <select name="elderFriendly"  class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0" selected>No</option>
                                    </select>
                                    </div>
                            </div>
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