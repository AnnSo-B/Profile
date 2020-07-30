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

    /**
     * Smooth scroll
     */
    app.initSmoothScroll();

    /*
     * Init method to toggle the menu
     */
    app.initToggleMenu();
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

  /**
   * Smooth scroll methods
   */
  initSmoothScroll: () => {
    const actionLinks = document.querySelectorAll('.action-link');

    for (const actionLink of actionLinks) {
      actionLink.addEventListener('click', app.handleSmoothScroll);
    };
  },

  handleSmoothScroll: (event) => {
    event.preventDefault();

    // object.hash => get href value
    // https://developer.mozilla.org/en-US/docs/Web/API/HTMLHyperlinkElementUtils/hash  
    const $currentTarget = $(event.target.hash);

    if ($currentTarget.length) {
      // need to take the header__menu into account when scroll to section
      const headerMenuElementHeight = app.$headerMenuElement.outerHeight();

      // https://api.jquery.com/offset/#offset
      const currentTargetPosition = $currentTarget.offset().top - headerMenuElementHeight * 1.5;

      // I want to wait 2 secondes before displaying this section depending on the body
      // https://api.jquery.com/animate/
      $('html, body').animate(
        {
          // https://developer.mozilla.org/fr/docs/Web/API/Element/scrollTop
          scrollTop: currentTargetPosition
        },
        2000
      );
    }
  },

  /**
   * Menu methods
   */
  initToggleMenu: () => {
    const menuButtons = document.querySelectorAll('.button');
    // console.log(menuButtons);

    menuButtons.forEach(button => {
      button.addEventListener('click', app.toggleMenu);
    });
  },

  toggleMenu: (event) => {
    // console.log(event.currentTarget);
    event.preventDefault();

    const bodyElement = document.querySelector('body');
    // console.log(bodyElement);
    bodyElement.classList.toggle('menu--visible');
  }

};

document.addEventListener('DOMContentLoaded', app.init);
