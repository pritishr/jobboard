<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr"
  xmlns:content="http://purl.org/rss/1.0/modules/content/"
  xmlns:dc="http://purl.org/dc/terms/"
  xmlns:foaf="http://xmlns.com/foaf/0.1/"
  xmlns:og="http://ogp.me/ns#"
  xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
  xmlns:sioc="http://rdfs.org/sioc/ns#"
  xmlns:sioct="http://rdfs.org/sioc/types#"
  xmlns:skos="http://www.w3.org/2004/02/skos/core#"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema#">

<head profile="http://www.w3.org/1999/xhtml/vocab">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta about="/home" property="sioc:num_replies" content="0" datatype="xsd:integer" />
<link rel="shortcut icon" href="http://www.team-bhp.com/misc/favicon.ico" type="image/vnd.microsoft.icon" />
<meta content="Home" about="/home" property="dc:title" />
<link rel="shortlink" href="/node/210" />
<meta name="Generator" content="Drupal 7 (http://drupal.org)" />
<link rel="canonical" href="/home" />
  <title>Home | Team-BHP - The Definitive Indian Car Website</title>
  <style type="text/css" media="all">@import url("http://www.team-bhp.com/modules/system/system.base.css?ndfhsk");
@import url("http://www.team-bhp.com/modules/system/system.menus.css?ndfhsk");
@import url("http://www.team-bhp.com/modules/system/system.messages.css?ndfhsk");
@import url("http://www.team-bhp.com/modules/system/system.theme.css?ndfhsk");</style>
<style type="text/css" media="all">@import url("http://www.team-bhp.com/modules/comment/comment.css?ndfhsk");
@import url("http://www.team-bhp.com/sites/all/modules/date/date_api/date.css?ndfhsk");
@import url("http://www.team-bhp.com/sites/all/modules/date/date_popup/themes/datepicker.1.7.css?ndfhsk");
@import url("http://www.team-bhp.com/modules/field/theme/field.css?ndfhsk");
@import url("http://www.team-bhp.com/modules/node/node.css?ndfhsk");
@import url("http://www.team-bhp.com/modules/search/search.css?ndfhsk");
@import url("http://www.team-bhp.com/modules/user/user.css?ndfhsk");
@import url("http://www.team-bhp.com/sites/all/modules/views/css/views.css?ndfhsk");</style>
<style type="text/css" media="all">@import url("http://www.team-bhp.com/sites/all/modules/ctools/css/ctools.css?ndfhsk");
@import url("http://www.team-bhp.com/sites/all/modules/teambhp_mod/css/teambhp_mod.css?ndfhsk");</style>
<style type="text/css" media="all">@import url("http://www.team-bhp.com/themes/bhp/css/layout.css?ndfhsk");
@import url("http://www.team-bhp.com/themes/bhp/css/style.css?ndfhsk");
@import url("http://www.team-bhp.com/themes/bhp/css/colors.css?ndfhsk");
@import url("http://www.team-bhp.com/themes/bhp/css/home.css?ndfhsk");
@import url("http://www.team-bhp.com/themes/bhp/css/rupees.css?ndfhsk");</style>
<style type="text/css" media="print">@import url("http://www.team-bhp.com/themes/bhp/css/print.css?ndfhsk");</style>
  <script type="text/javascript" src="http://www.team-bhp.com/misc/jquery.js?v=1.4.4"></script>
<script type="text/javascript" src="http://www.team-bhp.com/misc/jquery.once.js?v=1.2"></script>
<script type="text/javascript" src="http://www.team-bhp.com/misc/drupal.js?ndfhsk"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(document).ready(function () { test(); });
//--><!]]>
</script>
<script type="text/javascript" src="http://www.team-bhp.com/sites/all/modules/teambhp_mod/js/teambhp_mod.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/test%28%29?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/sites/all/modules/multiimage_mod/js/common.js?ndfhsk"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery(document).ready(function () { /*jQuery("form#gallery-images-node-form").find("label:contains('Alternate text')").each(function(i){ jQuery(this).text('Image Sequence'); jQuery(this).closest("div.form-item").find("div.description").text("Image sequence used to display images on overview page"); });*/ jQuery("#edit-field-spec-nr-engine-type-und-0-nid").live("change", function(){ var eId = jQuery(this).val(); var start = eId.indexOf("[")+5; var end = eId.indexOf("]")-(eId.indexOf("[")+5); jQuery.ajax({ type: "POST", url: "/themes/bhp/getTransmission.php", data: "eId="+eId.substr(start, end), success: function(data){	if(data!="") {  jQuery("#edit-field-spec-engine-transmission-und-0-value").val(data); jQuery("#edit-field-spec-engine-transmission-und-0-value").attr("readonly", "readonly"); jQuery("div.form-item-field-spec-engine-transmission-und-0-value").find("div.description").html("Transmission fetched from selected <strong>Engine</strong>"); } else { jQuery("#edit-field-spec-engine-transmission-und-0-value").val(""); jQuery("#edit-field-spec-engine-transmission-und-0-value").removeAttr("readonly"); jQuery("div.form-item-field-spec-engine-transmission-und-0-value").find("div.description").html("example <strong>6-speed Manual</strong>"); } } }); }); jQuery("#edit-field-gallery-model-und-0-nid").live("change", function(){ jQuery("form#gallery-images-node-form").find("#edit-title").val(jQuery("#autocomplete ul li.selected").text()); }); jQuery("#edit-field-gallery-model-und-0-nid").live("blur", function(){ var modelStr = jQuery("#edit-field-gallery-model-und-0-nid").val(); jQuery("form#gallery-images-node-form").find("#edit-title").val(modelStr.substr(0, modelStr.indexOf(" ["))); }); jQuery("#edit-field-nr-make-und-0-nid").live("change", function(){ jQuery("form#model-node-form").find("#edit-title").val(jQuery("#autocomplete ul li.selected").text()+" "); }); jQuery("#edit-field-nr-make-und-0-nid").live("blur", function(){ var modelStr = jQuery("#edit-field-nr-make-und-0-nid").val(); jQuery("form#model-node-form").find("#edit-title").val(modelStr.substr(0, modelStr.indexOf(" ["))+" "); }); jQuery("#edit-field-spec-nr-engine-type-und-0-nid").live("change blur", function(){ var modelText = jQuery("#autocomplete ul li.selected").text(); jQuery("form#specifications-node-form").find("#edit-title").val(modelText.substr(2, modelText.indexOf("]")-2)); }); jQuery("#edit-field-features-nr-variant-und-0-nid").live("change blur", function(){ var modelText = jQuery("#autocomplete ul li.selected").text(); jQuery("form#features-node-form").find("#edit-title").val(modelText.substr(2, modelText.indexOf(" -")-3)); }); jQuery("#edit-field-price-nr-variant-und-0-nid").live("change blur", function(){ var modelText = jQuery("#autocomplete ul li.selected").text(); jQuery("form#price-node-form").find("#edit-title").val(modelText.substr(2, modelText.indexOf(" -")-3)); }); jQuery("form#make-node-form").find("#edit-title").blur(function(){ var xhr; if(xhr) { xhr.abort(); } var make = jQuery(this).val(); xhr = jQuery.ajax({type: "POST",async: false, url: "/themes/bhp/includes/checkMake.php",data: "make="+make,success: function(data){ if(data==1){ if(jQuery("form#make-node-form").find("#duplicateMake").length==0) { jQuery("form#make-node-form").find("#edit-title").after("<span id=\"duplicateMake\" class=\"error\">&nbsp;&nbsp;Duplicate Entry</span>"); jQuery("form#make-node-form").attr("onSubmit", "alert(\"Duplicate Manufacturer's Name\"); return false;"); } } else { jQuery("form#make-node-form").find("#duplicateMake").remove(); jQuery("form#make-node-form").removeAttr("onSubmit"); } }}); }); /*jQuery("#edit-field-forum-model-und-0-nid").live("change blur", function(){ var modelText = jQuery("#autocomplete ul li.selected").text(); jQuery("form#forum-reviews-node-form").find("#edit-title").val(jQuery.trim(modelText.substr(modelText.indexOf(" - ")+4))); }); if(jQuery("#edit-field-news-tags-und").length>0){ jQuery("#edit-field-news-tags-und").closest(".form-item").find(".description").html("Use at least ONE of these tags: Launches & Updates, Industry & Policy, Scoops & Rumours, Commercial Vehicles, Sales & Analysis, 2-Wheels, Other, Motorsports. Use commas to separate each tag."); }*/ if(jQuery("#news-category-node-form").length>0){ jQuery("#news-category-node-form").find("#edit-title").closest(".form-item").append("<div class=\"description\">Select at least on of the following News Categories:<br />Launches & Updates, Industry & Policy, Scoops & Rumours, Commercial Vehicles, Sales & Analysis, 2-Wheels, Other, Motorsports</div>"); } });
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
var usersOnline; jQuery(function(){ usersOnline = jQuery("div#userContent").find("td").eq(1).text(); if(usersOnline.length>5) {usersOnline = usersOnline.substr(-5); } for(var i=0; i<usersOnline.length; i++){ jQuery("div.userCount").find("li").eq(i).text(usersOnline.substr(i, 1)); } jQuery("div.siteStats ul li:first").find("strong").text(jQuery("div#userContent").find("tr").eq(3).find("td").eq(1).text()); jQuery("div.siteStats ul li").eq(1).find("strong").text(jQuery("div#userContent").find("tr").eq(5).find("td").eq(1).text()); jQuery("div.siteStats ul li").eq(2).find("strong").text(jQuery("div#userContent").find("tr").eq(7).find("td").eq(1).text()); });
//--><!]]>
</script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/jquery-1.5.1.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/dd.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/pp.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/formValidation.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/jquery.jcarousel.min.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/jquery.cookie.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/jquery.corner.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/jquery.ui.core.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/jquery.ui.widget.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/jquery.lightbox.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/jquery.ui.accordion.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/jquery.ui.mouse.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/jquery.ui.slider.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/rounded.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/selectivizr.js?ndfhsk"></script>
<script type="text/javascript" src="http://www.team-bhp.com/themes/bhp/js/custom-form-elements.js?ndfhsk"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\u002F", "pathPrefix":"", "ajaxPageState":{"theme":"bhp", "theme_token":"sQqT0AWVWfAFLjxfvaUB98CpDOj9l7sdWMMGu-NDtOg", "js":{"misc\u002Fjquery.js":1, "misc\u002Fjquery.once.js":1, "misc\u002Fdrupal.js":1, "0":1, "sites\u002Fall\u002Fmodules\u002Fteambhp_mod\u002Fjs\u002Fteambhp_mod.js":1, "test()":1, "sites\u002Fall\u002Fmodules\u002Fmultiimage_mod\u002Fjs\u002Fcommon.js":1, "1":1, "2":1, "themes\u002Fbhp\u002Fjs\u002Fjquery-1.5.1.js":1, "themes\u002Fbhp\u002Fjs\u002Fdd.js":1, "themes\u002Fbhp\u002Fjs\u002Fpp.js":1, "themes\u002Fbhp\u002Fjs\u002FformValidation.js":1, "themes\u002Fbhp\u002Fjs\u002Fjquery.jcarousel.min.js":1, "themes\u002Fbhp\u002Fjs\u002Fjquery.cookie.js":1, "themes\u002Fbhp\u002Fjs\u002Fjquery.corner.js":1, "themes\u002Fbhp\u002Fjs\u002Fjquery.ui.core.js":1, "themes\u002Fbhp\u002Fjs\u002Fjquery.ui.widget.js":1, "themes\u002Fbhp\u002Fjs\u002Fjquery.lightbox.js":1, "themes\u002Fbhp\u002Fjs\u002Fjquery.ui.accordion.js":1, "themes\u002Fbhp\u002Fjs\u002Fjquery.ui.mouse.js":1, "themes\u002Fbhp\u002Fjs\u002Fjquery.ui.slider.js":1, "themes\u002Fbhp\u002Fjs\u002Frounded.js":1, "themes\u002Fbhp\u002Fjs\u002Fselectivizr.js":1, "themes\u002Fbhp\u002Fjs\u002Fcustom-form-elements.js":1}, "css":{"modules\u002Fsystem\u002Fsystem.base.css":1, "modules\u002Fsystem\u002Fsystem.menus.css":1, "modules\u002Fsystem\u002Fsystem.messages.css":1, "modules\u002Fsystem\u002Fsystem.theme.css":1, "modules\u002Fcomment\u002Fcomment.css":1, "sites\u002Fall\u002Fmodules\u002Fdate\u002Fdate_api\u002Fdate.css":1, "sites\u002Fall\u002Fmodules\u002Fdate\u002Fdate_popup\u002Fthemes\u002Fdatepicker.1.7.css":1, "modules\u002Ffield\u002Ftheme\u002Ffield.css":1, "modules\u002Fnode\u002Fnode.css":1, "modules\u002Fsearch\u002Fsearch.css":1, "modules\u002Fuser\u002Fuser.css":1, "sites\u002Fall\u002Fmodules\u002Fviews\u002Fcss\u002Fviews.css":1, "sites\u002Fall\u002Fmodules\u002Fctools\u002Fcss\u002Fctools.css":1, "sites\u002Fall\u002Fmodules\u002Fteambhp_mod\u002Fcss\u002Fteambhp_mod.css":1, "themes\u002Fbhp\u002Fcss\u002Flayout.css":1, "themes\u002Fbhp\u002Fcss\u002Fstyle.css":1, "themes\u002Fbhp\u002Fcss\u002Fcolors.css":1, "themes\u002Fbhp\u002Fcss\u002Fhome.css":1, "themes\u002Fbhp\u002Fcss\u002Frupees.css":1, "themes\u002Fbhp\u002Fcss\u002Fprint.css":1}}});
//--><!]]>
</script>
  <script src="http://connect.facebook.net/en_US/all.js"></script>
 			<meta property="og:title" content="Home | Team-BHP - The Definitive Indian Car Website"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="http://www.team-bhp.com"/>
