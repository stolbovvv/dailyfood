/* global Splide Swiper */

class Popup {
  constructor(element, { activeClass = 'is-active', needLock = true } = {}) {
    this.popupRoot = typeof element === 'string' ? document.querySelector(element) : element;

    if (this.popupRoot) {
      this.popupTrigger = document.querySelectorAll(`.js-popup-trigger`);

      this.options = {
        needLock,
        activeClass,
      };

      this.init();
    }
  }

  show() {
    this.popupRoot.classList.add(this.options.activeClass);

    if (this.options.needLock) {
      document.body.style['overflow'] = 'hidden';
      document.body.style['scrollbar-gutter'] = 'stable';
      document.documentElement.style['scrollbar-gutter'] = 'stable';
    }
  }

  hide() {
    this.popupRoot.classList.remove(this.options.activeClass);

    if (this.options.needLock) {
      document.body.style.removeProperty('overflow');
      document.body.style.removeProperty('scrollbar-gutter');
      document.documentElement.style.removeProperty('scrollbar-gutter');
    }
  }

  init() {
    this.popupRoot.addEventListener('click', (e) => {
      if (e.target && e.target === this.popupRoot) this.hide();
    });

    this.popupTrigger.forEach((trigger) => {
      trigger.addEventListener('click', () => {
        if (trigger.dataset.showPopup === this.popupRoot.id) this.show();
        if (trigger.dataset.hidePopup === this.popupRoot.id) this.hide();
      });
    });
  }
}

// const splide = new Splide('.splide', {
//   destroy: true,

//   breakpoints: {
//     768: {
//       destroy: false,
//       perMove: 1,
//       perPage: 1,
//       arrows: false,
//       drag: true,
//       gap: 20,
//       dragMinThreshold: 30,
//     },
//   },
// }).mount();

window.addEventListener('DOMContentLoaded', () => {
  const breakpoints = {
    tablet: window.matchMedia('(max-width: 768px)'),
  };

  new Popup('#ration-popup');

  const slider = new Swiper('#ration-slider-swiper', {
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
  });

  if (breakpoints.tablet.matches) {
    slider.init();
  } else {
    slider.destroy(false, true);
  }

  breakpoints.tablet.addEventListener('change', (e) => {
    if (e.matches) {
      slider.init();
    } else {
      slider.destroy(false, true);
    }
  });
});
