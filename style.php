<?php 
$giris_bolumu_arka_plani = get_field('giris_bolumu_arka_plani');
$referanslar_bolumu_arka_plani = get_field('referanslar_bolumu_arka_plani');

?>
<style>
.arlo_tm_universal_box_wrap .overlay_image.hero,
.arlo_tm_universal_box_wrap.particle,
.arlo_tm_ripple_wrap,
.arlo_tm_intro_universal_bg_wrap .bg_wrap .overlay_image.top
{background-image: url(<?php echo $giris_bolumu_arka_plani['url'];?>);}
	
	
.arlo_tm_universal_box_wrap .overlay_image.testimonial
{background-image: url(<?php echo $referanslar_bolumu_arka_plani['url'];?>);}
		
</style>