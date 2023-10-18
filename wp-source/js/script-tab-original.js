document.addEventListener("DOMContentLoaded",
    function () {

        var tabs = document.querySelectorAll(".ration__tab");
        var blocks = document.querySelectorAll(".ration__block");
        var activeI = 0;


        for (var i = 0; i < tabs.length; i++) {
            (function (tabs, i) {
                tabs[i].addEventListener("click", function () {
                    if (!tabs[i].classList.contains("ration__tab--active")) {
                        tabs[activeI].classList.remove("ration__tab--active");
                        tabs[i].classList.add("ration__tab--active");
                        goToTab(i);
                    }

                });
            })(tabs, i);
        }

        function goToTab(i) {
            blocks[activeI].classList.remove("ration__block--active");
            blocks[i].classList.add("ration__block--active");
            activeI = i;
        }


        for (var i = 0; i < blocks.length - 1; i++) {
            // alert("blocks  " + i);

            (function (blocks, i) {


                var days = blocks[i].querySelectorAll(".ration__day");
                var info = blocks[i].querySelectorAll(".ration__info");
                var activeI2 = 0;
                info[0].classList.add("ration__info--active");

                for (var k = 0; k < days.length; k++) {
                    // alert("days  " + k);

                    (function (days, k) {
                        days[k].addEventListener("click", function () {
                            if (!days[k].classList.contains("ration__day--active")) {
                                days[activeI2].classList.remove("ration__day--active");
                                days[k].classList.add("ration__day--active");
                                goToTab2(k);
                            }

                        });
                    })(days, k);
                }
                function goToTab2(k) {
                    info[activeI2].classList.remove("ration__info--active");
                    info[k].classList.add("ration__info--active");
                    activeI2 = k;
                }


                for (var j = 0; j < info.length; j++) {
                    // alert("info  " + j);
                    (function (info, j) {

                        var periods = info[j].querySelectorAll(".ration__period-item");
                        var value = info[j].querySelectorAll(".ration__value-item");
                        var activeI3 = 0;
                        value[0].classList.add("ration__value-item--active");

                        for (var m = 0; m < periods.length; m++) {
                            // alert("periods  " + m);

                            (function (periods, m) {
                                periods[m].addEventListener("click", function () {
                                    if (!periods[m].classList.contains("ration__period-item--active")) {
                                        periods[activeI3].classList.remove("ration__period-item--active");
                                        periods[m].classList.add("ration__period-item--active");
                                        goToTab3(m);
                                        activeI3 = m;
                                    }

                                });
                            })(periods, m);
                        }
                        function goToTab3(m) {
                            value[activeI3].classList.remove("ration__value-item--active");
                            value[m].classList.add("ration__value-item--active");

                        }
                    })(info, j);
                }


            })(blocks, i);
        }


        var clientsNavigations = document.querySelectorAll(".clients__navigation-item");
        var clientsItems = document.querySelectorAll(".clients__reviews");
        var activeI4 = 0;


        for (var i = 0; i < clientsNavigations.length; i++) {
            (function (clientsNavigations, i) {
                clientsNavigations[i].addEventListener("click", function () {
                    if (!clientsNavigations[i].classList.contains("clients__navigation-item--active")) {

                        clientsNavigations[activeI4].classList.remove("clients__navigation-item--active");
                        clientsNavigations[i].classList.add("clients__navigation-item--active");
                        goToTab4(i);
                    }

                });
            })(clientsNavigations, i);
        }

        function goToTab4(i) {
            clientsItems[activeI4].classList.remove("clients__reviews--active");
            clientsItems[i].classList.add("clients__reviews--active");
            activeI4 = i;
        }


        var faqItems = document.querySelectorAll(".faq__item");
        var faqQuestion = document.querySelectorAll(".faq__question");


        for (var i = 0; i < faqItems.length; i++) {
            (function (faqItems, i) {
                faqItems[i].addEventListener("click", function () {
                    if (!faqItems[i].classList.contains("faq__item--show")) {
                        faqItems[i].classList.add("faq__item--show");
                        faqQuestion[i].querySelector(".faq__arrow").classList.add("faq__arrow--transform");
                    }
                    else {
                        faqItems[i].classList.remove("faq__item--show");
                        faqQuestion[i].querySelector(".faq__arrow").classList.remove("faq__arrow--transform");
                    }

                });
            })(faqItems, i);
        }


        window.onscroll = function () {
            var scrolled = window.pageYOffset || document.documentElement.scrollTop;
            var header = document.querySelector(".header");
            var phone = document.querySelector(".header__phone");

            if (scrolled > 0) {
                header.classList.add("header--scroll");
                phone.classList.add("header__phone--scroll");
            }
            else {
                header.classList.remove("header--scroll");
                phone.classList.remove("header__phone--scroll");
            }
        };


        var burger = document.querySelector(".header__burger");
        var mobileMenu = document.querySelector(".header__menu-mobile");


        burger.addEventListener("click", function () {
            if (mobileMenu.classList.contains("header__menu-mobile--active")) {
                mobileMenu.classList.remove("header__menu-mobile--active");
            }
            else {
                mobileMenu.classList.add("header__menu-mobile--active");
            }

        });


        var headerCall = document.querySelector(".header__call");
        var footerCall = document.querySelector(".footer__call");
        //var rationCall = document.querySelector(".ration__button");
        var mainCall = document.querySelector(".main__button");
        var popupForm = document.querySelector(".popup--form");
        var popupForm2 = document.querySelector(".popup--form2");
        var popupCloseF = document.querySelector(".popup--form .popup__close");
        var popupCloseF2 = document.querySelector(".popup--form2 .popup__close");

        mainCall.addEventListener("click", function () {

            if (popupForm.classList.contains("popup--show")) {
                popupForm.classList.remove("popup--show");
            }
            else {
                popupForm.classList.add("popup--show");
            }
        });
// jQuery(function($) {
//         //rationCall.addEventListener("click", function () {
// 			$('.ration__button').on('click', function() {
// 
//             if (popupForm2.classList.contains("popup--show")) {
//                 popupForm2.classList.remove("popup--show");
//             }
//             else {
//                 popupForm2.classList.add("popup--show");
//             }
//         });
// 	});

        footerCall.addEventListener("click", function () {

            if (popupForm.classList.contains("popup--show")) {
                popupForm.classList.remove("popup--show");
            }
            else {
                popupForm.classList.add("popup--show");
            }
        });

        headerCall.addEventListener("click", function () {

            if (popupForm.classList.contains("popup--show")) {
                popupForm.classList.remove("popup--show");
            }
            else {
                popupForm.classList.add("popup--show");
            }
        });

        popupCloseF.addEventListener("click", function () {
            popupForm.classList.remove("popup--show");
        });
		
		popupCloseF2.addEventListener("click", function () {
            popupForm2.classList.remove("popup--show");
        });

        var popupButton = document.querySelector(".popup--form .general__form-button");
        var popupThanks = document.querySelector(".popup--thanks");
        var popupCloseT = document.querySelector(".popup--thanks .popup__close");


        // popupButton.addEventListener("click", function (e) {
        //     e.preventDefault();
        //     popupForm.classList.remove("popup--show");
        //     popupThanks.classList.add("popup--show");
        // });
        popupCloseT.addEventListener("click", function () {
            popupThanks.classList.remove("popup--show");
        });

        popupForm.addEventListener('wpcf7mailsent', function (event) {  // change to sent on server
            popupForm.classList.remove("popup--show");
            popupThanks.classList.add("popup--show");
        }, false);


        var questionForm = document.querySelector(".questions .general__form");
        var rationForm = document.querySelector(".ration .general__form");

        questionForm.addEventListener('wpcf7mailsent', function (event) {  // change to sent on server
            location = 'http://dailyfood.pro/thanks-for-form/';
        }, false);
        rationForm.addEventListener('wpcf7mailsent', function (event) {  // change to sent on server
            location = 'http://dailyfood.pro/thanks-for-form/';
        }, false);


    });

