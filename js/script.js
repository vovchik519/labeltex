new Swiper(".bestsellers__wrap", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1.07,
      spaceBetween: "4%",
    },
    1080: {
      slidesPerView: 4,
      spaceBetween: "1.3%",
    },
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
  },
});
new Swiper(".jacquard__labels-image-wrapper", {
  breakpoints: {
    320: {
      slidesPerView: 2,
      spaceBetween: "3%",
      scrollbar: {
        el: ".swiper-scrollbar",
      },
    },
    1080: {
      slidesPerView: 4,
      slidesPerGroup: 4,
      spaceBetween: "1%",
      pagination: {
        el: ".swiper-pagination",
      },
    },
  },
});
new Swiper(".recommendation-slider__wrap", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 2,
      spaceBetween: "4%",
    },
    1080: {
      slidesPerView: 6,
      spaceBetween: "1.3%",
    },
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
  },
});
new Swiper(".popular__container", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: "4%",
    },
    1080: {
      slidesPerView: 4,
      slidesPerGroup: 4,
      spaceBetween: "1.3%",
    },
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
  },
  speed: 900,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
});
new Swiper(".popular__container", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: "4%",
    },
    1080: {
      slidesPerView: 4,
      slidesPerGroup: 4,
      spaceBetween: "1.3%",
    },
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
  },
  speed: 900,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
});
new Swiper(".header__main", {
  slideToClickedSlide: false,
  slidesPerView: 1,
  speed: 900,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  autoplay: {
    delay: 4000,
  },
});
new Swiper(".article__wrapper", {
  breakpoints: {
    320: {
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: "4%",
    },
    1080: {
      slidesPerView: 3,
      slidesPerGroup: 3,
      spaceBetween: "1.3%",
    },
    speed: 900,
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
  },
});
new Swiper(".page__review-item-img-wrapper", {
  breakpoints: {
    320: {
      spaceBetween: "7%",
      slidesPerView: 1,
      scrollbar: {
        el: ".swiper-scrollbar",
      },
    },
    1080: {
      spaceBetween: "3%",
      slidesPerView: 1,
      scrollbar: {
        el: false,
      },
    },
  },
});
new Swiper(".goods__left-slider", {
  slidesPerView: 1,
  pagination: {
    el: ".swiper-pagination",
  },
});
var header = $(".header__menu-wrapper, .feedback");
scrollPrev = 0;

$(window).scroll(function () {
  var scrolled = $(window).scrollTop();

  if (scrolled > 150 && scrolled > scrollPrev) {
    header.addClass("out");
  } else {
    header.removeClass("out");
  }
  scrollPrev = scrolled;
});
var headerNav = $(".header__nav");
var headerItem = $(".item__menu-wrapper");
$(window).scroll(function () {
  var scrolled = $(window).scrollTop();

  if (scrolled > -10 && scrolled > scrollPrev) {
    header.addClass("out");
  } else {
    headerNav.removeClass("hidden");
    headerItem.removeClass("active");
  }
  scrollPrev = scrolled;
});
let bodyHeight = $(window).height();
let heightPopUp = document.getElementById("popUpMenuWrap").clientHeight;
let heightHeader = document.getElementById("header__menu-wrapper").clientHeight;
let hHeaderMainDesk = bodyHeight - heightHeader + "px";
let hHeaderMainMobile = (bodyHeight - heightHeader) / 2 + "px";
let h = heightPopUp + "px";
let hHeader = heightHeader + "px";
let menuHeight = document.querySelectorAll(".popUpMenu");
let headerMain = document.querySelectorAll(
  ".header__main-info, .header__main-image"
);
headerMain.forEach((height) => (height.style.height = hHeaderMainDesk));
if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
  headerMain.forEach((height) => (height.style.height = hHeaderMainMobile));
}
let mainMarginTop = document.querySelectorAll(".main");
menuHeight.forEach((height) => (height.style.height = h));
mainMarginTop.forEach((mt) => (mt.style.marginTop = hHeader));
$(document).ready(function () {
  $(".header__burger").click(function (event) {
    $(".header__burger, .header__nav").toggleClass("active");
    $(".auth-mobile").toggleClass("visible");
    $("body").toggleClass("lock");
    $(".item__menu-wrapper").removeClass("active");
    $(".header__nav").removeClass("hidden");
    $(
      ".popup-wrapper, .authorization__wrapper, .authorization__login-wrap, .authorization-login, .authorization-register, .authorization__register-wrap, .authorization__recovery-wrap"
    ).removeClass("active");
  });
  $(".item__menu-name").click(function (e) {
    $(".header__nav").removeClass("hidden");
    $(".item__menu-wrapper").removeClass("active");
    e.stopPropagation();
  });
  $(".nav__item").click(function (event) {
    $(".item__menu-wrapper").removeClass("active");
    $(this).find(".item__menu-wrapper").toggleClass("active");
    $(
      ".popup-wrapper, .authorization__wrapper, .authorization__login-wrap, .authorization-login, .authorization-register, .authorization__register-wrap, .authorization__recovery-wrap"
    ).removeClass("active");
    if ($(".item__menu-wrapper").hasClass("active")) {
      $(".header__nav").addClass("hidden");
      $(".header__nav").animate({ scrollTop: 0 }, "fast");
    }
  });
  $(".important-exit").click(function (e) {
    $(".header__nav").removeClass("hidden");
    $(".item__menu-wrapper").removeClass("active");
    $(".item__menu-wrapper").addClass("novisible");
    setTimeout(function () {
      $(".item__menu-wrapper").removeClass("novisible", 1000);
    }, 1000);
    e.stopPropagation();
  });
  $(".item__menu li").click(function (e) {
    $("ul").removeClass("active");
    $(this).find("ul").toggleClass("active");
  });
  $(".item__menu li").click(function (e) {
    if ($(".item__menu li").hasClass("active")) {
      $("li").removeClass("active");
    }
    $(this).toggleClass("active");
  });
});
let inputs = document.querySelectorAll(".input__file");
Array.prototype.forEach.call(inputs, function (input) {
  let label = input.nextElementSibling,
    labelVal = label.querySelector(".popup__file-button-text").innerText;

  input.addEventListener("change", function (e) {
    let countFiles = "";
    if (this.files && this.files.length >= 1) countFiles = this.files.length;

    if (countFiles)
      label.querySelector(".popup__file-button-text").innerText =
        "Выбрано файлов: " + countFiles;
    else label.querySelector(".popup__file-button-text").innerText = labelVal;
  });
});
class Rating {
  constructor(dom) {
    dom.innerHTML = '<svg width="110" height="20"></svg>';
    this.svg = dom.querySelector("svg");
    for (var i = 0; i < 5; i++)
      this.svg.innerHTML += `<polygon data-value="${i + 1}"
           transform="translate(${i * 22},0)" 
           points="10,1 4,19.8 19,7.8 1,7.8 16,19.8">`;
    this.svg.onclick = (e) => this.change(e);
    this.render();
  }

