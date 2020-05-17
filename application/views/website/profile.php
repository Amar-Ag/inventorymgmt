<style>
    {
        box-sizing: border-box
    ;
    }

    /*body {*/
    /*    font-family: Arial, Helvetica, sans-serif;*/
    /*}*/

    /* Float four columns side by side */
    .column {
        float: left;
        width: 25%;
        padding: 0 10px;
    }

    /* Remove extra left and right margins, due to padding in columns */
    .row {
        margin: 0 -5px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Style the counter cards */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
        padding: 16px;
        text-align: center;
        background-color: #f1f1f1;
    }

    /* Responsive columns - one column layout (vertical) on small screens */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
    }
</style>

<section class="content-area">
    <div class="container">
        <div class="userprofile">
            <div class="row">
                <h1 class="heading_primary">Welcome, <?php echo $this->session->userdata('FirstName') ?></h1>
                <div class="row">
                    <div class="column">
                        <a href="<?php echo site_url('user/edit/'.$this->session->userdata('UserId')); ?>" ><div class="card" style="background-color: #00c0ef;color:#FFF">
                            <p class="card-text"><b>Edit Profile</b></p>
                        </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card" style="background-color: #eea236;color:#FFF;">
                            <p class="card-text">See Destinations</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card" style="background-color:#00CC00;color:#FFF;>
                            <p class="card-text">Saved Plans</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--        </div>-->
    </div>
</section>