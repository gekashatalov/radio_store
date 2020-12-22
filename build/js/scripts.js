$(function(){
    let btnNav = $('.nav-trigger');
    let sliderPrev = $('.slider_prev');
    let sliderNext = $('.slider_next');
    let btnBasket = $('.header_basket');
    let basket  = document.querySelector('.block_basket');
    let btnBasketClose = $('.backet-close');
    let basketBlock = document.querySelector('.block_basket-goods');
    let btnCheckout = $('.block_basket-checkout');
    let form = $('.form-checkout');
    let btnFormClose = $('.form-close');
    let total_price = 0;
    let total_items = 0;

    let owl = $('.best__deals_body').owlCarousel({
        loop: true,
        autoplay:true,
        autoplayTimeout: 2000,
        autoplayHoverPause:true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            500: {
                items: 2,
                nav: true
            },
            768: {
                items: 3,
                nav: true
            },
            1024: {
                items: 4,
                nav: true
            }
        }
    });
    $('.best__deals_header-btnNext').click(function() {
        owl.trigger('next.owl.carousel');
    });
    $('.best__deals_header-btnPrev').click(function() {
        owl.trigger('prev.owl.carousel');
    });

    let btnBuy = $('.best__deals_body-card-buy');
    let btnBuyClick = $('.best__deals_body-card-buyClick');



    let katalog = new Trigger({
        block: $('.header_catalog-list'),
        btn: $('.header_catalog-trigger'),
        span: $('.header_catalog-buter > span'),

    });

    let nav = new Trigger({
        block: $('.menu_left'),
        btn: btnNav,
        span: $('.menu')
    });

    let address = new Trigger({
        block: $('.address_block'),
        btn: $('.header_address'),
        span: $('.header_address > i > img')
    });

    let slider = new Slider($('.slider'));
    sliderPrev.on('click', slider.prev);
    sliderNext.on('click', slider.next);
    function auto() {
        slider.next();
    }

    setInterval(auto, 3000);

    btnBasket.on('click', function(){
        basket.style.display = 'flex';
    });

    btnBasketClose.on('click', function(){
        basket.style.display = 'none';
        $('.overlay').removeClass('overlay_open');
    });

    btnCheckout.on('click', formOpen);

    btnBuyClick.on('click', formOpen);

    btnFormClose.on('click', formClose);

    function formOpen (){
        $('.block_form').css('display', 'flex');
    };

    function formClose (){
        $('.block_form').css('display', 'none');
    };



    btnBuy.on('click', function(){
        let card = $(this).parents('.best__deals_body-card').clone()[0];
        let count = parseFloat($(this).parents('.best__deals_body-card').attr('data-count'));
        let price = parseFloat($(this).parents('.best__deals_body-card').find('.best__deals_body-card-price-actual').attr('data-price'));
        sum(price);
        total_items++;
        $('.goods_count').html(total_items);
        basketBlock.insertAdjacentElement('afterbegin', card);
        
    });

    $('body>div').remove(); // удаление блока что подставляется zzz.com.ua

    function sum(actual){
        total_price = total_price + actual;
        $('.total_price').html(total_price.toFixed(2) + 'грн');
    }

    
    form.validate({
        rules: {
            name: "required",
            tel: {
                required: true,
                digits: true
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {            
            name: "Введите Ваше имя",
            tel: {
                required: "Введите номер телефона",
                digits: "Введи телефон в формате: 38(___) ___ ___"
            },
            email: {
                required: "Нам необходим Ваш email адресс для оформления заказа",
                email: "Ваш email адресс должен быть в формате name@domain.com"
            }
        }
    });


});

function Trigger(obj){
    this.block = obj.block;
    this.btn = obj.btn;
    this.span = obj.span || false;
    this.overlay = $('.overlay');
    this.document = $(document);
    let context = this;
    let open = false;

    context.active = function(){
        
        if(context.span){
            context.span.toggleClass('open');
            context.block.slideToggle();

        } else {
            context.block.slideToggle();
        }
    };

    context.close = function(e){

            
            if (context.span){
                if(!context.block.is(e.target) && context.block.has(e.target).length === 0  && !context.btn.is(e.target) && context.btn.has(e.target).length === 0 && !context.span.is(e.target) && context.span.has(e.target).length === 0){
                    context.block.slideUp();
                    context.span.removeClass('open');
                }
    
            } else {
                if(!context.block.is(e.target) && context.block.has(e.target).length === 0  && !context.btn.is(e.target) && context.btn.has(e.target).length === 0 ){
                    context.block.slideUp();
                }
            }
       
    }

    context.btn.on('click', context.active);

    context.document.on('click', context.close);

}

function Slider(slide) {
    this.slide = slide;
    let context = this.slide;

    var i = 0;

    this.prev = function () {
        context.eq(i).css('left', "0").stop().animate({
            left: '100%'
        }, 1000);
        i--;
        if (i < 0) {
            i = context.length - 1;
        }
        context.eq(i).css('left', '-100%').stop().animate({
            left: '0'
        }, 1000);
    }

    this.next = function () {
        context.eq(i).css('left', '0').stop().animate({
            left: '-100%'
        }, 1000);
        i++;
        if (i >= context.length - 1) {
            i = 0;
        }
        context.eq(i).css('left', '100%').stop().animate({
            left: 0
        }, 1000);
    }
}
