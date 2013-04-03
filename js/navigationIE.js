jQuery(document).ready(function()

{
	jQuery("#content-pane").fadeIn(800);
	jQuery("#mid-wrapper").fadeIn(800);
	jQuery("#right-wrapper").fadeIn(800);
	/*var fc=jQuery("#footer-container");*/
	/*var height=(jQuery(window).height()-jQuery('#header-container').height()-jQuery('#footer-container').height());
	if(jQuery('#mid').height()<height&&jQuery('#main-container').height()<jQuery(window).height())
	{
		jQuery("#mid").css("height",height.toString()+'px');
	}*/




	//===== Banner Ribbon Effect =====
	jQuery("html").css("display","block");
	var wid=jQuery("#banner img").width();
	jQuery("#banner img").css("width",wid.toString()+"px");
	jQuery("#banner img").css("left","-10px");



	jQuery("#mod-search-searchword").focus(function()
	{
		jQuery(this).css("background-color","#1e8098");
		jQuery("#mod-search-button").css("background-color","#1e8098");

		jQuery(this).css("color","#eaeaea");
			jQuery("#mod-search-searchword").animate({
				width: "75%"
				},500);

	}
	);
	jQuery("#searchbar form input").blur(function()
	{
		jQuery(this).css("background-color","#3d3f3f");
		jQuery("#mod-search-button").css("background-color","#3d3f3f");
		jQuery(this).css("color","#828282");
		jQuery("#mod-search-searchword").animate({
			width: "60%"
		},500);
	}
	);
	var ys;
	if(jQuery("#main-nav ul.menu li ul .current").length>0)
	{
		jQuery("#main-nav ul.menu li ul .current").parent().show();
		ys=jQuery("#main-nav ul.menu li ul .current").position().top;
	}
	var cnt=0;
	var y=0;
	var h=jQuery("#main-nav ul.menu li").height();
	var ox=jQuery("#main-nav").offset().left;
	var oy=jQuery("#main-nav").offset().top;
	jQuery("#main-nav ul.menu li.deeper.parent.current").find("ul").show();

	//===== Selector Show =====
	var h2=0;
	jQuery("#main-nav-selector-f").show();
	if(jQuery("#main-nav ul.menu li.current").length==0)
	{
		y=jQuery("#main-nav ul.menu li").position().top;
		h2=jQuery("#main-nav ul.menu li").height();
	}
	else
	{
		y=jQuery("#main-nav ul.menu li.current").position().top;
		h2=jQuery("#main-nav ul.menu li.current").height();
		jQuery("#main-nav-selector-s").css("top",y.toString()+"px");
		jQuery("#main-nav-selector-s").show();
		jQuery("#main-nav-selector-s").css("height",h.toString()+"px");
		jQuery("#main-nav-current").css("top",y.toString()+"px");
		jQuery("#main-nav-current").css("height",h.toString()+"px");
		jQuery("#main-nav-current").show();

	}
	if(jQuery("#main-nav ul.menu li ul .current").length>0)
	{
		jQuery("#main-nav ul.menu li.active ul .current").parent().css("color","#fff");
		jQuery("#main-nav-current").animate({
			width: "73%"
		},500);
		jQuery("#main-nav-selector-s").animate({
			width: "27%"
		},500);
		h2=jQuery("#main-nav ul.menu li.active").height();
		y=jQuery("#main-nav ul.menu li.active").position().top;
	}
	else
	{
		if(jQuery("#main-nav ul.menu .current").length>0)
		{
			jQuery("#main-nav-current").animate({
				width: "89%"
			},500);
			jQuery("#main-nav-selector-s").animate({
				width: "11%"
			},500);
		}

		if(jQuery("#main-nav ul.menu li ul .current").length>0)
		{
			jQuery("#main-nav-selector-s").css("top",y.toString()+"px");
			jQuery("#main-nav-selector-s").show();
			jQuery("#main-nav-selector-s").css("height",h.toString()+"px");
			jQuery("#main-nav-selector-s").animate({
				width: "11%"
			},500);
		}

	}

	jQuery("#main-nav-selector-f").animate({
		top:y.toString(),
		height:h2.toString()
	},200);
		
	//===== First Selector Move =====
	jQuery("#main-nav").mouseleave(function()
	{
		jQuery("#main-nav-selector-f").animate({
		top:y.toString(),
		height:h2.toString()
		},200);
	}
	);
	jQuery("#main-nav ul.menu").mouseenter(function(e)
	{
		var e = e||window.event;
		var yy = e.clientY+document.body.scrollTop+document.documentElement.scrollTop ; 
		jQuery("#main-nav-selector-f").animate({
			top:(yy-oy).toString()-jQuery("#main-nav ul.menu li").height()/2,
			height: h.toString()
			 },0);
	}
	);

	jQuery('#main-nav ul.menu').mousemove(function(e)
	{
		var e = e||window.event;
		var yy = e.clientY+document.body.scrollTop+document.documentElement.scrollTop ; 
		jQuery("#main-nav-selector-f").animate({
			top:(yy-oy).toString()-jQuery("#main-nav ul.menu li").height()/2,
			height: h.toString()
			 },0);
	}
	);

	//===== Second Selector Move =====
	if(jQuery("#main-nav ul.menu li ul .current").length>0)
	{
		jQuery('#main-nav ul.menu li ul .current').mouseenter(function(e)
		{
			jQuery("#main-nav-current").animate({
				width: '85%'
			},200);
			jQuery("#main-nav-selector-s").animate({
				width: '15%'
			},200);
		}
		);
		jQuery('#main-nav ul.menu li ul .current').mouseleave(function(e)
		{
			jQuery("#main-nav-selector-s").animate({
				width: '27%'
			},200);
			jQuery("#main-nav-current").animate({
				width: '73%'
			},200);
		}
		);
	}
	else
	{
		jQuery('#main-nav ul.menu li.current').mouseenter(function(e)
		{
			jQuery("#main-nav-current").animate({
				width: '100%'
			},200);
			jQuery("#main-nav-selector-s").animate({
				width: '0'
			},200);
		}
		);
		jQuery('#main-nav ul.menu li.current').mouseleave(function(e)
		{
			jQuery("#main-nav-selector-s").animate({
				width: '11%'
			},200);
			jQuery("#main-nav-current").animate({
				width: '89%'
			},200);
		}
		);
	}

	//==== Class Add/Remove ===
	/*jQuery('body').mousemove(function(e) { 
		var xx = e.originalEvent.x || e.originalEvent.layerX || 0; 

		jQuery("#main-nav ul li:not(.deeper.parent.current ul li)").mouseenter(function()
		{
			jQuery(this).addClass("active");
		}
		);
		jQuery("#main-nav ul li.deeper.parent.current ul li").mouseenter(function()
		{
			jQuery(this).parent().parent().addClass("active");
		}
		);

		jQuery("#main-nav ul li:not(.current)").mouseleave(function()
		{
			jQuery(this).removeClass("active");
			jQuery(this).find("ul").removeClass("active");
		}
		);
	}
	);*/

}
); 

