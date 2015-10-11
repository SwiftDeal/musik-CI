<div class="row row-sm padder-lg ">
    <?php 
        if(!$page)
            echo $this->load->view("templates/common/_carousel",false,true); ?>
    <?php if($this->config->item("ads_refresh") == '1'){ ?>
    <div class="adsblock text-center"><?php if(!$hide_ads){ echo $this->config->item("ads_block"); } ?></div><br><br>
    <?php } ?>
    <h2 class="font-thin m-b"><?php echo ___("label_top_tracks"); ?> <?php echo getCountry(); ?>   
        <span class="musicbar animate inline m-l-sm" style="width:20px;height:20px">
            <span class="bar1 a1 bg-primary lter"></span>
            <span class="bar2 a2 bg-info lt"></span>
            <span class="bar3 a3 bg-success"></span>
            <span class="bar4 a4 bg-warning dk"></span>
            <span class="bar5 a5 bg-danger dker"></span>
        </span>
    </h2>
    <br>

        <?php
        foreach ($top->tracks->track as $key => $value) 
        {
            if($key >= $this->config->item("items_top"))
                return false;
            $image = $value->image[3]->text;
                if($image == '')
            $image = $value->image[2]->text;
                if($image == '')
            $image = base_url()."assets/images/no-cover.png";
        ?>		
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            <div class="item">
                <div class="pos-rlt">
                    <div class="item-overlay opacity r r-2x bg-black">
                        <div class="center text-center m-t-n">
                            <a onclick="addPlayList('<?php echo addslashes($value->name); ?>','<?php echo addslashes($value->artist->name); ?>','<?php echo $image; ?>',true);"  href="#"><i class="icon-control-play i-2x"></i></a>
                        </div>
                        <div class="bottom padder m-b-sm">
                            <a href="#" onclick="start_radio('<?php echo addslashes($value->name); ?>','<?php echo addslashes($value->artist->name); ?>','<?php echo $image; ?>')" class="pull-right">
                                <i class="fa fa-rss"></i>
                            </a>
                            <a href="#" onclick="addPlayList('<?php echo addslashes($value->name); ?>','<?php echo addslashes($value->artist->name); ?>','<?php echo $image; ?>',false);">
                                <i class="fa fa-plus-circle"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#">
                        <div class="r r-2x img-full" style="background:url('<?php echo $image; ?>') no-repeat top center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">
                            <div style="height:180px;overflow:hidden;"></div>
                        </div>
                    </a>
                </div>
                <div class="padder-v">
                    <a href="#" class="text-ellipsis" onclick="getSongInfo('<?php echo addslashes($value->artist->name); ?>','<?php echo addslashes($value->name); ?>');"><?php echo $value->name; ?></a>
                    <a href="#" class="text-ellipsis text-xs text-muted"  onClick="getArtistInfo('<?php echo $value->artist->name; ?>');" title=<?php echo ___("label_get_artist_info"); ?>><?php echo $value->artist->name; ?></a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
  
    <script>
    $(".nav-sidebar li").removeClass("active");
    $("#topTrack").addClass('active');
    </script>
</div>