<meta property="og:image" content="http://www.team-bhp.com/themes/bhp/images/teambhp-og-image-fb.jpg"/>
<meta property="og:site_name" content="Team-BHP.com"/>
<meta property="fb:admins" content="1504944662"/>
<meta property="og:description" content="Team-BHP - Redlining the Indian Automobile Scene"/>
<script type="text/javascript">
				
				jQuery(function(){
						if(jQuery.cookie("showsidebar")==1)
						{
						 jQuery("#sidebar-second").css("display","none");
						 jQuery("#page").removeClass("pageWithSlide");
						 jQuery(".quicklinks").html("Quick Links &gt;");
						}
						else
						{
						  jQuery("#sidebar-second").css("display","block");
						  jQuery("#page").addClass("pageWithSlide");
						  jQuery(".quicklinks").html("&lt; Quick Links");
						}
				});
				
</script>
<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/1063105/Portal_Section_Top_Banner', [728, 90], 'div-gpt-ad-1355997698878-0').addService(googletag.pubads());
googletag.defineSlot('/1063105/Portal-Skyscraper', [160, 600], 'div-gpt-ad-1355998578414-0').addService(googletag.pubads());
googletag.defineSlot('/1063105/Portal-Island', [300, 250], 'div-gpt-ad-1355998944152-0').addService(googletag.pubads());
googletag.enableServices();
});
</script>
</head>
<body class="html front not-logged-in one-sidebar sidebar-second page-node page-node- page-node-210 node-type-page homePage" >
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="bgHolder clearfix">
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
  </div>
    <div id="page-wrapper">

	<div id="page" class="page pageWithSlide clearfix">

		<div id="leftPage" class="fleft">
			<div id="header" class="without-secondary-menu">
				<div class="section clearfix">
				
					
		
										  <div id="name-and-slogan">
				
												  
						  
						  
										
				
					  </div> 
					
				      <div class="region region-header">
    <div id="block-block-34" class="block block-block">

    
  <div class="content">
    <script type="text/javascript">
(function ($) {
		$(function(){
			$(".listHolder").hover(
			function(){
					$(this).addClass("hover");
				},
			function(){
					$(this).removeClass("hover");
					}
			);
			
			$(".mv_tab_content li").hover(
			function(){
					$(this).addClass("hover");
				},
			function(){
					$(this).removeClass("hover");
					}
			);
			
			$(".carAdded").hover(
			function(){
					$(this).addClass("carAddedhover");
				},
			function(){
					$(this).removeClass("carAddedhover");
					}
			);
			
			$(".carListing li").hover(
			function(){
					$(this).addClass("hover");
				},
			function(){
					$(this).removeClass("hover");
					}
			);
			
			$("ul#newslist li").click(function(){
						 window.location=$(this).find('h2 a').attr('href');
					});
			
		

			$("#compareBtn").click(function() {
				if($(".reviewCompare").css("display")=="none") {
					$(this).removeClass("compareOpen");
					$(this).parent("div").removeClass("marB10");
					$(this).addClass("compareClose");
					$(".reviewCompare").css("display","block");
					//$(".contentOpt:first").css("display","block");
					return false;
				}else {
					$(this).removeClass("compareClose");
					$(this).parent("div").addClass("marB10");
					$(this).addClass("compareOpen");
					$(".reviewCompare").css("display","none");
					/*$(".reviewCompare, .contentOpt, .content").css("display","none");
					$(".reviewCompare li:not(:last)").attr("class", "num");
					$(".reviewCompare li").find(".n").removeAttr("style");
					$(".reviewCompare li:first").attr("class", "clearfix");
					$(".contentOpt select.marB5 option:first").attr('selected', 'selected');
					$(".contentOpt select.w150 option:first").attr('selected', 'selected');*/
					return false;
				}
			});
			
			//show/hide interaction
			$i = 1;
			$('option.flip').click(function(){
				if($(this).closest('.contentOpt').find('select.marB5 option:selected').text()=='Honda')
					{
						$(this).closest('.contentOpt').hide();
						$(this).closest('.clearfix').find('.content').show();
						$(this).closest('.clearfix').next('li.num').find('.n').hide();
						$(this).closest('.clearfix').next('li.num').find('.contentOpt').show();
						$(this).closest('.clearfix').next('li.num').attr('class', 'clearfix');
					}
				if($i>1)
				{
				$('#compare').attr('href', 'compare.php?s='+$i);
				}
				$i++
			});
			
			//add car to compare
			/*$(".add").click(function(){
				$('.reviewCompare').css('display', 'block');
				$('div.content:hidden').eq(0).closest('li').find('.contentOpt').hide();
				$('div.content:hidden').eq(0).closest('li').attr('class', 'clearfix');
				$('div.content:hidden').eq(1).closest('li').find('.n').hide();
				$('div.content:hidden').eq(1).closest('li').find('.contentOpt').show();
				$('div.content:hidden').eq(1).closest('li').attr('class', 'clearfix');
				$('div.content:hidden').eq(0).show();
				$('#compareBtn').removeClass("compareOpen");
				$('#compareBtn').parent("div").removeClass("marB10");
				$('#compareBtn').addClass("compareClose");
				if($i>1)
				{
				$('#compare').attr('href', 'compare.php?s='+$i);
				}
				$i++;
				return false;
			});*/
			
			
	
			/*var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active ID content
			return false;
			});*/
			
			$("#addCar").click(function(){
				if ($(this).siblings(".addCarForm").css("display")=="none"){
					$(this).parent(".addCarBox").addClass("addCarOpen");
					$(this).siblings(".addCarForm").fadeIn(500);
					return false;
				}else {
					$(this).parent(".addCarBox").removeClass("addCarOpen");
					$(this).siblings(".addCarForm").fadeOut("fast");
					return false;
				}
			});
			
			$("#closeForm").click(function(){
				$(this).parent().parent(".addCarBox").removeClass("addCarOpen");
				$(this).parent(".addCarForm").fadeOut("fast");
				return false;
			});
			
			$("#knowMore").click(function(){
				$("#reviewContent").fadeIn("slow");
				$(".showLess").fadeIn("slow");
				$("#overviewmore").parent().fadeOut("slow");
				$(this).parent().fadeOut("slow");
				$(this).parent().parent().addClass("reviewRollrBorder");
				return false;
			});
			
			$(".showLess").click(function(){
				$("#reviewContent").fadeOut("slow");
				$(this).fadeOut("slow");
				$("#knowMore").parent().fadeIn("slow");
				$("#overviewmore").parent().fadeIn("slow");
				$(this).parent().removeClass("reviewRollrBorder");
				return false;
			});
			
			/*$( "#slider-range" ).slider({
				orientation: "horizontal",
				range: true,
				values: [ 15, 20 ],
				max: 30,
				min: 5,
				slide: function( event, ui ) {
					
					$("#max-amount").text(ui.values[ 1 ]);
					$("#mini-amount").text(ui.values[ 0 ]);
					
					$maxRange = $("#slider-range").find("a").eq(1).attr("style").substr(6);
					$miniRange = $("#slider-range").find("a").eq(0).attr("style").substr(6);
					
					$("#max-amount").attr("style", "left:"+$maxRange);
					$("#mini-amount").attr("style", "left:"+$miniRange);
				},
				
				change: function(event, ui) {
					$maxRange = $("#slider-range").find("a").eq(1).attr("style").substr(6);
					$miniRange = $("#slider-range").find("a").eq(0).attr("style").substr(6);
					
					$("#max-amount").attr("style", "left:"+$maxRange);
					$("#mini-amount").attr("style", "left:"+$miniRange);
				}
				
			});
			
			if($("#slider-range").length>0)
			{
			$maxRange = $("#slider-range").find("a").eq(1).attr("style").substr(6);
			$miniRange = $("#slider-range").find("a").eq(0).attr("style").substr(6);
			}
			
			$("#max-amount").text($("#slider-range" ).slider( "values", 1 ));
			$("#mini-amount").text( $( "#slider-range" ).slider( "values", 0 ));
			
			if($("#slider-range").length>0)
			{
			$("#max-amount").attr("style", "left:"+$maxRange);
			$("#mini-amount").attr("style", "left:"+$miniRange);
			}*/
			
		$("#search_input").bind("focus click", function(){
		 	if($(this).val()=="Search")
		 		{
		 			$(this).val('');
		 		}
		 });
		 
		 $("#search_input").bind("blur", function(){
		 	if(($(this).val()=="Search") || ($(this).val()==''))
		 		{
		 			$(this).val('Search');
		 		}
		 });
		 	
		 	$("#setHomePage").click(function(){
		 		//setHomePage();
			 });
	
	});
})(jQuery);	

