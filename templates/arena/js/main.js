$(".btn-button").click(function() {
    $("." + $(this).attr("data-class")).toggleClass("active");
    $(this).toggleClass("active");
});

$(".drop-button").click(function() {
    $(this).toggleClass("active");
    $('.' + $(this).attr('data-tab')).slideToggle();
});

$(document).ready(function() {
    var overlay = $('#overlay');
    var open_modal = $('.open_modal');
    var close = $('.modal_close, #overlay');
    var modal = $('.modal_div');
    open_modal.click(function(event) {
        event.preventDefault();
        var div = $(this).attr('href');
        overlay.fadeIn(400,
            function() {
                $(div)
                    .css('display', 'block')
                    .animate({
                        opacity: 1,
                        top: '20%'
                    }, 200);
            });
    });

    close.click(function() {
        modal
            .animate({
                    opacity: 0,
                    top: '15%'
                }, 200,
                function() {
                    $(this).css('display', 'none');
                    overlay.fadeOut(400);
                }
            );
    });
});


var mediaQuery = window.matchMedia('(min-width: 1390px)');

if (mediaQuery.matches) {
    // Paralax
    $(document).on('mousemove', function(e) {
        var amountMovedX = 200 - 30 * ((e.pageX + 1) / $(document).width());
        var amountMovedY = 200 - 30 * ((e.pageY + 1) / $(window).height());

        $('#move-object').css({
            'margin-right': '-' + amountMovedX + 'px',
            'margin-top': '-' + amountMovedY + 'px'
        });
    });
}

var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < selElmnt.length; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            h = this.parentNode.previousSibling;
            for (i = 0; i < s.length; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    for (k = 0; k < y.length; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
}

function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    for (i = 0; i < y.length; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < x.length; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);





var res = $(".dropDown-menu");
$('[data-class^="m"]').on("click", funk);

$(document).click(function(e) {
    if ($(e.target).closest(res).length || $(e.target).closest('.menu-a').length) return;
    res.fadeOut(100);
});

function funk() {
    $(this).toggleClass("show");
    var link = $(this).attr('data-class'),
        el = $('.dropDown-menu.' + link);
    if (el.css("display") == "none") {
        res.hide();
        el.slideToggle(400);
    } else {
        el.slideToggle(400);
    }
}

$(function() {
    function ScrolClass() {
        if ($(this).scrollTop() != 0) {
            $('.header').addClass('topPanel-top');
        } else {
            $('.header').removeClass('topPanel-top');
        }
    }
    $(window).scroll(function() {
        ScrolClass();
    });
    $(document).ready(function() {
        ScrolClass();
    });
});

$(".buttonDrop").click(function() {
    $("." + $(this).attr("data-class")).toggleClass("active");
    $(this).toggleClass("active");
});


$('.tab-button').click(function() {
    $('.tab-button').removeClass('active');
    $(this).addClass('active');
    $('.tab-block').removeClass('active');
    $('#' + $(this).attr('data-tab')).addClass('active');
})


$(document).ready(function() {
    var overlay = $('#overlay');
    var open_modal = $('.open_modal');
    var close = $('.modal_close, #overlay');
    var modal = $('.modal_div');
    open_modal.click(function(event) {
        event.preventDefault();
        var div = $(this).attr('href');
        overlay.fadeIn(400,
            function() {
                $(div)
                    .css('display', 'flex')
                    .animate({
                        opacity: 1,
                        top: '0px'
                    }, 200);
            });
    });

    close.click(function() {
        modal
            .animate({
                    opacity: 0,
                    top: '0px'
                }, 200,
                function() {
                    $(this).css('display', 'none');
                    overlay.fadeOut(400);
                }
            );
    });
});

var swiper = new Swiper('.swiper-banner', {
    speed: 1200,
    autoplay: {
        delay: 5000,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 20,
    slidesPerView: 5,
    loop: true,
    freeMode: true,
    loopedSlides: 5, //looped slides should be the same
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    breakpoints: {
        575: {
            slidesPerView: 2,
            spaceBetween: 5,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
    }
});

var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    speed: 1200,
    loop: true,
    loopedSlides: 6, //looped slides should be the same
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    thumbs: {
        swiper: galleryThumbs,
    },
});