$(function(){
    $('nav.mobile').click(function(){
        //O que vai acontecer quando clicarmos na nav mobile
        var listaMenu = $('nav.mobile ul')

        //Abrir menu com fadeIn
        /*
        if(listaMenu.is(':hidden') == true){
            listaMenu.fadeIn();
        }
        else{
            listaMenu.fadeOut();
        }
        */
        if(listaMenu.is(':hidden') == true){

            var icone = $('.btn-menu-mobile').find('i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            listaMenu.slideToggle();
        }
        else{
            var icone = $('.btn-menu-mobile').find('i');
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenu.slideToggle();
        }
       
    })
})