</script>

<div id="header" class="clearfix">
	<div class="fleft w400">
		<h1 class="marT10">
			<a href="/" title="Go to Home page">
				<img src="/themes/bhp/images/team-bhp-logo.png" alt="TEAM-BHP-LOGO" class="logoTeam" />	
				<div class="printlogo"><img src="/themes/bhp/images/team-bhp-logo-print.gif" alt="TEAM-BHP-LOGO" />	</div>
			</a>
		</h1>
	</div><!-- w400 -->
	
	<div class="fright aln_right w400 clearfix">
		<div class="topLink marT5">
			<!-- <a id="setHomePage" href="#" title="Make Team-BHP your Home Page">Make Team-BHP your Home Page</a>&nbsp;&nbsp;| -->
			<a href="/aboutus/overview" title="About Us">About Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/contactus/speak" title="Contact Us">Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/sitemap" title="Sitemap">Sitemap</a>
		</div>	<!-- tab Link -->

		<a href="#" class="marT5 quicklinks" >
			&lt; Close Links
		</a>
		<div class="marT10 clearfix">
			<!--  <form id="cse-search-box" class="roundAll5" action="q=node/247">-->
			<form id="cse-search-box" class="roundAll5" action="/search.php">
			    <input type="hidden" value="partner-pub-8422315737402856:zcmboq-gw8i" name="cx" />
			    <input type="hidden" value="FORID:9" name="cof" />
			    <input type="hidden" value="ISO-8859-1" name="ie" />
			    <input type="text" id="search_input" class="gloablSearch roundAll3" value="Search" name="q" />
			    <input type="submit" id="search_button" class="gloablSearchBtn" value="" name="sa" />
			</form>
			<!-- <div id="cse" style="width: 100%;">Loading</div>
			<script src="http://www.google.co.in/jsapi" type="text/javascript"></script>
			<script type="text/javascript"> 
			  google.load('search', '1', {language : 'en'});
			  google.setOnLoadCallback(function() {
			    var customSearchOptions = {};
			    var imageSearchOptions = {};
			    imageSearchOptions['layout'] = google.search.ImageSearch.LAYOUT_POPUP;
			    customSearchOptions['enableImageSearch'] = true;
			    customSearchOptions['imageSearchOptions'] = imageSearchOptions;
			    var googleAnalyticsOptions = {};
			    googleAnalyticsOptions['queryParameter'] = '\x3B';
			    googleAnalyticsOptions['categoryParameter'] = '';
			    customSearchOptions['googleAnalyticsOptions'] = googleAnalyticsOptions;
			    customSearchOptions['adoptions'] = {'layout': 'noTop'};
			    var customSearchControl = new google.search.CustomSearchControl(
			      'partner-pub-8422315737402856:zcmboq-gw8i', customSearchOptions);
			    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
			    var options = new google.search.DrawOptions();
			    options.setAutoComplete(true);
			    customSearchControl.draw('cse', options);
			  }, true);
			</script> -->
		</div>
	</div><!-- w400-->
</div> <!--  header -->	
  </div>
</div>
<div id="block-block-35" class="block block-block">

    
  <div class="content">
      
<div class="clearfix" id="navigation">
	<ul class="clearfix">
		<li class="home"><a class=" active" href="/" title="Go to Home page"><span>&nbsp;</span></a></li>
		<li><a href="http://www.team-bhp.com/forum/" title="Forum"><span>Forum</span></a></li>		
		<li><a class="" href="/hot-threads" title="Hot Threads"><span>Hot Threads</span></a></li>		
		<li><a class="" href="/news" title="News"><span>News</span></a></li>		
		<li><a class="" href="http://www.team-bhp.com/forum/official-new-car-reviews/?pp=25&sort=dateline&order=desc&daysprune=-1" title="Reviews"><span>Reviews</span></a></li>		
		 <li><a class="" href="http://www.team-bhp.com/forum/gallery.php" title="Photos"><span>Photos</span></a></li>
		<li><a class="" href="/advice" title="Advice"><span>Advice</span></a></li>
		<li><a class="" href="/tech-stuff" title="Tech Stuff"><span>Tech Stuff</span></a></li>
		<li><a href="http://classifieds.team-bhp.com/" title="Classifieds"><span>Classifieds</span></a></li>
		<li class="last"><a class="" href="http://store.team-bhp.com/" title="Store"><span>Store</span></a></li>
		</ul>	
</div><!-- navigation -->	
  </div>
</div>
  </div>

							</div><!-- section -->
			</div> <!--  /#header -->
			
						
			<!-- Portal_Section_Top_Banner -->
			<div id='div-gpt-ad-1355997698878-0' style='height: 94px; text-align: center;'> 
				<script type='text/javascript'>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1355997698878-0'); });
				</script> 
			</div>
			<div id="container" class="clearfix roundAll3">
				<!---->

		<div id="content" class="column">
			<div class="section">
				  				  <a id="main-content"></a>
				  				  <!--					<h1 class="title" id="page-title">
					  Home					</h1>
				  -->
				  				  					<div class="tabs">
					  					</div>
				  				  				  				    <div class="region region-content">
    <div id="block-system-main" class="block block-system">

    
  <div class="content">
    <div id="node-210" class="node node-page node-promoted clearfix" about="/home" typeof="foaf:Document">

      
  
  <div class="content clearfix">
    <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded"><div class="marB10 clearfix">
	<div id="leftColumn" class="fleft">
	
		<script type="text/javascript">	
var count=0;
var count1=0;
(function ($) {
$(function(){

$i=0;
$n=0;

	var myInt = setInterval(function(){
  		count ++;
  		if(count==5){
			$j = $i+1;
		 	count = 0;
		 
		 	if($j<$("div.banner").length)
		 		{
		 		$("div.banner").eq($i).fadeIn(800, function(){
					$("div.banner").fadeOut("slow");
					$("div.banner").eq($j).fadeIn("slow");
   					$(".bannerTabs ul li").removeClass("active");
	   				$(".bannerTabs ul li").eq($j).addClass("active");
	   				$("#bannerTitle a").text($(this).next().attr("title"));
	   				$("#bannerTitle a").attr("href", $(this).next().attr("rel"));
	   			});	   			
		 		$i = $i+1;
		 		}
		 	else
		 		{
		 		$i=0;
		 		$("div.banner").eq($("div.banner").length-1).fadeIn(800, function(){
		 			$("div.banner").fadeOut("slow");
   					$("div.banner").eq(0).fadeIn("slow");
   					$(".bannerTabs ul li").removeClass("active");
	   				$(".bannerTabs ul li").eq(0).addClass("active");
	   				$("#bannerTitle a").text($("div.banner").eq(0).attr("title"));
	   				$("#bannerTitle a").attr("href", $("div.banner").eq(0).attr("rel"));
	   			});
		 		}
		 	}
		},1000);

	$(".bannerTabs ul li").click(function(){
		$listItem = $('ul.highlighter li').index(this);
		$(".bannerTabs ul li").removeClass("active");
		$(this).addClass("active");
		$("div.banner").fadeOut(600);
		$($(this).attr("rel")).fadeIn(600);
		$bannerTitle = $(this).attr("rel");
		$("#bannerTitle a").text($($bannerTitle).attr("title"));
		$("#bannerTitle a").attr("href", $($bannerTitle).attr("rel"));
		count=0;
		$i=$listItem;
		return false;
	});
});
})(jQuery);
</script>
<div id="highlights" class="homeBanner">
	<div class="BLR5 bannerTabs clearfix">
		<ul class="highlighter clearfix">
						<li class="active" rel="#story-1">&nbsp;</li>  
						<li rel="#story-2">&nbsp;</li>  
						<li rel="#story-3">&nbsp;</li>  
						<li rel="#story-4">&nbsp;</li>  
						<li rel="#story-5">&nbsp;</li>  
							
		</ul>
				<div id="bannerTitle" class="fright"><a href="http://www.team-bhp.com/forum/official-new-car-reviews/156397-2014-audi-q3-dynamic-official-review.html">Audi Q3 Dynamic : Official Review</a></div>
	</div>
				<div class="roundAll5 banner" title="Audi Q3 Dynamic : Official Review" rel="http://www.team-bhp.com/forum/official-new-car-reviews/156397-2014-audi-q3-dynamic-official-review.html" id="story-1" style="display:table;"><a href="http://www.team-bhp.com/forum/official-new-car-reviews/156397-2014-audi-q3-dynamic-official-review.html"><img src="sites/default/files/audi-q3-dynamic-official-review.jpg"  alt="Audi Q3 Dynamic : Official Review"/></a></div>
				<div class="roundAll5 banner" title="Jaldapara & Bhutan in a Storme" rel="http://www.team-bhp.com/forum/travelogues/156395-nature-culture-fun-jaldapara-bhutan-safari-storme.html" id="story-2" style="display:none;"><a href="http://www.team-bhp.com/forum/travelogues/156395-nature-culture-fun-jaldapara-bhutan-safari-storme.html"><img src="sites/default/files/bhutan.jpg"  alt="Jaldapara & Bhutan in a Storme"/></a></div>
				<div class="roundAll5 banner" title="Ciaz vs City vs Verna vs Vento" rel="http://www.team-bhp.com/forum/sedans/156274-pictorial-comparison-maruti-ciaz-vs-honda-city-vs-hyundai-verna-vs-vw-vento-vs-linea.html" id="story-3" style="display:none;"><a href="http://www.team-bhp.com/forum/sedans/156274-pictorial-comparison-maruti-ciaz-vs-honda-city-vs-hyundai-verna-vs-vw-vento-vs-linea.html"><img src="sites/default/files/comparo_1.jpg"  alt="Ciaz vs City vs Verna vs Vento"/></a></div>
				<div class="roundAll5 banner" title="Polo GT TDI, Kerala & my Wedding!" rel="http://www.team-bhp.com/forum/travelogues/156352-vw-polo-gt-tdi-chronicles-surat-god-s-own-country-my-wedding.html" id="story-4" style="display:none;"><a href="http://www.team-bhp.com/forum/travelogues/156352-vw-polo-gt-tdi-chronicles-surat-god-s-own-country-my-wedding.html"><img src="sites/default/files/gt-tdi.jpg"  alt="Polo GT TDI, Kerala & my Wedding!"/></a></div>
				<div class="roundAll5 banner" title="The Brisbane Chronicles" rel="http://www.team-bhp.com/forum/travelogues/156473-bennys-day-out-brisbane-chronicles.html" id="story-5" style="display:none;"><a href="http://www.team-bhp.com/forum/travelogues/156473-bennys-day-out-brisbane-chronicles.html"><img src="sites/default/files/brisbane1.jpg"  alt="The Brisbane Chronicles"/></a></div>
			</div><!--homePageBanner-->
		
		<script type="text/javascript">
