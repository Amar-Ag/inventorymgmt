<section class="content-area">
    <div class="container">
        <div class="row">
            <div class="site-main col-sm-12 full-width">
                <div class="sc-gallery wrapper_gallery">

                    <div class="row content_gallery">
                        <?php foreach($destination as $d)
                        {
                        ?>
                        <div class="col-sm-4 gallery_item-wrap iinstructional swimbaits">
                            <a href="<?php echo base_url()?>website/activities/<?php echo $d['DestinationId']?>" class="swipebox" title="Love advice from experts">
                                <img src="images/tour-2.jpg" alt="Love advice from experts">
                                <div class="gallery-item"><h4 class="title"><?php echo $d['DestinationTitle']?></h4></div>
                            </a></div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>