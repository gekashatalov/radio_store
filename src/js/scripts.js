window.onload = function(){
    let btnNav = $('.nav-trigger');
    let btnNavOpen = $('.menu');
    btnNav.on('click', open);


    function open (){
        btnNavOpen.toggleClass('open');
    }

}