(function ($) {
	$(function(){
		$(".homeTab .tab a").click(function(){
			if ($($(this).attr("href")).css("display")=="none") {
				$(".homeTab .tab a").removeClass("active");
				$(this).addClass("active");
				$(".homeTab .tabContent").css("display","none");
				$($(this).attr("href")).fadeIn(800);
			}
			return false;
		});
			$(".titleLi").click(function()
			{
			location.href='http://'+'www.team-bhp.com/news';
			});
		
		 	$("#mtrbik").click(function()
			{
			location.href='http://'+'www.team-bhp.com/?q=hot-threads&catname=Motorbikes';
			});
			
			 $("#car_rview").click(function()
			{
				//location.href='http://'+'www.team-bhp.com/reviews';
			    location.href='http://www.team-bhp.com/forum/official-new-car-reviews/?pp=25&sort=dateline&order=desc&daysprune=-1';
			}); 
			$("#htthread").click(function()
			{
			location.href='http://'+'www.team-bhp.com/hot-threads';
			});
			 $("div.primBlock h4.TLR5").click(function()
			{
			location.href='http://'+'www.team-bhp.com/advice';
			});
			 $("div.primBlock h4.tech_stuffspcl").click(function()
			{
			location.href='http://'+'www.team-bhp.com/tech-stuff';
			});
			 $("div#trav_home").click(function()
			{
			location.href='http://'+'www.team-bhp.com/?q=hot-threads&catname=Travelogues';
			});
			$(".app").click(function()
			{
			window.open('http://www.team-bhp.com/forum/team-bhp-apps-mobile-access/', '_blank');
			return false;
			});
			$("div.searchClassi h4.TLR5").click(function(){
				location.href = "http://store.team-bhp.com/";
				return false;
			});
		
	});
	
	
	
})(jQuery);
</script>
<div class="homeTab">
	<ul class="tab TLR5 clearfix">
		<li class="titleLi">News</li>
		<li class="secondLi"><a title="Latest" class="TLR5 active news" href="#tab1" id="tab1indian">Latest</a></li>
		<li><a title="Most Viewed" class="TLR5" href="#tab2" id="tab2International">Most Viewed</a></li>
	</ul>
	<div class="tab_container BLR5">
		<div id="tab1" class="tabContent" style="display:block">
			
									<ul class="homeCarList clearfix">
												<li>
							<a class="clearfix" href="/news/rumour-tata-safari-storme-facelift-coming-mid-november" title="Rumour: Tata Safari Storme facelift coming in mid-November">
								<!-- <img width="70" height="53" src="sites/default/files/Safari.jpg" alt="Rumour: Tata Safari Storme facelift coming in mid-November" />-->
								<span>
									<strong>
									<img src="http://www.team-bhp.com/?q=sites/default/files/styles/check_thumb_review_detail/public/Safari.jpg" alt="" />
									</strong></span>
								<em>Rumour: Tata Safari Storme facelift coming in mid-November</em>
							</a>	
						</li>
											<li>
							<a class="clearfix" href="/news/toyota-launches-etios-and-liva-facelift" title="Toyota launches Etios and Liva facelift">
								<!-- <img width="70" height="53" src="sites/default/files/Etios_0.jpg" alt="Toyota launches Etios and Liva facelift" />-->
								<span>
									<strong>
									<img src="http://www.team-bhp.com/?q=sites/default/files/styles/check_thumb_review_detail/public/Etios_0.jpg" alt="" />
									</strong></span>
								<em>Toyota launches Etios and Liva facelift</em>
							</a>	
						</li>
											<li>
							<a class="clearfix" href="/news/honda-dealers-offer-motevo-touchscreen-city" title="Honda dealers to offer Motevo touchscreen for City">
								<!-- <img width="70" height="53" src="sites/default/files/M1_0.jpg" alt="Honda dealers to offer Motevo touchscreen for City" />-->
								<span>
									<strong>
									<img src="http://www.team-bhp.com/?q=sites/default/files/styles/check_thumb_review_detail/public/M1_0.jpg" alt="" />
									</strong></span>
								<em>Honda dealers to offer Motevo touchscreen for City</em>
							</a>	
						</li>
											<li>
							<a class="clearfix" href="/news/new-bajaj-pulsar-spied-lonavala-sports-160-cc-engine" title="New Bajaj Pulsar spied in Lonavala; sports 160 cc engine">
								<!-- <img width="70" height="53" src="sites/default/files/Pulsar1.jpg" alt="New Bajaj Pulsar spied in Lonavala; sports 160 cc engine" />-->
								<span>
									<strong>
									<img src="http://www.team-bhp.com/?q=sites/default/files/styles/check_thumb_review_detail/public/Pulsar1.jpg" alt="" />
									</strong></span>
								<em>New Bajaj Pulsar spied in Lonavala; sports 160 cc engine</em>
							</a>	
						</li>
											<li>
							<a class="clearfix" href="/news/maruti-launch-12-new-vehicles-targets-50-market-share" title="Maruti to launch 12 new vehicles; targets 50% market share">
								<!-- <img width="70" height="53" src="sites/default/files/SC.jpg" alt="Maruti to launch 12 new vehicles; targets 50% market share" />-->
								<span>
									<strong>
									<img src="http://www.team-bhp.com/?q=sites/default/files/styles/check_thumb_review_detail/public/SC.jpg" alt="" />
									</strong></span>
								<em>Maruti to launch 12 new vehicles; targets 50% market share</em>
							</a>	
						</li>
											<li>
							<a class="clearfix" href="/news/scoop-dc-avanti-caught-undisguised" title="SCOOP! DC Avanti caught undisguised">
								<!-- <img width="70" height="53" src="sites/default/files/Avanti1.jpg" alt="SCOOP! DC Avanti caught undisguised" />-->
								<span>
									<strong>
									<img src="http://www.team-bhp.com/?q=sites/default/files/styles/check_thumb_review_detail/public/Avanti1.jpg" alt="" />
									</strong></span>
								<em>SCOOP! DC Avanti caught undisguised</em>
							</a>	
						</li>
									 	</ul><!-- homeCarList -->
					<div class="marT10 marR12 clearfix">
						<a title="View All News" href="news" class="fright btnRight">
							<span>View All News</span>
						</a>
					</div>
			
						
		</div><!-- tabContent -->
		<div id="tab2" class="tabContent news" style="display:none">
			
									<ul class="homeCarList clearfix">
					
								<li>
					<a class="clearfix" href="/news/scoop-mahindra-scorpio-facelift-it" title="SCOOP! Mahindra Scorpio Facelift - This is it">
					<!-- <img width="70" height="53" src="sites/default/files/Image00001_6.jpg" alt="SCOOP! Mahindra Scorpio Facelift - This is it" /> -->
					<span>
						<strong>
						<img src="http://www.team-bhp.com/?q=sites/default/files/styles/check_thumb_review_detail/public/Image00001_6.jpg" alt="" />
						</strong>
						</span>
						
						<em>SCOOP! Mahindra Scorpio Facelift - This is it</em>
					</a>	
				</li>
								<li>
					<a class="clearfix" href="/news/mahindra-launches-new-scorpio-rs-798-lakh" title="Mahindra launches new Scorpio at Rs. 7.98 lakh">
					<!-- <img width="70" height="53" src="sites/default/files/Scorpio 1_0.jpg" alt="Mahindra launches new Scorpio at Rs. 7.98 lakh" /> -->
					<span>
						<strong>
						<img src="http://www.team-bhp.com/?q=sites/default/files/styles/check_thumb_review_detail/public/Scorpio 1_0.jpg" alt="" />
						</strong>
						</span>
						
						<em>Mahindra launches new Scorpio at Rs. 7.98 lakh</em>
					</a>	
				</li>
								<li>
					<a class="clearfix" href="/news/mahindra-scorpio-undisguised-interiors-spied" title="Mahindra Scorpio undisguised interiors spied">
					<!-- <img width="70" height="53" src="sites/default/files/2015-Mahindra-Scorpio-Interiors.jpg" alt="Mahindra Scorpio undisguised interiors spied" /> -->
					<span>
						<strong>
						<img src="http://www.team-bhp.com/?q=sites/default/files/styles/check_thumb_review_detail/public/2015-Mahindra-Scorpio-Interiors.jpg" alt="" />
						</strong>
						</span>
						
						<em>Mahindra Scorpio undisguised interiors spied</em>
					</a>	
				</li>
								<li>
					<a class="clearfix" href="/news/volkswagen-launches-refreshed-vento" title="Volkswagen launches the refreshed Vento">
					<!-- <img width="70" height="53" src="sites/default/files/Vento1.PNG" alt="Volkswagen launches the refreshed Vento" /> -->
					<span>
						<strong>
						<img src="http://www.team-bhp.com/?q=sites/default/files/styles/check_thumb_review_detail/public/Vento1.PNG" alt="" />
						</strong>
						</span>
						
						<em>Volkswagen launches the refreshed Vento</em>
					</a>	
				</li>
								<li>
					<a class="clearfix" href="/news/rumour-new-mahindra-scorpio-get-5-variants" title="Rumour: New Mahindra Scorpio to get five variants">
					<!-- <img width="70" height="53" src="sites/default/files/Scorpio1_1.jpg" alt="Rumour: New Mahindra Scorpio to get five variants" /> -->
					<span>
						<strong>
						<img src="http://www.team-bhp.com/?q=sites/default/files/styles/check_thumb_review_detail/public/Scorpio1_1.jpg" alt="" />
						</strong>
						</span>
						
						<em>Rumour: New Mahindra Scorpio to get five variants</em>
					</a>	
				</li>
								<li>
					<a class="clearfix" href="/news/maruti-alto-k10-facelift-spied-again-details-revealed" title="Maruti Alto K10 facelift spied again; details revealed">
					<!-- <img width="70" height="53" src="sites/default/files/K10-1.jpg" alt="Maruti Alto K10 facelift spied again; details revealed" /> -->
					<span>
						<strong>
						<img src="http://www.team-bhp.com/?q=sites/default/files/styles/check_thumb_review_detail/public/K10-1.jpg" alt="" />
						</strong>
						</span>
						
						<em>Maruti Alto K10 facelift spied again; details revealed</em>
					</a>	
				</li>
								
				</ul><!-- homeCarList -->
				<div class="marT10 marR12 clearfix">
					<a title="View All News" href="news" class="fright btnRight">
						<span>View All News</span>
					</a>
				</div>
			
						
		</div><!-- tabContent -->
	</div><!-- tab_container -->	
