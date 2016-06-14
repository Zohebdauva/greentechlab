$(window).load(function(){
	$('#pageloaderdefault').fadeOut(500).hide();
	$('body').removeClass('nofloting');
})
$(document).ready(function(){
	$(function(){
        var wh = $(window).height();
		var mn = wh;

        $('body').css('min-height' , wh);
		$('.bannar_container_wrap .bannarsliderwrap').css('min-height' , mn);
        if($(window).width() > 1200){
            var bp = mn - 
            $('.bannar_container_wrap .bannarsliderwrap').css('min-height' , mn);
        }
	})

    $('#resmenubtn').on('click',function(){
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).siblings('.menu').slideUp(500);
        }
        else{
            $(this).addClass('active');
            $(this).siblings('.menu').slideDown(500);
        }
    })

})
function changemenuhref() {
    $('#primarymenu > li').each( function () {
        var a = $(this).find('a')
        var ah = 'index.php' + $(a).attr('href');
        $(a).attr('href', ah);        
        if($(this).hasClass('referwrap')){
            $(a).attr('href','javascript:void(0);');        
        }
    });
}
function homeready() {
    $('#backgroundslider').carouFredSel({
        width: '100%',
        auto: false,
        responsive: true,
        items: {
            visible: 1,
        },
        scroll: {
            items: 1,
            duration: 500,
            timeoutDuration: 500,
        },
        swipe: {
            onMouse: true,
            onTouch: true,
        },
        prev: '#prevbut',
        next: '#nextbut'
    });       
}