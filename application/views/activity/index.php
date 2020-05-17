<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Activities Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('activity/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Acitivity Id</th>
                        <th>Destination</th>
                        <th>Activity Title</th>
                        <th>Is Active</th>
                        <th>Created By</th>
                        <th>Activity Description</th>
                        <th>Child Friendly</th>
                        <th>Romantic</th>
                        <th>Culture</th>
                        <th>Outdoor</th>
                        <th>Elder Friendly</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($activities as $a) { ?>
                        <tr>
                            <td><?php echo $a['AcitivityId']; ?></td>

                            <td>
                                <?php foreach ($destination as $d) { ?>
                                    <?php if ($d['DestinationId'] == $a['DestinationId']) echo $d['DestinationTitle'];
                                } ?>
                            </td>

                            <td><?php echo $a['ActivityTitle']; ?></td>
                            <td><?php echo $a['IsActive']; ?></td>
                            <td><?php echo $a['CreatedBy']; ?></td>
                            <td><?php echo $a['ActivityDescription']; ?></td>
                            <td><?php echo $a['ChildFriendly']; ?></td>
                            <td><?php echo $a['Romantic']; ?></td>
                            <td><?php echo $a['Culture']; ?></td>
                            <td><?php echo $a['Outdoor']; ?></td>
                            <td><?php echo $a['ElderFriendly']; ?></td>
                            <?php
                            if ($this->session->userdata('UserId') == $a['CreatedBy']) {
                                ?>
                                <td>
                                    <a href="<?php echo site_url('activity/edit/' . $a['AcitivityId']); ?>"
                                       class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                    <a href="<?php echo site_url('activity/remove/' . $a['AcitivityId']); ?>"
                                       class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>