</div><!-- homeTab -->
		
		<div class="homeReview">
	<h4 class="TLR5 clearfix">
		<strong class="title" id="car_rview">Car Reviews</strong><!-- code for this click event writen in home-news-->
		<span class="options">
			<select name="make" onchange="showmodelbymake(this.value);">
				<option value="0">Select a Make</option>
								<option value="5766">Ashok Leyland</option>
								<option value="2242">Audi</option>
								<option value="2243">BMW</option>
								<option value="2244">Chevrolet</option>
								<option value="6412">Datsun</option>
								<option value="2245">Fiat</option>
								<option value="1975">Ford</option>
								<option value="2248">Honda</option>
								<option value="2249">Hyundai</option>
								<option value="6737">Isuzu</option>
								<option value="2250">Jaguar</option>
								<option value="2251">Land Rover</option>
								<option value="98">Mahindra</option>
								<option value="2">Maruti Suzuki</option>
								<option value="2252">Mercedes-Benz</option>
								<option value="3799">Mini</option>
								<option value="174">Mitsubishi</option>
								<option value="187">Nissan</option>
								<option value="5843">Rage Motorsport</option>
								<option value="193">Renault</option>
								<option value="2254">Skoda</option>
								<option value="330">Tata</option>
								<option value="2255">Toyota</option>
								<option value="2256">Volkswagen</option>
								<option value="871">Volvo</option>
							</select>
		</span>
	</h4>
	<div id="ajax">
	<div class="reviewContent BLR5">
	
		<ul class="reviewList clearfix">
										<li>
							<a href="http://www.team-bhp.com/forum/official-new-car-reviews/156397-2014-audi-q3-dynamic-official-review.html" title="Audi Q3 Dynamic">
								<!-- <img width="175" height="131" src="sites/default/files/" alt="Audi Q3 Dynamic" /> -->
								<img src="/sites/default/files/styles/check_car_review_home/public/audi-q3-dynamic-review.jpg" alt="Audi Q3 Dynamic" />
								<b>
								<span>Audi Q3 Dynamic</span>
								</b>
							</a>
						</li>
										<li>
							<a href="http://www.team-bhp.com/forum/official-new-car-reviews/156207-maruti-ciaz-official-review.html" title="Maruti Suzuki Ciaz">
								<!-- <img width="175" height="131" src="sites/default/files/" alt="Maruti Suzuki Ciaz" /> -->
								<img src="/sites/default/files/styles/check_car_review_home/public/maruti-ciaz-review-team-bhp.jpg" alt="Maruti Suzuki Ciaz" />
								<b>
								<span>Maruti Suzuki Ciaz</span>
								</b>
							</a>
						</li>
										<li>
							<a href="http://www.team-bhp.com/forum/indian-car-scene/155485-2014-skoda-yeti-facelift-close-look.html" title="Skoda Yeti">
								<!-- <img width="175" height="131" src="sites/default/files/" alt="Skoda Yeti" /> -->
								<img src="/sites/default/files/styles/check_car_review_home/public/2014-Skoda-Yeti-Facelift_0.jpg" alt="Skoda Yeti" />
								<b>
								<span>Skoda Yeti</span>
								</b>
							</a>
						</li>
										<li>
							<a href="http://www.team-bhp.com/forum/official-new-car-reviews/155025-hyundai-elite-i20-official-review.html" title="Hyundai Elite i20">
								<!-- <img width="175" height="131" src="sites/default/files/" alt="Hyundai Elite i20" /> -->
								<img src="/sites/default/files/styles/check_car_review_home/public/hyundai-elite-i20-review.JPG" alt="Hyundai Elite i20" />
								<b>
								<span>Hyundai Elite i20</span>
								</b>
							</a>
						</li>
										<li>
							<a href="http://www.team-bhp.com/forum/official-new-car-reviews/154206-audi-a3-official-review.html" title="Audi A3">
								<!-- <img width="175" height="131" src="sites/default/files/" alt="Audi A3" /> -->
								<img src="/sites/default/files/styles/check_car_review_home/public/audi-a3-review.jpg" alt="Audi A3" />
								<b>
								<span>Audi A3</span>
								</b>
							</a>
						</li>
										<li>
							<a href="http://www.team-bhp.com/forum/official-new-car-reviews/153946-tata-zest-official-review.html" title="Tata Zest">
								<!-- <img width="175" height="131" src="sites/default/files/" alt="Tata Zest" /> -->
								<img src="/sites/default/files/styles/check_car_review_home/public/tata-zest-03.jpg" alt="Tata Zest" />
								<b>
								<span>Tata Zest</span>
								</b>
							</a>
						</li>
						   </ul><!-- reviewList -->
		<div class="marR12 marT10 clearfix">
			<a title="View all car reviews" href="http://www.team-bhp.com/forum/official-new-car-reviews/?pp=25&sort=dateline&order=desc&daysprune=-1" class="fright btnRight">
				<span>View All Car Reviews</span>
			</a>
		</div>
	</div><!-- reviewContent -->
	</div><!-- end of ajax -->
</div><!-- homeReview -->
	
	</div><!-- left column -->
	
	
	<div id="sidebar" class="fright">
		<div class="searchClassi">
	<h4 class="TLR5">Got BHP?</h4>
	<div class="searchContent BLR5">
		<ul>
			<li><a id="homepageMerchandiseLink" href="http://store.team-bhp.com" target="_blank" title="Team-BHP Merchandise">Merchandise</a></li>
			
			<li><a class="sedans" id="homepageNewsletterLink" href="http://team-bhp.us4.list-manage.com/subscribe?u=10e084528b02b3c554ebf47a8&id=39df29de53" target="_blank" title="Weekly Newsletter">Weekly Newsletter</a></li>
			
			<li>
				<a class="SUV" id="homepageFacebookLink" href="http://www.facebook.com/teambhp" target="_blank" title="Facebook Page">Facebook</a>
				<div class="facebookclickable"><div class="fb-like" data-href="http://facebook.com/teambhp" data-width="120" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></div>
			</li>
			
			<li class="BLR5">
				<a class="luxury" id="homepageTwitterLink" href="http://twitter.com/teambhpforum" target="_blank" title="Twitter">Twitter</a>
				<div class="twitterclickable"><a href="https://twitter.com/TeamBHPforum" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false" data-dnt="true">Follow @TeamBHPforum</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div>
			</li>
		</ul>
	</div><!-- searchContent -->
</div><!-- searchClassi -->
		<div class="homeThreads">
	<h4 class="TLR5" id="htthread">Hot Threads</h4><!-- code for this click event wriiten in home-news-->
	<div class="threadsList BLR5">
		<ul>
						<li><a href="http://www.team-bhp.com/forum/intl-motorsport/156440-f1-slow-down-specified-speed-when-double-yellow-flag-waved.html" target="_blank" onclick="updatethreadcounter('http://www.team-bhp.com/forum/intl-motorsport/156440-f1-slow-down-specified-speed-when-double-yellow-flag-waved.html','7648');" title="F1: Slowing for double yellow flag?">F1: Slowing for double yellow&hellip;</a></li>
						<li><a href="http://www.team-bhp.com/forum/indian-car-scene/156404-bmw-experience-tour-2014-invitees-experience.html" target="_blank" onclick="updatethreadcounter('http://www.team-bhp.com/forum/indian-car-scene/156404-bmw-experience-tour-2014-invitees-experience.html','7647');" title="Report: BMW Experience Tour">Report: BMW Experience Tour</a></li>
						<li><a href="http://www.team-bhp.com/forum/international-automotive-scene/156363-teslas-model-d-p85d-sedan-dual-electric-motors-awd-0-100-3-2-seconds.html" target="_blank" onclick="updatethreadcounter('http://www.team-bhp.com/forum/international-automotive-scene/156363-teslas-model-d-p85d-sedan-dual-electric-motors-awd-0-100-3-2-seconds.html','7646');" title="Tesla's F-A-S-T new P85D sedan">Tesla's F-A-S-T new P85D sedan</a></li>
						<li><a href="http://www.team-bhp.com/forum/indian-car-scene/156383-scoop-2014-toyota-etios-liva-get-some-updates.html" target="_blank" onclick="updatethreadcounter('http://www.team-bhp.com/forum/indian-car-scene/156383-scoop-2014-toyota-etios-liva-get-some-updates.html','7637');" title="Scoop! Etios & Liva get updates">Scoop! Etios & Liva get updates</a></li>
						<li><a href="http://www.team-bhp.com/forum/official-new-car-reviews/156397-2014-audi-q3-dynamic-official-review.html" target="_blank" onclick="updatethreadcounter('http://www.team-bhp.com/forum/official-new-car-reviews/156397-2014-audi-q3-dynamic-official-review.html','7636');" title="2014 Audi Q3 Dynamic : Official Review">2014 Audi Q3 Dynamic : Official&hellip;</a></li>
						<li><a href="http://www.team-bhp.com/forum/shifting-gears/11174-member-pics-official-your-pics-thread-15.html" target="_blank" onclick="updatethreadcounter('http://www.team-bhp.com/forum/shifting-gears/11174-member-pics-official-your-pics-thread-15.html','7632');" title="The Official 'Your Pics' Thread">The Official 'Your Pics' Thread</a></li>
						<li><a href="http://www.team-bhp.com/forum/indian-car-scene/156360-september-2014-indian-car-sales-figures-analysis.html" target="_blank" onclick="updatethreadcounter('http://www.team-bhp.com/forum/indian-car-scene/156360-september-2014-indian-car-sales-figures-analysis.html','7630');" title="September Car Sales & Analysis">September Car Sales & Analysis</a></li>
						<li><a href="http://www.team-bhp.com/forum/sedans/156274-pictorial-comparison-maruti-ciaz-vs-honda-city-vs-hyundai-verna-vs-vw-vento-vs-linea.html" target="_blank" onclick="updatethreadcounter('http://www.team-bhp.com/forum/sedans/156274-pictorial-comparison-maruti-ciaz-vs-honda-city-vs-hyundai-verna-vs-vw-vento-vs-linea.html','7625');" title="Ciaz vs City vs Verna vs Vento">Ciaz vs City vs Verna vs Vento</a></li>
						<li><a href="http://www.team-bhp.com/forum/product-discussions/156295-dearth-oem-touchscreen-head-unit-vendors-india.html" target="_blank" onclick="updatethreadcounter('http://www.team-bhp.com/forum/product-discussions/156295-dearth-oem-touchscreen-head-unit-vendors-india.html','7623');" title="Lousy OEM Touchscreen Audio">Lousy OEM Touchscreen Audio</a></li>
						<li><a href="http://www.team-bhp.com/forum/technical-stuff/156314-design-flaw-honda-amaze-susceptibility-hydrolocking.html" target="_blank" onclick="updatethreadcounter('http://www.team-bhp.com/forum/technical-stuff/156314-design-flaw-honda-amaze-susceptibility-hydrolocking.html','7622');" title="Honda Amaze: Hydrolocking issue">Honda Amaze: Hydrolocking issue</a></li>
						<li><a href="http://www.team-bhp.com/forum/indian-car-scene/156297-carzonrent-tata-motors-pact-rent-nano-just-rs-399-day.html" target="_blank" onclick="updatethreadcounter('http://www.team-bhp.com/forum/indian-car-scene/156297-carzonrent-tata-motors-pact-rent-nano-just-rs-399-day.html','7621');" title="Rent Nano at Rs. 99/hour">Rent Nano at Rs. 99/hour</a></li>
						<li><a href="http://www.team-bhp.com/forum/commercial-vehicles-india/156237-wrightspeeds-electric-powertrain-microturbine-commercial-vehicles.html" target="_blank" onclick="updatethreadcounter('http://www.team-bhp.com/forum/commercial-vehicles-india/156237-wrightspeeds-electric-powertrain-microturbine-commercial-vehicles.html','7612');" title="An electric motor + microturbine">An electric motor + microturbine</a></li>
						<li><a href="http://www.team-bhp.com/forum/international-automotive-scene/156246-hyundai-exhibits-new-turbo-petrol-engines-paris-motor-show.html" target="_blank" onclick="updatethreadcounter('http://www.team-bhp.com/forum/international-automotive-scene/156246-hyundai-exhibits-new-turbo-petrol-engines-paris-motor-show.html','7611');" title="Hyundai's new turbo-petrols">Hyundai's new turbo-petrols</a></li>
						<li><a href="http://www.team-bhp.com/forum/street-experiences/156281-keep-family-photo-your-car-rtos-novel-idea-reduce-accidents.html" target="_blank" onclick="updatethreadcounter('http://www.team-bhp.com/forum/street-experiences/156281-keep-family-photo-your-car-rtos-novel-idea-reduce-accidents.html','7610');" title="RTO: Family photo in your car!">RTO: Family photo in your car!</a></li>
						<li><a href="http://www.team-bhp.com/forum/street-experiences/156203-flyovers-solution-traffic-congestion.html" target="_blank" onclick="updatethreadcounter('http://www.team-bhp.com/forum/street-experiences/156203-flyovers-solution-traffic-congestion.html','7603');" title="Do Flyovers solve traffic woes?">Do Flyovers solve traffic woes?</a></li>
					</ul>
		<div class="marR15 clearfix">
			<a title="More hot threads" href="/hot-threads" class="fright btnRight">
				<span>More Hot Threads</span>
			</a>
		</div><!-- marR15 -->
	</div><!-- threadsList -->
