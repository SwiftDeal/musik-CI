 <div class="row">
 	<div class="col-xs-12">
 	<div class="box box-primary">
	    <!-- form start -->
		 <form role="form" method="POST" accept-charset="UTF-8">
		 	<div class="box-body">
			  <div class="form-group col-md-12">
			    <label >Website Title</label>
			    <input name="title" type="text" class="form-control" placeholder="" value="<?php echo htmlentities($this->config->item("title"), ENT_QUOTES, "UTF-8"); ?>">
			  </div>
			  <div class="form-group col-md-12">
			    <label >Website Brand</label>
			    <input name="brand"  type="text" class="form-control" placeholder="" value="<?php echo htmlentities($this->config->item("brand"), ENT_QUOTES, "UTF-8"); ?>">
			  </div>
			  <div class="form-group col-md-12">
			    <label >Website Description</label>
			    <input  name="description" type="text" class="form-control" placeholder="" value="<?php echo htmlentities($this->config->item("description"), ENT_QUOTES, "UTF-8"); ?>">
			  </div>  
			  <div class="form-group col-md-12">
			    <label >Keywords</label>
			    <input  data-role="tagsinput" name="meta_keywords" type="text" class="form-control" placeholder="" value="<?php echo $this->config->item("meta_keywords"); ?>">
			  </div>  
			  <!--<div class="form-group col-md-12">
			    <label >Banned Artist</label>
			    <input  data-role="tagsinput" name="banned_artist" type="text" class="form-control" placeholder="" value="<?php echo $this->config->item("banned_artist"); ?>">
			  </div>-->
			   <div class="form-group col-md-6">
			    <label >Last FM API</label>  <small class="pull-right"><a href="http://support.jodacame.com/knowledge-base/get-last-fm-api-key" target="_blank">Get my API Key</a></small>
			    <input  required name="lastfm" type="text" class="form-control" placeholder="Add your Last.fm API Here" value="<?php echo $this->config->item("lastfm"); ?>">
			    
			  </div> 
			  <div class="form-group col-md-6">
			    <label >Youtube Api Key</label>  <small class="pull-right"><a href="https://console.developers.google.com/project" target="_blank">Get my API Key</a></small>
			    <input  name="youtube_api_key" type="text" class="form-control" placeholder="" value="<?php echo $this->config->item("youtube_api_key"); ?>">
			    
			  </div> 
			    <div class="form-group col-md-6">
			    <label >Proxy</label>
			    <input  name="proxy" type="text" class="form-control" placeholder="IP_ADDRESS:PORT" value="<?php echo $this->config->item("proxy"); ?>">
			    
			  </div>    

			  <div class="form-group col-md-6">
			    <label >Youtube Method</label> <i class="fa fa-info-circle pull-right" style="cursor:help" title="Change this if you get error restriction / Only Youtube v2 API"></i>
			      <select name="youtube_method" class="form-control">
				    	<option <?php if($this->config->item("youtube_method") == '1'){ echo "selected"; } ?> value="1">1</option>
				    	<option <?php if($this->config->item("youtube_method") == '2'){ echo "selected"; } ?> value="2">2</option>
				    	<option <?php if($this->config->item("youtube_method") == '3'){ echo "selected"; } ?> value="3">3</option>		    	
			    	</select>			    
			  </div> 

			  <div class="form-group col-md-6">
			    <label >Youtube API Version</label> 
			      <select name="youtube_api_version" class="form-control">
				    	<option <?php if($this->config->item("youtube_api_version") == 'v2'){ echo "selected"; } ?> value="v2">Version 2</option>
				    	<option <?php if($this->config->item("youtube_api_version") == 'v3'){ echo "selected"; } ?> value="v3">Version 3 (Beta)</option>				    	
			    	</select>			    
			  </div> 


			  

			   <div class="form-group col-md-6">
			    <label >Google Webmasters Verification Code</label>
			    <input  name="gwebmaster" type="text" class="form-control" placeholder="" value="<?php echo $this->config->item("gwebmaster"); ?>">
			  </div>


			  <div class="form-group col-md-6">
			    <label >Google Analitycs Tracking Code</label>
			    <small class="pull-right"><a href="https://support.google.com/analytics/answer/1032385?hl=en">Find your tracking code</a></small>
			    <input  name="ga" type="text" class="form-control" placeholder="UA-XXXXXX-XX" value="<?php echo $this->config->item("ga"); ?>">
			  </div>

			  <div class="form-group col-md-6">
			    <label >Allow User Registration</label>
			    <select name="registration" class="form-control">
			    	<option <?php if($this->config->item("registration") == '1'){ echo "selected"; } ?> value="1">On</option>
			    	<option <?php if($this->config->item("registration") != '1'){ echo "selected"; } ?> value="0">Off</option>		    	
			    </select>
			  </div> 
			 

			  <div class="form-group col-md-6">
			    <label >Activity Module</label>
			    <select name="activity_module" class="form-control">
			    	<option <?php if($this->config->item("activity_module") == '1'){ echo "selected"; } ?> value="1">On</option>
			    	<option <?php if($this->config->item("activity_module") != '1'){ echo "selected"; } ?> value="0">Off</option>		    	
			    </select>
			  </div> 
			
			<div class="form-group col-md-6">
			    <label >Local Lyrics Module</label>
			    <select name="local_lyrics" class="form-control">
			    	<option <?php if($this->config->item("local_lyrics") == '1'){ echo "selected"; } ?> value="1">On</option>
			    	<option <?php if($this->config->item("local_lyrics") != '1'){ echo "selected"; } ?> value="0">Off</option>		    	
			    </select>
			  </div> 			

			  <div class="form-group col-md-6">
			    <label >Remote Lyrics Module</label><i class="fa fa-info-circle pull-right" style="cursor:help" title="Required Valid Purchase Code"></i>
			    <select name="remote_lyrics_service" class="form-control">
			    	<option <?php if($this->config->item("remote_lyrics_service") == '1'){ echo "selected"; } ?> value="1">On</option>
			    	<option <?php if($this->config->item("remote_lyrics_service") != '1'){ echo "selected"; } ?> value="0">Off</option>		    	
			    </select>
			  </div> 

			   <div class="form-group col-md-6">
			    <label >Users Online Module</label>
			    <select name="module_user_online" class="form-control">
			    	<option <?php if($this->config->item("module_user_online") == '1'){ echo "selected"; } ?> value="1">On</option>
			    	<option <?php if($this->config->item("module_user_online") != '1'){ echo "selected"; } ?> value="0">Off</option>		    	
			    </select>
			  </div>

			  <div class="form-group col-md-6">
			    <label >Local Artist Module (Cache Database)</label>
			    <select name="local_artist" class="form-control">
			    	<option <?php if($this->config->item("local_artist") == '1'){ echo "selected"; } ?> value="1">On</option>
			    	<option <?php if($this->config->item("local_artist") != '1'){ echo "selected"; } ?> value="0">Off</option>		    	
			    </select>
			  </div>

			   <div class="form-group col-md-6">
			    <label >Remote Artist Module</label> <i class="fa fa-info-circle pull-right" style="cursor:help" title="Auto download information artist into your database"></i>
			    <select name="remote_artist" class="form-control">
			    	<option <?php if($this->config->item("remote_artist") == '1'){ echo "selected"; } ?> value="1">On</option>
			    	<option <?php if($this->config->item("remote_artist") != '1'){ echo "selected"; } ?> value="0">Off</option>		    	
			    </select>
			  </div>




			  <div class="form-group col-md-6">
			    <label >Cache</label>
			    <select name="use_cache" class="form-control">
			    	<option <?php if($this->config->item("use_cache") == '1'){ echo "selected"; } ?> value="1">On</option>
			    	<option <?php if($this->config->item("use_cache") != '1'){ echo "selected"; } ?> value="0">Off</option>		    	
			    </select>
			  </div>  
			   <?php
			    if(exec('echo EXEC') == 'EXEC'){
				    ?>
			  <div class="form-group col-md-6">
			    <label >Auto Clean Cache Folder</label>
			   
				    <select  name="clean_cache" class="form-control">
				    <option <?php if($this->config->item("clean_cache") == '0'){ echo "selected"; } ?> value="0"> Never</option>
				    <?php for($x=5;$x<=90;$x=$x+5){
				    	?>
				    	<option <?php if($this->config->item("clean_cache") == $x){ echo "selected"; } ?> value="<?php echo $x; ?>"><?php echo $x; ?> Days</option>
				    	<?php
				    }
				    ?>
				    </select>

				
			    
			  </div>
			    <?php
				}
				?>
				
			   <div class="form-group col-md-6">
			    <label >Language Default</label>
			    <select name="lang" class="form-control">
			    <?php
			    $this->load->helper('directory');
			    $langs = directory_map('./application/language');
			    foreach ($langs as $key => $value) {
			    	?>
			    	<option <?php if($key == $this->config->item("lang")){ echo "selected";} ?> value="<?php echo $key; ?>"><?php echo ucfirst($key); ?></option>
			    	<?php
			    }
			    ?>
			    </select>			    
			  </div>


			  <div class="form-group col-md-6">
			    <label >Detect Language Browser</label>
			    <select name="language_browser" class="form-control">
			    	<option <?php if($this->config->item("language_browser") == '1'){ echo "selected"; } ?> value="1">On</option>
			    	<option <?php if($this->config->item("language_browser") != '1'){ echo "selected"; } ?> value="0">Off</option>		    	
			    </select>
			  </div>


			  		   
			  <div class="form-group col-md-6">
			    <label >Amazon Affiliate</label>
			    <input name="amazon_afiliate" type="text" class="form-control" placeholder="" value="<?php echo $this->config->item("amazon_afiliate"); ?>">
			  </div> 
			  <div class="form-group col-md-6">
			    <label >Amazon Site</label>
			    <input name="amazon_site" type="text" class="form-control" placeholder="" value="<?php echo $this->config->item("amazon_site"); ?>">
			  </div>
			  <div class="form-group col-md-6">
			    <label >iTunes Affiliate</label>
			    <input name="itunes_afiliate" type="text" class="form-control" placeholder="" value="<?php echo $this->config->item("itunes_afiliate"); ?>">
			  </div> 
			  <div class="form-group col-md-6">
			    <label >iTunes Country Code</label>
			    <small class="pull-right"><a href="http://support.jodacame.com/knowledge-base/where-i-can-get-the-itunes-code-country">Get Code</a></small>
			    
			    <input name="itunes_country" type="text" class="form-control" placeholder="" value="<?php echo $this->config->item("itunes_country"); ?>">
			  </div>
			 
			  <div class="form-group col-md-6">
			    <label ><?php echo ___("admin_auto_country"); ?></label>
			    <select name="auto_country" class="form-control">
			    	<option <?php if($this->config->item("auto_country") == '1'){ echo "selected"; } ?> value="1">On</option>
			    	<option <?php if($this->config->item("auto_country") != '1'){ echo "selected"; } ?> value="0">Off</option>		    	
			    </select>
			  </div>

			   <div class="form-group col-md-6">
			    <label >Database Language Module</label>
			    <select name="use_db_language" class="form-control">
			    	<option <?php if($this->config->item("use_db_language") == '1'){ echo "selected"; } ?> value="1">On</option>
			    	<option <?php if($this->config->item("use_db_language") != '1'){ echo "selected"; } ?> value="0">Off</option>		    	
			    </select>
			  </div>

			   <div class="form-group col-md-6">
			    <label >Biography Language Default</label><i class="fa fa-info-circle pull-right" style="cursor:help" title="Only for Guest Users"></i>
			    <select name="biography_lang" class="form-control">
			    	<option <?php if($this->config->item("biography_lang_temp") == 'zh'){ echo "selected"; } ?> value="zh">Chinese</option>
			    	<option <?php if($this->config->item("biography_lang_temp") == 'de'){ echo "selected"; } ?> value="de">German</option>
			    	<option <?php if($this->config->item("biography_lang_temp") == 'fr'){ echo "selected"; } ?> value="fr">French</option>
			    	<option <?php if($this->config->item("biography_lang_temp") == 'it'){ echo "selected"; } ?> value="it">Italian</option>
			    	<option <?php if($this->config->item("biography_lang_temp") == 'pt'){ echo "selected"; } ?> value="pt">Portuguese</option>
			    	<option <?php if($this->config->item("biography_lang_temp") == 'ru'){ echo "selected"; } ?> value="ru">Russian</option>
			    	<option <?php if($this->config->item("biography_lang_temp") == 'es'){ echo "selected"; } ?> value="es">Spanish</option>
			    	<option <?php if($this->config->item("biography_lang_temp") == 'en'){ echo "selected"; } ?> value="en">English</option>
			    </select>
			  </div>

			  <div class="form-group col-md-6">
			    <label ><?php echo ___("admin_custom_video_error"); ?></label>
			    <input name="custom_video_error"  type="text" class="form-control" placeholder="" value="<?php echo $this->config->item("custom_video_error"); ?>">
			    <span class="inline-helper">
			    <small>Example: https://www.youtube.com/watch?v=<span class='text-danger'>UzatNVbmL6k</span></small>
			    </span>
			  </div>	  
			  <div class="form-group col-md-6">
			    <label >Service Download MP3 Youtube</label>
			    <input name="download_service"  type="text" class="form-control" placeholder="http://youtube.andthemusic.net/?url=%youtube_url%" value="<?php echo $this->config->item("download_service"); ?>">
			    <span class="inline-helper">
			  	<small>Available Tags: %youtube_url% %youtube_video%</small>
			    </span>
			  </div> 
			  <div class="form-group col-md-6">
			    <label >Mobile Redirect To</label>
			    <input name="mobile_redirect"  type="text" class="form-control" placeholder="<?php echo base_url(); ?>my_custom_page" value="<?php echo $this->config->item("mobile_redirect"); ?>">			    
			  </div>
			  
			   <div class="form-group col-md-6">
			    <label ><?php echo ___("admin_limit_activity_page"); ?></label>
			    <select name="limit_activity_page"  class="form-control">
			    	<?php for($x=1;$x<=250;$x++){ ?>
			    	<option <?php if($this->config->item("limit_activity_page") == $x){ echo "selected"; } ?> value="<?php echo $x; ?>"><?php echo $x; ?></option>
			    	<?php } ?>
			    	
			    </select>
			  </div>  

			  <div class="form-group col-md-6">
			    <label >Limit Activity Items Profile Page</label>  <i class="fa fa-info-circle pull-right" style="cursor:help" title="Only on Musik Extended Module"></i>
			    <select name="limit_activity_profile"  class="form-control">
			    	<?php for($x=1;$x<=250;$x++){ ?>
			    	<option <?php if($this->config->item("limit_activity_profile") == $x){ echo "selected"; } ?> value="<?php echo $x; ?>"><?php echo $x; ?></option>
			    	<?php } ?>
			    	
			    </select>
			  </div>  
			  <div class="form-group col-md-6">
			    <label >Max Time Song</label>  
			    <select name="max_time_player"  class="form-control">
			    	<?php for($x=3;$x<=120;$x++){ ?>
			    	<option <?php if($this->config->item("max_time_player") == ($x*60)){ echo "selected"; } ?> value="<?php echo ($x*60); ?>"><?php echo $x; ?> Minutes</option>
			    	<?php } ?>
			    	
			    </select>
			  </div>  

			   <div class="form-group col-md-12">
			    <label ><?php echo ___("admin_footer_text"); ?></label>
			    <textarea name="footer_text"  class="form-control" style="width:100%;min-height:100px" placeholder=""><?php echo htmlentities($this->config->item("footer_text"), ENT_QUOTES, "UTF-8"); ?></textarea>
			  </div>

			  <div class="form-group col-md-12">
			    <label >Footer Script</label>
			    <textarea   class="form-control" name="footer_script" placeholder="You can add custom javascript code here" style="width:100%;min-height:100px"><?php echo htmlentities($this->config->item("footer_script"), ENT_QUOTES, "UTF-8"); ?></textarea>
			  </div>  

			  <div class="form-group col-md-12">
			    <label >Page Ajax Script</label>
			    <textarea   class="form-control" name="page_ajax_script" placeholder="You can add custom javascript or code here, this is loaded when ajax event in any page" style="width:100%;min-height:100px"><?php echo htmlentities($this->config->item("page_ajax_script")); ?></textarea>
			  </div> 
			 </div>
			 <div class="clearfix"></div>
			      <div class="box-footer">
		            <button type="submit" class="btn btn-primary" style="width:100%">Save</button>
		        </div>
			</form>
		</div>
	</div>
</div>
