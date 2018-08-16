<?php 
   // section service
   global $allowedposttags,$alchem_home_animation;
   $section_hide    = absint(alchem_option('section_2_hide',0));
   $content_model   = absint(alchem_option('section_2_model',0));
   $section_id      = esc_attr(sanitize_title(alchem_option('section_2_id')));
   $section_color   = esc_attr(alchem_option('section_2_color'));
   $section_title   = wp_kses(alchem_option('section_2_title'), $allowedposttags);
   $sub_title       = wp_kses(alchem_option('section_2_sub_title'), $allowedposttags);
   $section_content = wp_kses(alchem_option('section_2_content'), $allowedposttags);
   $columns         = absint(alchem_option('section_2_columns',3));
   $col             = $columns>0?12/$columns:4;
   
   $section_content = str_replace('\\\'','\'',$section_content);
   $section_content = str_replace('\\"','"',$section_content);
   
   $section_class = 'section magee-section alchem-home-section-2 alchem-home-style-3';
   if( alchem_option('section_2_parallax') == '1' )
   $section_class .= ' parallax-scrolling';
 ?> 
 <?php if( $section_hide != '1' ):?>
  <section class="<?php echo $section_class;?>" id="<?php echo $section_id;?>">
  <div class="section-content" style="color:<?php echo $section_color;?>;">
  <div class="container alchem_section_2_model">
  <?php if( $content_model == 0 ):?>
  <?php if( $section_title != '' ):?>
<h1 class="magee-heading section-title">
<span class="heading-inner alchem_section_2_title"><?php echo $section_title;?></span>
</h1>
<div class=" divider divider-title divider-border center">
  <div class="divider-inner divider-border"></div>
</div>
<p class="section-subtitle alchem_section_2_sub_title"><?php echo do_shortcode($sub_title);?></p>
<div style="height:60px;"></div>

<?php endif;?>
<?php
	 $feature_item = '';
	 $feature_str  = '';
	 $colors = array('#faca87','#2d828d','#8ed7c4','#fce9c7','#fb606c','#e53a31');
	 for( $j=0; $j<6; $j++ ){
	   
	  $feature_icon    =  esc_attr(alchem_option('section_2_feature_icon_'.$j));
	  $feature_icon    =  str_replace('fa-','',$feature_icon );
	  $feature_image   =  esc_attr(alchem_option('section_2_feature_image_'.$j));
	  $feature_title   =  esc_attr(alchem_option('section_2_feature_title_'.$j));
	  $feature_content =  wp_kses(alchem_option('section_2_feature_content_'.$j), $allowedposttags);
	  $link            =  esc_url(alchem_option('section_2_link_'.$j));
	  $target          =  esc_attr(alchem_option('section_2_target_'.$j));
	  if( $feature_icon !='' || $feature_image !='' || $feature_title!='' || $feature_content!='' ):
	  if( $link == "" )
	  $title = '<h3 style="color:'.$colors[$j].'">'.$feature_title.'</h3>';
	  else
	  $title = '<a href="'.$link.'" target="'.$target.'"><h3 style="color:'.$colors[$j].'">'.$feature_title.'</h3></a>';
	  
	  $icon = '';
	  $addclass        = '';
	  if( $feature_image !='' ){
	  $icon  = '<img class="feature-box-icon" src="'.$feature_image.'" alt="" />';
	  $addclass = 'alchem_section_2_feature_image_'.$j;
	  }else{
	  $icon  = '<i class="feature-box-icon fa fa-'.$feature_icon.'"></i>';
	  $addclass = 'alchem_section_2_feature_icon_'.$j;
	  }
	  $align = ( $j%2 == 0 )?'reverse':'';
	
      
	  $feature_item .= '<div class="col-md-6">
	  <div class="'.$alchem_home_animation.'" data-animationduration="0.9" data-animationtype="fadeIn" data-imageanimation="no">
	  <div class="magee-feature-box style2 '.$align.'" data-os-animation="fadeOut">
		<div class="icon-box  icon-circle '.$addclass.'" data-animation="rubberBand" style="border-color: '.$colors[$j].';background-color: '.$colors[$j].';"> '.$icon.'</div>
		<span class="alchem_section_2_feature_title_'.$j.'">'.$title.'</span>
		<div class="feature-content">
		  <p class="alchem_section_2_feature_content_'.$j.'">'.do_shortcode($feature_content).'</p>
		  <a href="'.$link.'" target="'.$target.'" class="feature-link"></a>
		  </div>
		  </div>
		  </div>
	  </div>';
	  $k = $j+1;
	  if( $k % 2 == 0 ){
	        $feature_str .= '<div class="row">'.$feature_item.'</div>';
	        $feature_item = '';
	   }
	   endif;

	 }
	 if( $feature_item != '' ){
		    $feature_str .= '<div class="row">'.$feature_item.'</div>';
	      
		   }
	 echo $feature_str;
 ?>

 <?php else:?>
 <?php echo do_shortcode($section_content);?>
 <?php endif;?>
  </div>
  </div>
</section>
<?php endif;?>