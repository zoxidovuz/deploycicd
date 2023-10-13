const overlayHandler = {
    open: () => {
        $('#overlay').addClass('active');
    },
    close: () => {
        $('#overlay').removeClass('active');
    },
};

const menuHandler = {
    open: () => {
        $('#menu').addClass('active');
    },
    close: () => {
        $('#menu').removeClass('active');
    },
};

const filterHandler = {
    open: () => {
        $('#modal-filter').addClass('active');
    },
    close: () => {
        $('#modal-filter').removeClass('active');
    },
};

const modalHandler = {
    open: () => {
        $('#modal').addClass('active');
    },
    close: () => {
        $('#modal').removeClass('active');
        $('.modal__item').removeClass('active');
    },
    openItem: (id) => {
        modalHandler.open();
        $(`#modal .modal__item[data-id="${id}"]`).addClass('active');
    },
    setProduct: (name) => {
        $('input[name="product_name"]').val(name);
    },
    openSuccess: () => {
        modalHandler.open();
        $('#modal .modal__item[data-id="modal-success"]').addClass('active');
    },
    openFail: () => {
        modalHandler.open();
        $('#modal .modal__item[data-id="modal-fail"]').addClass('active');
    },
};

const validatePhone = (phone) => {
    return (phone.length == 18);
}

const priceFormatter = new Intl.NumberFormat('ru-RU', {
    style: 'decimal',
    currency: 'RUB',
    minimumFractionDigits: 0,
    maximumFractionDigits: 0,
});

