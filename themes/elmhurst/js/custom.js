
	$('#myCarousel').carousel({
		interval:   4000
	});
	$(document).ready(function(){

$('.list-title').click(function(){
    $(this).toggleClass('open');
	$(this).next().toggleClass('active');
});

var device_width = $(window).width()-30;
$(window).resize(function(){
 var device_width = $(window).width()-30;
 if(device_width<=1200){
    $('.table-responsive.table-one').css('width',device_width+'px');
}
});
if(device_width<=1200){
    $('.table-responsive.table-one').css('width',device_width+'px');
}

$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top-60
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
if($('.activateAppearAnimation').length){
    nekoAnimAppear();

}

function nekoAnimAppear(){
    $("[data-nekoAnim]").each(function() {

        var $this = $(this);

        $this.addClass("nekoAnim-invisible");
        
        if($(window).width() > 767) {
            
            $this.appear(function() {
  var delay = ($this.data("nekodelay") ? $this.data("nekodelay") : 1);
                if(delay > 1) $this.css("animation-delay", delay + "ms");

                $this.addClass("nekoAnim-animated");
                $this.addClass('nekoAnim-'+$this.data("nekoanim"));

                setTimeout(function() {
                    $this.addClass("nekoAnim-visible");
                }, delay);

          
                var delay = ($this.data("nekodelay") ? $this.data("nekodelay") : 1);
                if(delay > 1) $this.css("animation-delay", delay + "ms");

                $this.addClass("nekoAnim-animated");
                $this.addClass('nekoAnim-'+$this.data("nekoanim"));

                setTimeout(function() {
                    $this.addClass("nekoAnim-visible");
                }, delay);

            }, {accX: 0, accY: -150});

        } else {
            $this.addClass("nekoAnim-visible");
        }
    });
}
		});
		
		
		
		
		   
    

		