</div><!-- homeThreads -->
	</div><!-- sidebar -->
</div><!-- clearfix -->

	
<!--<ul class="whatCar clearfix">
	<li class="first LTB5">What Car ?</li>
	<li class="last RTB5 clearfix">
		<div class="fleft">
			<h5><strong>Confused which car to buy ?</strong> Get expert Team BHP opinion.</h5>
			<p>We will help you make a better choice. Participate in the forum discussions. </p>
		</div>
		<a href="http://www.team-bhp.com/forum/" class="fright marT10 btnRight" title="Go to the Forum">
			<span>Go to the Forum</span>
		</a>
	</li>
</ul> -->
<div class="app clearfix">
	<div class="appLeftBox">
		<span class="stayupdate">Stay updated on the move</span>
		<strong>Team-BHP App</strong> <span class="teamApp"> for iPhone & Android</span>
	</div>
	<a href="http://www.team-bhp.com/forum/team-bhp-apps-mobile-access/" title="Free Download" class="freeDownBtn roundAll5">
		<span>Free <em>Download</em></span>
	</a>
</div>
	
<div class="clearfix">
	<div id="leftColumn" class="fleft">
	
		<div class="homeTra">
	<a href="http://www.team-bhp.com/?q=hot-threads&catname=Travelogues"  class="roundAll5 homeTravel clearfix">
				<img src="/sites/default/files/7-plantations.jpg" alt="Plantations" />
			
	</a>
	<div class="fleft travels" id="trav_home"><!-- code for this click event writen in home-news-->
		<h4>Travelogues</h4>
		<p>Experiences, Route info &amp; Photos posted by Team-BHP members</p>
	</div>
	<ul class="travelList roundAll5">
				<li><a href="http://www.team-bhp.com/forum/travelogues/156473-bennys-day-out-brisbane-chronicles.html" target="_blank" title="The Brisbane Chronicles">The Brisbane Chronicles</a></li>
				<li><a href="http://www.team-bhp.com/forum/travelogues/156229-all-you-need-know-about-dudhsagar-falls.html" target="_blank" title="Dudhsagar Falls: A Guide">Dudhsagar Falls: A Guide</a></li>
				<li><a href="http://www.team-bhp.com/forum/travelogues/156395-nature-culture-fun-jaldapara-bhutan-safari-storme.html" target="_blank" title="Jaldapara & Bhutan in a Storme">Jaldapara & Bhutan in a Storme</a></li>
				<li><a href="http://www.team-bhp.com/forum/travelogues/156352-vw-polo-gt-tdi-chronicles-surat-god-s-own-country-my-wedding.html" target="_blank" title="Polo GT TDI, Kerala & my Wedding!">Polo GT TDI, Kerala & my&hellip;</a></li>
				<li><a href="http://www.team-bhp.com/forum/travelogues/156288-elephant-season-lush-green-masinagudi-mudumalai-bandipur.html" target="_blank" title="Elephant season in Masinagudi">Elephant season in Masinagudi</a></li>
				<!--  <li><a href="#">Road trip to Ladakh</a></li>
		<li><a href="#">Strange sightings on the road</a></li>
		<li><a href="#">Route query: Delhi to Rajasthan</a></li>
		<li><a href="#">Bike trip: Mumbai to Goa</a></li>-->
	</ul>
</div>
	
		<div class="clearfix">
			<div class="fleft w420">
				<div class="primBlock marB10">
	<h4 class="TLR5"><span>Help Articles</span></h4><!-- code for this click event wriiten in home-news-->
	<div class="BLR5 primBlockPad">
		<ul class="marB10 normalList">
						<li><a href="/advice/buying-new-car-older-manufacturing-date" title="Buying a New car with an Older manufacturing date">Buying a New car with an Older manufacturing date</a></li>
						<li><a href="/advice/how-run-your-new-car" title="How to Run-In your new car">How to Run-In your new car</a></li>
						<li><a href="/advice/how-buy-used-car-india-0" title="How to buy a *USED* Car in India">How to buy a *USED* Car in India</a></li>
						<li><a href="/advice/extended-warranties-yes-or-no" title="Extended Warranties. Yes or No?">Extended Warranties. Yes or No?</a></li>
						<li><a href="/advice/no-claim-bonus-how-save-your-insurance-premiums-0" title="No Claim Bonus - How to save on your insurance premiums!">No Claim Bonus - How to save on your insurance premiums!&hellip;</a></li>
						<!--  <li><a href="#">How to get the lowest EMI & the best finance deal.</a></li>
			<li><a href="#">How to protect your car from theft.</a></li>
			<li><a href="#">How to get the maximum Fuel Efficiency.</a></li>
			<li><a href="#">How to modify/ tune your car.</a></li>
			-->
		</ul>
		<div class="clearfix">
			<a title="View all" href="/advice" class="fright btnRight">
				<span>View All</span>
			</a>
		</div>
	</div><!-- primBlockPad -->
</div><!-- primBlock -->
		
				<div class="primBlock">
	<h4 class="tech_stuffspcl TLR5"><span>Tech Stuff</span></h4><!-- code for this click event wriiten in home-news-->
	<div class="BLR5 primBlockPad">
		<ul class="marB10 normalList">
						<li><a href="/tech-stuff/downside-high-end-audio-installs" title="The Downside of High-End Audio Installs">The Downside of High-End Audio Installs</a></li>
						<li><a href="/tech-stuff/all-about-engine-decarbonisation" title="All about Engine Decarbonisation">All about Engine Decarbonisation</a></li>
						<li><a href="/tech-stuff/fixing-car-steering-pedal-vibrations" title="Fixing Car / Steering / Pedal Vibrations">Fixing Car / Steering / Pedal Vibrations</a></li>
						<li><a href="/tech-stuff/how-maintain-your-car-top-shape" title="How to Maintain your Car in Top Shape">How to Maintain your Car in Top Shape</a></li>
						<li><a href="/tech-stuff/idling-rule-turbo-charged-cars" title="The "Idling Rule" with Turbo-Charged Cars">The "Idling Rule" with Turbo-Charged Cars</a></li>
						<!-- <li><a href="#">Suspension issues.</a></li>
			<li><a href="#">Nano technology in cars.</a></li>
			<li><a href="#">Torque & power graph of Indan cars.</a></li>
			<li><a href="#">Fuel gauge problems.</a></li> -->
		</ul>
		<div class="clearfix">
			<a title="View all" href="/tech-stuff" class="fright btnRight">
				<span>View All</span>
			</a>
		</div>
	</div><!-- primBlockPad -->
</div><!-- primBlock -->
			</div><!-- fleft -->
		
			<div class="fright w190">
				<div class="marB10">
	<a href="http://store.team-bhp.com/"><img class="disBlock" src="themes/bhp/images/home/teamBhpMerchandise.jpg" width="190" height="260" title="Team-BHP Merchandise" alt="Team-BHP Merchandise" /></a>
</div>
				<div class="roundAll5 safetyBlock">
	<ul>
					<li><a href="/safety/open-vs-full-face-helmets" title="Open vs Full Face Helmets">Open vs Full Face Helmets</a></li>
		 		<li><a href="/safety/safe-driving-highways-ghats" title="Safe Driving on Highways & Ghats">Safe Driving on Highways&hellip;</a></li>
		 		<li><a href="/safety/seat-belts-saved-my-life-stories-pictures" title="Seat Belts Saved My Life! Stories & Pictures">Seat Belts Saved My Life&hellip;</a></li>
		 		<li><a href="/safety/tyre-bursts-blowouts-how-handle-and-prevent-them" title="Tyre Bursts / Blowouts : How to handle and prevent them">Tyre Bursts / Blowouts&hellip;</a></li>
		 		<li><a href="/safety/safe-night-driving-guidelines-tips" title="Safe NIGHT Driving : Guidelines & Tips">Safe NIGHT Driving :&hellip;</a></li>
		 		<!--  <li><a href="#">Child safety in  cars</a></li>
		<li><a href="#">Consectetur adip elit...</a></li>
		<li><a href="#">Adipiscing elit. </a></li>
		<li><a href="#">Consectetur adipiscing </a></li>-->
	</ul>
	<div class="padR10 clearfix">
		<a title="More" class="fright buttonSmall" href="/safety"><span>More </span></a>
	</div>