  change(e) {
    let value = e.target.dataset.value;
    value && (this.svg.parentNode.dataset.value = value);
    this.render();
  }

  render() {
    this.svg.querySelectorAll("polygon").forEach((star) => {
      let on = +this.svg.parentNode.dataset.value >= +star.dataset.value;
      star.classList.toggle("active", on);
    });
  }
}
document.querySelectorAll(".rating").forEach((dom) => new Rating(dom));
$(document).ready(function () {
  $(".extra-auth, .auth-mobile").click(function (e) {
    $(
      ".header__burger, .header__nav, .item__menu-wrapper, .message__wrap, .review__wrap, .subscription__wrap, .popup-wrapper, .popup__wrapper, .request__wrap, .message__wrap, .review__wrap"
    ).removeClass("active");
    $(
      ".popup-wrapper, .authorization__wrapper, .authorization__login-wrap, .authorization-login"
    ).addClass("active");
    $(".auth-mobile").removeClass("visible");
    $("body").addClass("lock");
  });
  $(".authorization-exit").click(function (event) {
    $(
      ".popup-wrapper, .authorization__wrapper, .authorization__login-wrap, .authorization-login, .authorization-register, .authorization__register-wrap, .authorization__recovery-wrap"
    ).removeClass("active");
    $("body").removeClass("lock");
  });
  $(".authorization-register").click(function (event) {
    $(".authorization-register, .authorization__register-wrap").addClass(
      "active"
    );
    $(
      ".authorization-login, .authorization__login-wrap, .authorization__recovery-wrap"
    ).removeClass("active");
  });
  $(".authorization-login").click(function (event) {
    $(".authorization-login, .authorization__login-wrap").addClass("active");
    $(
      ".authorization-register, .authorization__register-wrap, .authorization__recovery-wrap"
    ).removeClass("active");
  });
  $(".authorization__recovery-subinfo").click(function (event) {
    $(".authorization__recovery-wrap").addClass("active");
    $(
      ".authorization-register, .authorization__register-wrap, .authorization-login, .authorization__login-wrap"
    ).removeClass("active");
  });
  $(".authorization__login-subinfo").click(function (event) {
    $(".authorization-login, .authorization__login-wrap").addClass("active");
    $(
      ".authorization-register, .authorization__register-wrap, .authorization__recovery-wrap"
    ).removeClass("active");
  });
  $(".authorization__register-subinfo").click(function (event) {
    $(".authorization-register, .authorization__register-wrap").addClass(
      "active"
    );
    $(
      ".authorization-login, .authorization__login-wrap, .authorization__recovery-wrap"
    ).removeClass("active");
  });
  $(".item__subinfo-request").click(function (e) {
    $(
      ".popup-wrapper, .authorization__wrapper, .authorization__login-wrap, .authorization-login, .authorization-register, .authorization__register-wrap, .authorization__recovery-wrap"
    ).removeClass("active");
    $(".popup-wrapper, .popup__wrapper, .request__wrap").addClass("active");
    $("body").addClass("lock");
    $(
      ".header__burger, .header__nav, .item__menu-wrapper, .message__wrap, .review__wrap, .subscription__wrap"
    ).removeClass("active");
    $(".auth-mobile").removeClass("visible");
    $(".item__menu-wrapper").addClass("novisible");
    setTimeout(function () {
      $(".item__menu-wrapper").removeClass("novisible", 1000);
    }, 1000);
    e.stopPropagation();
  });
  $(".item__subinfo-message").click(function (e) {
    $(
      ".popup-wrapper, .authorization__wrapper, .authorization__login-wrap, .authorization-login, .authorization-register, .authorization__register-wrap, .authorization__recovery-wrap"
    ).removeClass("active");
    $(".popup-wrapper, .popup__wrapper, .message__wrap").addClass("active");
    $("body").addClass("lock");
    $(
      ".header__burger, .header__nav, .item__menu-wrapper, .request__wrap, .review__wrap, .subscription__wrap"
    ).removeClass("active");
    $(".auth-mobile").removeClass("visible");
    $(".item__menu-wrapper").addClass("novisible");
    setTimeout(function () {
      $(".item__menu-wrapper").removeClass("novisible", 1000);
    }, 1000);
    e.stopPropagation();
  });
  $(".item__subinfo-review").click(function (e) {
    $(
      ".popup-wrapper, .authorization__wrapper, .authorization__login-wrap, .authorization-login, .authorization-register, .authorization__register-wrap, .authorization__recovery-wrap"
    ).removeClass("active");
    $(".popup-wrapper, .popup__wrapper, .review__wrap").addClass("active");
    $("body").addClass("lock");
    $(
      ".header__burger, .header__nav, .item__menu-wrapper, .request__wrap, .message__wrap, .subscription__wrap"
    ).removeClass("active");
    $(".auth-mobile").removeClass("visible");
    $(".item__menu-wrapper").addClass("novisible");
    setTimeout(function () {
      $(".item__menu-wrapper").removeClass("novisible", 1000);
    }, 1000);
    e.stopPropagation();
  });
  $(".item__subinfo-subscription").click(function (e) {
    $(
      ".popup-wrapper, .authorization__wrapper, .authorization__login-wrap, .authorization-login, .authorization-register, .authorization__register-wrap, .authorization__recovery-wrap"
    ).removeClass("active");
    $(".popup-wrapper, .popup__wrapper, .subscription__wrap").addClass(
      "active"
    );
    $("body").addClass("lock");
    $(
      ".header__burger, .header__nav, .item__menu-wrapper, .request__wrap, .message__wrap, .review__wrap"
    ).removeClass("active");
    $(".auth-mobile").removeClass("visible");
    $(".item__menu-wrapper").addClass("novisible");
    setTimeout(function () {
      $(".item__menu-wrapper").removeClass("novisible", 1000);
    }, 1000);
    e.stopPropagation();
  });
  $(".popup__exit").click(function (e) {
    $(
      ".popup-wrapper, .popup__wrapper, .request__wrap, .message__wrap, .review__wrap, .subscription__wrap"
    ).removeClass("active");
    $("body").removeClass("lock");
  });
  $(".extra__menu-search").click(function (event) {
    $(".search__wrapper, .search-info").toggleClass("active");
    $(
      ".search__wrapper, .search-info-amount, .search__container, .search__scroll-wrap"
    ).removeClass("activeAll");
  });
  $(".search-exit").click(function (event) {
    $(".search__wrapper, .search-info").removeClass("active");
    $(
      ".search__wrapper, .search-info-amount, .search__container, .search__scroll-wrap"
    ).removeClass("activeAll");
  });
  $(".personal__area-top-all").click(function (event) {
    $(".personal__area-order-wrap, .personal__area-top-all").addClass("active");
    $(".personal__area-data-wrap, personal__area-top-data").removeClass(
      "active"
    );
  });
  $(".personal__area-top-data").click(function (event) {
    $(".personal__area-data-wrap, personal__area-top-data").addClass("active");
    $(".personal__area-order-wrap, .personal__area-top-all").removeClass(
      "active"
    );
  });
  // удалить, сделано для примера
  $(".search__form-input").click(function (event) {
    $(
      ".search__wrapper, .search-info-amount, .search__container, .search__scroll-wrap"
    ).addClass("activeAll");
    $(".search__wrapper, .search-info").removeClass("active");
  });
  // удалить, сделано для примера
});