$(document).ready(function() {
    $('.js-show-all-prop').on('click', function() {
        $('.product__prop__group').removeClass('product__prop__group__hidden');
        $(this).hide();
    });

    $("input[type='tel']").mask("+9 (999)-999-99-99");
    $("input[type='tel']").keyup(function () {
        var $input = $(this);
        if ($input.val() == "+8") {
            $input.val("+7");
        }
        if ($input.val() == "+9") {
            $input.val("+7 (9");
        }
    });

    $('.product__thumb__slider').each(function(index) {
        let productID = $(this).closest('.product').attr('data-product-id');
        $(this).owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoHeight: true,
            navContainer: ".product__thumb__nav_" + productID,
            responsive:{
                0:{
                    items: 3,
                },
                1340:{
                    items: 4,
                }
            }
        });
    });

    $('.additional-products__list').owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        items: 3,
        autoHeight: true,
        mouseDrag: false,
        responsive:{
            0:{
                items: 1.4,
                margin: 10,
            },
            768:{
                items: 2,
                margin: 10,
            },
            1024:{
                items: 3,
                margin: 12,
            },
            1340:{
                items: 3,
                margin: 30,
            }
        }
    });

    $('.product__detail__slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        items: 1,
        autoHeight: true,
    });

    $('.product__gallery__mobile').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        items: 1,
        autoHeight: true,
    });

    $('.additional-products__thumb').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        items: 1,
        autoHeight: true,
    });

    $(document).on('click', '.js-product-thumb img', function() {
        let productID = $(this).closest('.product').attr('data-product-id');
        let imageDetailURL = $(this).attr('data-detail-img');

        $(`.product[data-product-id="${productID}"] .js-product-detail`).addClass('loader');
        $(`.product[data-product-id="${productID}"] .js-product-detail img`).attr('src', imageDetailURL);
        setTimeout(() => {
            $(`.product[data-product-id="${productID}"] .js-product-detail`).removeClass('loader'); 
        }, 500);
    });

    $('.js-scroll').click(function() {
        const href = $(this).attr("href");
        $("html, body").animate({scrollTop: ($(href).offset().top) + "px"});
    });

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 500) {
            if (window.innerWidth > 1024) {
                $('#fixed-header').slideDown(300);
            }

            $('.go-up').addClass('active');
        } else {
            if (window.innerWidth > 1024) {
                $('#fixed-header').slideUp(300);
            }

            $('.go-up').removeClass('active');
        }
    });

    $('.js-open-filter').on('click', function () {
        overlayHandler.open();
        filterHandler.open();
    });

    $('.js-close-filter').on('click', function () {
        overlayHandler.close();
        filterHandler.close();
    });

    $('.js-open-menu').on('click', function () {
        overlayHandler.open();
        menuHandler.open();
    });

    $('.js-close-menu').on('click', function () {
        overlayHandler.close();
        menuHandler.close();
    });

    $('.js-open-modal').on('click', function() {
        menuHandler.close();

        let formID = $(this).attr('data-form-id');
        let productName = $(this).attr('data-product-name');
        overlayHandler.open();
        modalHandler.openItem(formID);

        if (productName) {
            modalHandler.setProduct(productName);
        }        
    });

    $('.js-close-modal').on('click', function(e) {
        e.preventDefault();
        overlayHandler.close();
        modalHandler.close();
    });

    $('#overlay').on('click', function() {
        overlayHandler.close();
        menuHandler.close();
        filterHandler.close();
    });

    $('.js-toggle-filter').on('click', function() {
        $(this).siblings('.js-toggle-filter-field').slideToggle();
        $(this).toggleClass('active');
    });

    $('form[data-id="modal-form-callback"]').on('submit', function(e) {
        e.preventDefault();
        let error = false;
        let phone = $(this).find('input[type="tel"]');

        if (!validatePhone(phone.val())) {
            error = true;
            phone.addClass('error');
        }

        if (!error) {
            console.log('send-callback');
            console.log('phone: ' + phone.val());

            modalHandler.close();
            overlayHandler.open();
            modalHandler.open();
            modalHandler.openSuccess();
            setTimeout(() => {
                overlayHandler.close();
                modalHandler.close();
                phone.val('');
            }, 3000);

            /*
            $.ajax({
                url: '/ajax/send.php',
                method: "POST",
                data: {
                    'phone': phone.val(),
                },
                success: function() {
                    modalHandler.close();
                    overlayHandler.open();
                    modalHandler.open();
                    modalHandler.openSuccess();
                    setTimeout(() => {
                        overlayHandler.close();
                        modalHandler.close();
                        phone.val('');
                    }, 3000);
                },
                error: function() {
                    modalHandler.close();
                    overlayHandler.open();
                    modalHandler.open();
                    modalHandler.openFail();
                    setTimeout(() => {
                        overlayHandler.close();
                        modalHandler.close();
                    }, 3000);
                }
            });
            */
        }
    });

    $('form[data-id="modal-form-product"]').on('submit', function(e) {
        e.preventDefault();
        let error = false;
        let phone = $(this).find('input[type="tel"]');
        let product = $(this).find('input[name="product_name"]');

        if (!validatePhone(phone.val())) {
            error = true;
            phone.addClass('error');
        }

        if (product.val() == "") {
            error = true;
            product.addClass('error');
        }

        if (!error) {
            console.log('send-product');
            console.log('phone: ' + phone.val());
            console.log('product: ' + product.val());
            
            modalHandler.close();
            overlayHandler.open();
            modalHandler.open();
            modalHandler.openSuccess();
            setTimeout(() => {
                overlayHandler.close();
                modalHandler.close();
                phone.val('');
                product.val('');
            }, 3000);

            /*
            $.ajax({
                url: '/ajax/send.php',
                method: "POST",
                data: {
                    'phone': phone.val(),
                    'product': product.val(),
                },
                success: function() {
                    modalHandler.close();
                    overlayHandler.open();
                    modalHandler.open();
                    modalHandler.openSuccess();
                    setTimeout(() => {
                        overlayHandler.close();
                        modalHandler.close();
                        phone.val('');
                        product.val('');
                    }, 3000);
                },
                error: function() {
                    modalHandler.close();
                    overlayHandler.open();
                    modalHandler.open();
                    modalHandler.openFail();
                    setTimeout(() => {
                        overlayHandler.close();
                        modalHandler.close();
                    }, 3000);
                }
            });
            */
        }
    });

    $('input').on('click', function() {
        $(this).removeClass('error');
    });

    $('.catalog__sort__trigger').on('click', function() {
        $('.catalog__sort__list').toggleClass('active');
        $('.catalog__sort__trigger').toggleClass('active');
    });

    $('.catalog__sort__list input').on('click', function() {
        setTimeout(() => {
            $('.catalog__sort__list').removeClass('active');
            $('.catalog__sort__trigger').removeClass('active');
            
            $('.catalog__sort__trigger span').text($(this).siblings('label').text().toLowerCase());
        }, 500);
    });

    $('.js-custom-range').each(function() {
        let min = Number($(this).attr('data-min'));
        let max = Number($(this).attr('data-max'));

        $(this).slider({
            range: true,
            animate: "fast",
            values: [min, max],
            min: min,
            max: max,
        });
    });

    $('input[name="filter-price-min"]').on('input', function() {
        let val = $(this).val();
        let min = $('.js-custom-range').attr('data-min');
        let max = $('.js-custom-range').attr('data-max');
        let currentMax = $('input[name="filter-price-max"]').val();

        val = Number(val.replace(/\s/g, ''));
        currentMax = Number(currentMax.replace(/\s/g, ''));

        console.log(val);

        $(this).val(priceFormatter.format(val));
        $('.js-custom-range').slider("values", [val, currentMax]);

        if (isNaN(val)) {
            $(this).val(min);
            $('.js-custom-range').slider("values", [min, max]);
        }
    });

    $('input[name="filter-price-max"]').on('input', function() {
        let val = $(this).val();
        let min = $('.js-custom-range').attr('data-min');
        let max = $('.js-custom-range').attr('data-max');
        let currentMin = $('input[name="filter-price-min"]').val();

        val = Number(val.replace(/\s/g, ''));
        currentMin = Number(currentMin.replace(/\s/g, ''));

        console.log(val);

        $(this).val(priceFormatter.format(val));
        $('.js-custom-range').slider("values", [currentMin, val]);

        if (isNaN(val)) {
            $(this).val(max);
            $('.js-custom-range').slider("values", [min, max]);
        }
    });

    $(".js-custom-range").slider({
        slide: function(event, ui) {
            $('input[name="filter-price-min"]').val(priceFormatter.format(ui.values[0]));
            $('input[name="filter-price-max"]').val(priceFormatter.format(ui.values[1]));
        }
    });
});