</div><!-- safetyBlock -->
			</div><!-- fright -->
		
		</div><!-- clearfix -->
	</div>
	<div id="sidebar1" class="fright">
		<script type="text/javascript">
(function ($) {
	$(function(){
	var vintageInt = setInterval(function(){
			  count1 ++;
			  if(count1==10){
			  	$j = $n+1;
					 count1 = 0;
					 
					 if($j<$("#vintageCars img").length)
					 	{	
					 		$("#vintageCars img").eq($n).fadeOut(500, function(){
					 			$("#vintageCars img").fadeOut(500);
								$("#vintageCars img").eq($j).fadeIn(500);
								$(".vintageBtn ul li").removeClass("active");
				   				$(".vintageBtn ul li").eq($j).addClass("active");
				   				$(".vintageCars h4").text($(this).next().attr("alt"));
				   				
			   				});
				   			
					 		$n = $n+1;
					 	}
					 else
					 	{
					 		$n=0;
					 		$("#vintageCars img").eq($("#vintageCars img").length-1).fadeOut(500, function(){
					 			$("#vintageCars img").fadeOut(500);
					 			$("#vintageCars img").eq(0).fadeIn(500);
					 			$(".vintageBtn ul li").removeClass("active");
				   				$(".vintageBtn ul li").eq(0).addClass("active");
				   				$(".vintageCars h4").text($("#vintage-1").attr("alt"))
			   				});
					 	}
					 }
			},1000);
			
			$(".vintageBtn ul li").click(function(){
				$listItem = $('.vintageBtn ul li').index(this);
				$(".vintageBtn ul li").removeClass("active");
				$(this).addClass("active");
				$("#vintageCars img").fadeOut(600);
				$($(this).attr("rel")).fadeIn(600);
				$bannerTitle = $(this).attr("rel");
				$(".vintageCars h4").text($($bannerTitle).attr("alt"));
				count1=0;
				$n=$listItem;
				return false;
			});
	});
})(jQuery);
</script>
<div class="marB10 homeThreads">
	<h4 class="TLR5" id="mtrbik">Motorbikes</h4><!-- code for this click event wriiten in home-news-->
	<div class="threadsList BLR5">
		<ul>
						<li><a href="http://www.team-bhp.com/forum/travelogues/156194-travel-all-about-exploration-not-destination-long-ride-continental-gt.html" target="_blank" title="Father, Son & 2 Enfields">Father, Son & 2 Enfields</a></li>
						<li><a href="http://www.team-bhp.com/forum/superbikes-imports/156035-my-mean-green-2015-kawasaki-z800.html" target="_blank" title="My 2015 Kawasaki Z800">My 2015 Kawasaki Z800</a></li>
						<li><a href="http://www.team-bhp.com/forum/motorbikes/156084-diy-upgrade-stainless-steel-braided-brake-hose.html" target="_blank" title="DIY: SS-braided brake hose">DIY: SS-braided brake hose</a></li>
						<li><a href="http://www.team-bhp.com/forum/street-experiences/155910-pillion-wearing-helmet-criminals-bike-say-cops.html" target="_blank" title="Pillion with helmet = Criminal?">Pillion with helmet = Criminal?</a></li>
						<li><a href="http://www.team-bhp.com/forum/travelogues/155543-short-impromptu-ride-pushkar.html" target="_blank" title="Impromptu ride to Pushkar">Impromptu ride to Pushkar</a></li>
						<!--  <li><a href="#">ABS for Bikes</a></li>
			<li><a href="#">Retro Style Kwasaki W800 Launched</a></li>
			<li><a href="#">Honda 250CC Bike for India</a></li>
			<li><a href="#">How to buy a good helmet?</a></li>
			-->
		</ul>
		<div class="marR15 clearfix">
		<a title="More bike threads" href="http://www.team-bhp.com/?q=hot-threads&catname=Motorbikes" class="fright btnRight">
			<!-- <a href="http://www.team-bhp.com/forum/motorbikes/" target="_blank" class="fright btnRight"> -->
				<span>More Bike Threads</span>
			</a>
		</div><!-- marR15 -->
	</div><!-- threadsList -->
</div><!-- homeThreads -->
		<div class="roundAll5 vintageCars">
	<div id="vintageCars" class="picBox">
				<a href="http://www.team-bhp.com/forum/gallery.php?catid=19" target="_blank">
		<img title="4x4 & Off-Roading" id="vintage-1" src="sites/default/files/4x4Car_8_0.jpg"  alt="4x4 & Off-Roading"/> 
		</a>
				<a href="http://www.team-bhp.com/forum/gallery.php?catid=2" target="_blank">
		<img title="Supercars in India" id="vintage-2" style="display:none" src="sites/default/files/superCar_0.jpg"  alt="Supercars in India"/> 
		</a>
				<a href="http://www.team-bhp.com/forum/gallery.php?catid=3" target="_blank">
		<img title="Vintage Cars in India" id="vintage-3" style="display:none" src="sites/default/files/vintageCars.jpg"  alt="Vintage Cars in India"/> 
		</a>
				<!--  <img id="vintage-2" style="display:none" src="themes/bhp/images/temp/4x4Car.jpg" width="280" height="228" alt="4 x 4 Cars"/>
		<img id="vintage-3" style="display:none" src="themes/bhp/images/temp/vintageCars.jpg" width="280" height="228" alt="Vintage Cars"/>-->
	</div>
	<div class="vintageBtn clearfix">
		<ul class="fright clearfix">
						<li rel="#vintage-1" class="active">&nbsp;</li>
						<li rel="#vintage-2">&nbsp;</li>
						<li rel="#vintage-3">&nbsp;</li>
						<!--  <li rel="#vintage-2">&nbsp;</li>
			<li rel="#vintage-3">&nbsp;</li>-->
		</ul>
	</div>
</div>
		<div class="searchClassi">
	<h4 class="TLR5">Classifieds</h4>
	<div class="searchContent classifiedsAdAlt BLR5 searchContentOverride">
		<ul>
			<li><a href="http://classifieds.team-bhp.com/browse_by_body_style/Hatchback/" title="Hatchbacks">Hatchbacks</a></li>
			<li><a class="sedansAdAlt" href="http://classifieds.team-bhp.com/browse_by_body_style/Sedan/" title="Sedans">Sedans</a></li>
			<li><a class="SUVAdAlt" href="http://classifieds.team-bhp.com/browse_by_body_style/SUV,+MUV,+4x4/" title="SUVs, MUVs &amp; 4X4">SUVs, MUVs &amp; 4x4s</a></li>
			<li><a class="luxuryAdAlt" href="http://classifieds.team-bhp.com/browse_by_body_style/Luxury+&+Niche/" title="Luxury &amp; Niche">Luxury &amp; Niche</a></li>
			<li class="BLR5"><a class="motorbikesAdAlt" href="http://classifieds.team-bhp.com/search_results/?listing_type[equal]=Motorbikes&action=search" title="Motorbikes">Motorbikes</a></li>
		</ul>
	</div><!-- searchContent -->
</div><!-- searchClassi -->
	</div><!-- sidebar -->
</div></div></div></div>  </div>

  
  
</div>
  </div>
</div>
  </div>
				  			</div><!-- section -->
		</div> <!-- /#content -->
		
					

</div><!--  /#container -->

						<div id="footer-wrapper">
				<div class="section">
										
											  <div class="region region-footer">
    <div id="block-block-36" class="block block-block">

    
  <div class="content">
    <div id="footer" class="clearfix">
	<div class="clearfix">
		<div class="fleft w480">
			<h3>Team-BHP.com</h3>
			<ul class="fleft">
				<li><a href="/advice" title="Advice">Advice</a></li>
				<li><a href="http://classifieds.team-bhp.com/" title="Classifieds">Classifieds</a></li>
				<li><a href="http://www.team-bhp.com/forum/" title="Forum">Forum</a></li>
				<li><a href="/hot-threads" title="Hot Threads">Hot Threads</a></li>
				<!--<li><a href="http://www.team-bhp.com/forum/" title="Directory">Directory</a></li>-->
			</ul>
			<ul class="fleft">
				
				<li><a href="/news" title="News">News</a></li>
				<li><a href="http://www.team-bhp.com/forum/gallery.php" title="Photos">Photos</a></li>
				<li><a href="http://www.team-bhp.com/forum/official-new-car-reviews/?pp=25&sort=dateline&order=desc&daysprune=-1" title="Reviews">Reviews</a></li>
			</ul>
	
			<ul class="fleft">
				<li><a href="/safety" title="Road Safety">Road Safety</a></li>
				<li><a href="http://store.team-bhp.com/" title="Store">Store</a></li>
				<li><a href="/tech-stuff" title="Tech Stuff">Tech Stuff</a></li>
			</ul>
		</div><!-- 480 -->
		
		<div class="fleft marL40 w160">
			<h3>About Us</h3>
			<ul class="fleft">
				<li><a href="/aboutus/overview" title="Overview">Overview</a></li>
				<li><a href="/aboutus/team" title="The Team">The Team</a></li>
				<li><a href="/aboutus/key-features" title="Key Features">Key Features</a></li>
				<li><a href="/aboutus/philosophy" title="Philosophy">Philosophy</a></li>
				<li><a href="/aboutus/history" title="History">History</a></li>			
			</ul>
		</div>
		<div class="fleft marL40 w100">
			<h3>Contact Us</h3>
			<ul class="fleft">
				<li><a href="/contactus/speak" title="Speak">Speak</a></li>
				<li><a href="/contactus/share" title="Share">Share</a></li>
				<li><a href="/contactus/advertise" title="Advertise">Advertise</a></li>
			</ul>
		</div><!-- w460 -->
		
	</div><!-- clearfix -->	
	<div class="clearfix">&nbsp;</div>
	<div class="clearfix marT40">
		<div class="fleft cRight">Copyright 2014 - www.team-bhp.com</div>
		<div class="fright marR40" id="footnote">
			<a href="/sitemap" title="Site Map">Site Map</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<a href="/privacy-policy" title="Privacy Policy  &amp; Opt Out">Privacy Policy &amp; Opt Out</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<a href="/terms-conditions" title="Terms &amp; Conditions">Terms &amp; Conditions</a>
		</div>
	</div>
	
