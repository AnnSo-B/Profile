// https://www.npmjs.com/package/jquery.scrollex#usage
require('jquery.scrollex');

const app = {
  init: () => {
    console.log('init');

    /**
     * Menu on Scroll
     */
    app.$bannerElement = $('.banner');
    app.$headerMenuElement = $('.header__menu');
    app.initScrollex();
  },

  /**
   * Menu on Scroll methods
   */
  initScrollex: () => {
    // https://www.npmjs.com/package/jquery.scrollex#usage
    app.$bannerElement.scrollex({
      enter: app.setMenuUnfixed,
      leave: app.setMenuFixed
    })
  },

  setMenuUnfixed: () =>  {
    //https://api.jquery.com/removeClass/#removeClass-className
    app.$headerMenuElement.removeClass('fixed')
  },

  setMenuFixed: () => {
    // https://api.jquery.com/addClass/#addClass-className
    app.$headerMenuElement.addClass('fixed')
  },

};

document.addEventListener('DOMContentLoaded', app.init);
