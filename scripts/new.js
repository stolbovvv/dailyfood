"use strict";

/* global Swiper */

class Popup {
  constructor(element) {
    let {
      activeClass = 'is-active',
      needLock = true,
      onShow = () => {},
      onHide = () => {}
    } = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
    this.popupRoot = typeof element === 'string' ? document.querySelector(element) : element;
    if (this.popupRoot) {
      this.popupTrigger = document.querySelectorAll(`.js-popup-trigger`);
      this.options = {
        needLock,
        activeClass,
        onShow,
        onHide
      };
      this.init();
    }
  }
  show(trigger) {
    this.options.onShow(this.popupRoot, trigger);
    this.popupRoot.classList.add(this.options.activeClass);
    if (this.options.needLock) {
      document.body.style['overflow'] = 'hidden';
      document.body.style['scrollbar-gutter'] = 'stable';
      document.documentElement.style['scrollbar-gutter'] = 'stable';
    }
  }
  hide(trigger) {
    this.options.onHide(this.popupRoot, trigger);
    this.popupRoot.classList.remove(this.options.activeClass);
    if (this.options.needLock) {
      document.body.style.removeProperty('overflow');
      document.body.style.removeProperty('scrollbar-gutter');
      document.documentElement.style.removeProperty('scrollbar-gutter');
    }
  }
  init() {
    this.popupRoot.addEventListener('click', e => {
      if (e.target && e.target === this.popupRoot) this.hide(e.target);
    });
    this.popupTrigger.forEach(trigger => {
      trigger.addEventListener('click', () => {
        if (trigger.dataset.showPopup === this.popupRoot.id) this.show(trigger);
        if (trigger.dataset.hidePopup === this.popupRoot.id) this.hide(trigger);
      });
    });
  }
}
window.addEventListener('DOMContentLoaded', () => {
  const breakpoints = {
    tablet: window.matchMedia('(max-width: 768px)')
  };
  new Popup('#ration-popup', {
    onShow: (popup, trigger) => {
      const popupImg = popup.querySelector('.ration-popup__img');
      const popupName = popup.querySelector('.ration-popup__name');
      const popupDescr = popup.querySelector('.ration-popup__descr');
      const popupCompound = popup.querySelector('.ration-popup__compound-text');
      const popupKcal = popup.querySelector('[data-ration-props="kcal"]');
      const popupFats = popup.querySelector('[data-ration-props="fats"]');
      const popupSquirrels = popup.querySelector('[data-ration-props="squirrels"]');
      const popupCarbohydrates = popup.querySelector('[data-ration-props="carbohydrates"]');
      const card = trigger.closest('.ration-card');
      const cardImg = card.querySelector('.ration-card__img');
      const cardName = card.querySelector('.ration-card__name');
      const cardDescr = card.querySelector('.ration-card__descr');
      const cardKcal = card.querySelector('[data-ration-props="kcal"]');
      const cardFats = card.querySelector('[data-ration-props="fats"]');
      const cardCompound = card.querySelector('.ration-card__compound-text');
      const cardSquirrels = card.querySelector('[data-ration-props="squirrels"]');
      const cardCarbohydrates = card.querySelector('[data-ration-props="carbohydrates"]');
      popupImg.src = cardImg.src;
      popupImg.alt = cardImg.alt;
      popupName.textContent = cardName.textContent;
      popupDescr.textContent = cardDescr.textContent;
      popupKcal.textContent = cardKcal.textContent;
      popupFats.textContent = cardFats.textContent;
      popupCompound.textContent = cardCompound.textContent;
      popupSquirrels.textContent = cardSquirrels.textContent;
      popupCarbohydrates.textContent = cardCarbohydrates.textContent;
    }
  });
  document.querySelectorAll('.swiper.ration__slider').forEach(item => {
    const slider = new Swiper(item, {
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      }
    });
    if (breakpoints.tablet.matches) {
      slider.init();
    } else {
      slider.destroy(false, true);
    }
    breakpoints.tablet.addEventListener('change', e => {
      if (e.matches) {
        slider.init();
      } else {
        slider.destroy(false, true);
      }
    });
  });
});