</div><!-- footer -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4898097-10']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['b._setAccount', 'UA-4898097-11']);
  _gaq.push(['b._trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </div>
</div>
  </div>
									</div><!-- section -->
			</div> <!--  /#footer-wrapper -->
		</div><!-- left page -->
	
				  <div id="sidebar-second" class="column sidebar">
		  	<div class="section">
				  <div class="region region-sidebar-second">
    <div id="block-block-28" class="block block-block">

    
  <div class="content">
    <div class="promoHolder">
		<img src="http://www.team-bhp.com/sites/default/files/evo.jpg" alt="EVOX"  />
</div>
  </div>
</div>
<div id="block-block-3" class="block block-block">

    
  <div class="content">
    <div class="roundAll3 cta featured-ads">
	<h3 class="padB10"><img src="/themes/bhp/images/cta/featured-ads/pre-owned-cars.png" alt="Feature Ads" width="198"  height="21" /></h3>
		<div class="clearfix marB10">
		<div class="fleft imgBox">
			<a href="http://classifieds.team-bhp.com/buy-used/Maruti/Esteem/" target="_blank" title="Maruti Esteem">
				<img src="http://www.team-bhp.com/sites/default/files/Maruti Esteem.jpg" alt="Maruti Esteem" />
			</a>
		</div><!-- w110 -->
		
		<div class="fleft imgDesc">
			<a href="http://classifieds.team-bhp.com/buy-used/Maruti/Esteem/" target="_blank" title="Maruti Esteem"><h4>Maruti Esteem</h4></a>
			<p><a href="http://classifieds.team-bhp.com/buy-used/Maruti/Esteem/" target="_blank" title="See All Ads">See All Ads</a></p>
		</div><!-- w90 -->
	</div><!-- clearfix -->
	
		<div class="clearfix marB10">
		<div class="fleft imgBox">
			<a href="http://classifieds.team-bhp.com/buy-used/Hyundai/Accent/" target="_blank" title="Hyundai Accent">
				<img src="http://www.team-bhp.com/sites/default/files/Hyundai Accent.jpg" alt="Hyundai Accent" />
			</a>
		</div><!-- w110 -->
		
		<div class="fleft imgDesc">
			<a href="http://classifieds.team-bhp.com/buy-used/Hyundai/Accent/" target="_blank" title="Hyundai Accent"><h4>Hyundai Accent</h4></a>
			<p><a href="http://classifieds.team-bhp.com/buy-used/Hyundai/Accent/" target="_blank" title="See All Ads">See All Ads</a></p>
		</div><!-- w90 -->
	</div><!-- clearfix -->
	
	</div><!-- featured-ads -->
  </div>
</div>
<div id="block-block-33" class="block block-block">

    
  <div class="content">
    <div id="userContent" style="display:none">
<table cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td colspan="2" align="center" style="font-weight: bold">USERS ONLINE</td>
	</tr>
	<tr>
		<td colspan="2" align="center" style="font-size: 22px; letter-spacing:12px; padding: 8px 0 8px 0;">018418</td>
	</tr>
	<tr><td colspan="2"><hr /></td></tr>
	<tr>
		<td>Members:</td>
		<td style="font-weight: bold">84,462</td>
	</tr>
	<tr><td colspan="2"><hr /></td></tr>
	<tr>
		<td>Threads:</td>
		<td style="font-weight: bold">123,189</td>
	</tr>
	<tr><td colspan="2"><hr /></td></tr>
	<tr>
		<td>Posts:</td>
		<td style="font-weight: bold">3,395,100</td>
	</tr>
	<tr><td colspan="2"><hr /></td></tr>
</table></div>
<div class="roundAll3 cta userOnline clearfix">
	<h5 class="aln_center paB5">USERS ONLINE</h5>
	<div class="userCount">
		<ul class="clearfix">
			<li>0</li>
			<li>0</li>
			<li>0</li>
			<li>0</li>
			<li class="last">0</li>
		</ul><!-- userCount -->
	</div>
	<div class="siteStats">
		<ul>
			<li class="clearfix">
				<span>Members:</span>
				<strong>&nbsp;</strong>
			</li>
			<li class="clearfix">
				<span>Threads:</span>
				<strong>&nbsp;</strong>
			</li>
			<li class="clearfix last">
				<span>Posts:</span>
				<strong>&nbsp;</strong>
			</li>
		</ul><!-- siteStats -->
	</div>
</div>
  </div>
</div>
<div id="block-block-12" class="block block-block">

    
  <div class="content">
    <div class="roundAll3 cta directory">
	<h3>Directory</h3>
	<div class="findInDIR padL15 padB5">Member-recommended garages, shops &amp; service providers</div>
	
	<div class="roundAll5 directoryList clearfix">
		<ul>
			<li><a href="http://www.team-bhp.com/forum/mumbai/" target="_blank" title="Mumbai">Mumbai</a></li>
			<li><a href="http://www.team-bhp.com/forum/bangalore/" title="Bangalore" target="_blank" >Bangalore</a></li>
			<li><a href="http://www.team-bhp.com/forum/delhi-ncr/" title="Delhi NCR" target="_blank" >Delhi NCR</a></li>
			<li><a href="http://www.team-bhp.com/forum/chennai/" title="Chennai" target="_blank" >Chennai</a></li>
			<li><a href="http://www.team-bhp.com/forum/other-cities/" title="Other Cities" target="_blank" >Other Cities</a></li>
			<!--<li><a href="http://www.team-bhp.com/forum/other-cities/" title="Pune" target="_blank" >Pune</a></li>
			<li><a href="http://www.team-bhp.com/forum/other-cities/" title="Kolkatta" target="_blank" >Kolkatta</a></li>
			<li><a href="http://www.team-bhp.com/forum/other-cities/" title="Hyderabad" target="_blank" >Hyderabad</a></li>
			<li class="last"><a href="http://www.team-bhp.com/forum/other-cities/" title="Cochin" target="_blank" >Cochin</a></li>-->
		</ul>
	</div><!-- directoryList -->
</div>


  </div>
</div>
<div id="block-block-4" class="block block-block">

    
  <div class="content">
    <div class="roundAll3 cta travelogues clearfix">
	<div class="traveloguesInner roundAll5">
		<div class="traveloguesContent">
			<!-- <h3>Travelogues</h3> -->
			<p>&nbsp;</p>
		</div>
		<a href="http://store.team-bhp.com" target="_blank">
			<img class="roundAll5" src="http://www.team-bhp.com/sites/default/files/Merchandise-banner-Jan-13.jpg" alt="public://Merchandise-banner-Jan-13.jpg" />
		</a>
	</div>
</div><!-- Travelogues CTA -->
  </div>
</div>
<div id="block-block-51" class="block block-block">

    
  <div class="content">
    <div class="roundAll3 cta ibb-price-check">
	<h3>Price Check</h3>
	<div class="ibbSmallText padL15 padB5 padR10">Get an instant price estimate for a used vehicle</div>
	
	<div class="roundAll5 ibbList clearfix">
		<ul>
			<li><a href="http://classifieds.team-bhp.com/used-car-price-check/" target="_blank" title="Calculate now">Calculate now</a></li>
		</ul>
	</div>
	<div>
  <a href="http://indianbluebook.com" target="_blank">
			<img class="roundAll5" src="../themes/bhp/images/cta/ibb-price-check/ibb-logo-homepagebox.png" alt="Powered by IBB">
		</a>
	</div><!-- directoryList -->
</div>  </div>
</div>
<div id="block-block-24" class="block block-block">

    
  <div class="content">
    

<div class="roundAll3 cta newsletter clearfix">
	<div class="newsletterInner">
		<h3>Newsletter</h3>
		<div class="marB20">Get your weekly dose of the<br /> Indian Car Scene</div>

		<form action="http://team-bhp.us4.list-manage.com/subscribe/post?u=10e084528b02b3c554ebf47a8&amp;id=39df29de53" method="post"  id="mc_newsletter" name="mc_newsletter" class="mc_validate" novalidate>
			
		<div>
				<label for="mce-EMAIL">Email Address</label>
				<input type="email" value=""  size="28" name="EMAIL" class="required email" id="mce-EMAIL">
		</div>

		<p class="marT10"></p>
			
			<div class="aln_center clearfix marT20">
				
				<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" style="padding:2px;"></div>
				</form>
			</div><!-- submit button -->
		</form>
	</div><!-- newsletter inner -->
		<a class="unsubscribeLink" href="http://team-bhp.us4.list-manage.com/unsubscribe?u=10e084528b02b3c554ebf47a8&id=39df29de53">Click here to unsubscribe</a>
	</div>
	
	<div class="roundAll3 cta socialMediaBlock clearfix">
			<h3> Become A Fan </h3>
			<div class="fb-like-box" data-href="http://www.facebook.com/teambhp" data-width="205" data-height="270" data-colorscheme="dark" data-show-faces="true" data-border-color="#626262" data-stream="false" data-header="false"></div>
		<div class="clearfix marT20 padL10">
		<h3 class="stayUpdated">Stay Updated</h3>
			<p><!-- Be updated about the Indian automotive scene via Twitter, Facebook or RSS feeds. -->Keep yourself tuned in to the Indian automotive scene via Twitter, Youtube or RSS feeds.</p>
			
			<ul class="stayUpdated marT20 marB10 clearfix">
				<li><a href="http://twitter.com/#!/teambhpforum" title="Twitter" class="twitter" target="_blank">&nbsp;</a></li>
				<li><a href="http://www.youtube.com/teamBHPChannel" title="Youtube" class="youTube" target="_blank">&nbsp;</a></li>
				<li><a href="/rss-feed" title="RSS" class="rss" target="_blank">&nbsp;</a></li>			
			</ul>
		
	</div><!-- staty -->
	
	
</div><!-- Travelogues CTA -->  </div>
</div>
  </div>
		  	</div>
		</div> <!-- /.section, /#sidebar-second -->
		<div class="aln_center buckle">
		<img class="marT20" src="http://www.team-bhp.com/sites/default/files/buckle-up-footer.png" alt="Seat belts save lives" />
	</div>
				</div> <!-- /#page, /#page-wrapper -->
	
	<!-- Javascript tag  -->
	<!-- begin ZEDO for channel:  Slider - Portal , publisher: Team BHP , Ad Dimension: Slider - 1 x 1 -->
	<script language="JavaScript">
	var zflag_nid="1893"; var zflag_cid="14"; var zflag_sid="1"; var zflag_width="1"; var zflag_height="1"; var zflag_sz="94"; 
	</script>
	<script language="JavaScript" src="http://d8.zedo.com/jsc/d8/fo.js"></script>
	<!-- end ZEDO for channel:  Slider - Portal , publisher: Team BHP , Ad Dimension: Slider - 1 x 1 -->
	
</div><!-- page wrapper -->
  </div> <!-- bgholder -->
</body>
</html>
