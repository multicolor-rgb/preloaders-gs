<?php

 
# get correct id for plugin
$thisfile=basename(__FILE__, ".php");
 
# register plugin
register_plugin(
	$thisfile, //Plugin id
	'preloaders (vanilla javascript)', 	//Plugin name
	'2.0', 		//Plugin version
	'Mateusz Skrzypczak',  //Plugin author
	'http://multicolor.stargard.pl', //author website
	'add great preloader animation to your website', //Plugin description
	'plugins', //page type - on which admin tab to display
	'preloader'  //main function (administration)
);
 
# activate filter 
add_action('theme-footer','preloaderscript'); 
add_action('theme-header','preloaderstyle'); 
add_action('theme-footer','preloaderstart'); 
 
# add a link in the admin tab 'theme'
add_action('plugins-sidebar','createSideMenu',array($thisfile,'Preloader settings'));
 
 function preloaderstyle(){
	 
	 echo'
	 <style>
	
	 #preload{
		 position:fixed;
		 top:0;
		 left:0;
		 height:100vh;
		 display:flex;
		 align-items:center;
		 justify-content:center;
		 width:100%;
background:#fff;
z-index:9999;
		opacity:1;
	transition:all 250ms linear;
	 }
	 #preload img{
	width:60px;
	height:60px;
	 }
	 
	 
	 .hidePreload{
	animation:hidepreload 1s 1 linear;
	animation-fill-mode:forwards;
	 }
	 
	 @keyframes hidepreload{
		from{
		opacity:1;
		}
		 
		to{
		opacity:0;
		}
		 }
	 </style>'
	 ;
	 
	 
 };
 
 
 function preloaderstart(){
	 	 include('preloaders/preloaderstart.php');

	 
 }
 
# functions
function preloaderscript() {
	
	
	 $plugin_id = 'preloaders';
 
// Set up the folder name and its permissions
// Note the constant GSDATAOTHERPATH, which points to /path/to/getsimple/data/other/
$folder        = GSDATAOTHERPATH . '/' . $plugin_id . '/';


	
	echo '
	
<script>

window.addEventListener("load", function (e){
setTimeout(
function(){

document.querySelector("#preload").classList.add("hidePreload");


},500
)
		  
setTimeout(
function(){
document.querySelector("#preload").style.display="none";

},700
)
		  
});
</script>
	';
}
 
function preloader() {
	
	
	
	
 $plugin_id = 'preloaders';
 
// Set up the folder name and its permissions
// Note the constant GSDATAOTHERPATH, which points to /path/to/getsimple/data/other/
$folder        = GSDATAOTHERPATH . '/' . $plugin_id . '/';
$preloadernumber  = $folder . 'preloadernumber.txt';
$chmod_mode    = 0755;
$folder_exists = file_exists($folder) || mkdir($folder, $chmod_mode);


	
	
	echo '
	
	
	<p style="font-size:20px;font-weight:bold;text-align:center;"> You are now use Preloader '.file_get_contents($preloadernumber).'</p>
	

	<br>
	
	<p style="font-size:15px;text-align:center;">choose preloader for your website:<br></p>
	 <form  action="#" style="margin:0 auto; width:100%" method="POST">
	<select name="preloaderchoose" class="preloaderchoose" style="width:100%;padding:10px;box-sizing:border-box;text-align:center;" >
	   <option value="1">Preloader 1</option>
		   <option value="2">Preloader 2</option>
		   	   <option value="3">Preloader 3</option>
			   	   <option value="4">Preloader 4</option>
				   	   <option value="5">Preloader 5</option>
					   	   <option value="6">Preloader 6</option>
						   	   <option value="7">Preloader 7</option>
	   <option value="8">Preloader 8</option>
	   <option value="9">Preloader 9</option>
	   <option value="10">Preloader 10</option>
	   <option value="11">Preloader 11</option>
	   <option value="12">Preloader 12</option>






	</select>
	<br>
	<br>
		<input type="submit" name="submit" class="submiter" style="margin:0 auto;display:block;background:#000;color:#fff;padding:10px;margin-top:10px;border:solid 0 ;border-radius:10px;"
		value="save settings" />
<br>
</form>





<br><br>

<style>
.boxer{text-align:center;padding:10px;box-sizing:border-box;margin:20px 0;}
.boxer img{max-width:100%;max-height:50px;}
.boxer-grid{width:100%;display:grid;margin:0 auto;grid-template-columns:repeat(4,1fr);}
@media(max-width:960px){
	.boxer{width:100%;}
	.boxer-grid{rid-template-columns:repeat(2,1fr);display:grid;}
}
</style>
	
	
	<div class="boxer-grid">
	<div class="boxer">
	<p><b>Preloader 1</b></p>
		<img src="../plugins/preloaders/img/1.svg">
		</div>
		
		<div  class="boxer">
	<p><b>Preloader 2</b></p>
		<img src="../plugins/preloaders/img/2.svg">
		</div>
			<div  class="boxer">
	<p><b>Preloader 3</b></p>
		<img src="../plugins/preloaders/img/3.svg">
		</div>
                                                                              
			<div  class="boxer">
	<p><b>Preloader 4</b></p>
		<img src="../plugins/preloaders/img/4.svg">
		</div>
		
			<div class="boxer">
	<p><b>Preloader 5</b></p>
		<img src="../plugins/preloaders/img/5.svg">
		</div>
		
	<div style="text-align:center;padding:10px;box-sizing:border-box;" class="boxer">
	<p><b>Preloader 6</b></p>
		<img src="../plugins/preloaders/img/6.svg">
		</div>
		
		
			<div style="text-align:center;padding:10px;box-sizing:border-box;" class="boxer">
	<p><b>Preloader 7</b></p>
		<img src="../plugins/preloaders/img/7.svg">
		</div>
		
		
			<div style="text-align:center;padding:10px;box-sizing:border-box;" class="boxer">
	<p><b>Preloader 8</b></p>
		<img src="../plugins/preloaders/img/8.svg">
		</div>
		
			<div style="text-align:center;padding:10px;box-sizing:border-box;" class="boxer">
	<p><b>Preloader 9</b></p>
		<img src="../plugins/preloaders/img/9.svg">
		</div>
		
			<div style="text-align:center;padding:10px;box-sizing:border-box;" class="boxer">
	<p><b>Preloader 10</b></p>
		<img src="../plugins/preloaders/img/10.svg">
		</div>
		
			<div style="text-align:center;padding:10px;box-sizing:border-box;" class="boxer">
	<p><b>Preloader 11</b></p>
		<img src="../plugins/preloaders/img/11.svg">
		</div>
		
			<div style="text-align:center;padding:10px;box-sizing:border-box;" class="boxer">
	<p><b>Preloader 12</b></p>
		<img src="../plugins/preloaders/img/12.svg">
		</div>
			</div>
		

		<div style="width:100%;text-align:center">
	
	Preloaders from <a href="http://freepreloaders.com/">freepreloaders.com</a> Plugin made by Mateusz Skrzypczak (multicolor)<br><br><br>
	You can change default preloaders, download own in svg format, and rename 1,2,3... or 6 and replace with default file on /plugins/preloaders/img/ folder
	</div>
	
<script>
document.querySelector(".preloaderchoose").value="'.file_get_contents($preloadernumber).'"
</script>
	';
	
	if(isset($_POST['submit'])){
$preloadernr = $_POST['preloaderchoose'];
  file_put_contents($preloadernumber , $preloadernr);
echo "<meta http-equiv='refresh' content='0'>";
}
}
?>