"use strict";

/* global Splide */

class Popup {
  constructor(element) {
    let {
      activeClass = 'is-active',
      needLock = true
    } = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
    this.popupRoot = typeof element === 'string' ? document.querySelector(element) : element;
    if (this.popupRoot) {
      this.popupTrigger = document.querySelectorAll(`.js-popup-trigger`);
      this.options = {
        needLock,
        activeClass
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
    this.popupRoot.addEventListener('click', e => {
      if (e.target && e.target === this.popupRoot) this.hide();
    });
    this.popupTrigger.forEach(trigger => {
      trigger.addEventListener('click', () => {
        if (trigger.dataset.showPopup === this.popupRoot.id) this.show();
        if (trigger.dataset.hidePopup === this.popupRoot.id) this.hide();
      });
    });
  }
}
window.addEventListener('DOMContentLoaded', () => {
  new Popup('#ration-popup');
  const splide = new Splide('.splide', {
    destroy: true,
    breakpoints: {
      768: {
        destroy: false,
        perMove: 1,
        perPage: 1,
        arrows: false,
        drag: true,
        gap: 20,
        dragMinThreshold: 30
      }
    }
  }).mount();
  splide.on('dragged');
});