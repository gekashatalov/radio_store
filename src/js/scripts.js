window.onload = function(){
    let btnNav = $('.nav-trigger');
    let btnNavOpen = new Trigger($('.header_menu'));

    btnNav.on('click', btnNavOpen.active);


    let btnBuy = $('.best__deals_body-card-buy');
    console.log(btnBuy);

    btnBuy.on('click', function(){
        console.log($(this).parents().eq(1).find('.best__deals_body-card-price-actual').html());
    });


};

function Trigger(block, span){
    this.block = block;
    this.span = span;
    let context = this;

    context.active = function(){
        if(context.span){
            context.span.toggleClass('open');
            context.block.slideToggle();
        } else {
            context.block.slideToggle();
            
        }
    };

    // context.onlySlide = function(){
    //     context.block.slideToggle();
    // };
}
