<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oProfile</title>
  <?php wp_head(); ?>
</head>
<body>
  <div class="menu">
    <button class="button close-menu" aria-label="fermer le menu">
      <i class="fa fa-close" aria-hidden="true"></i>
    </button>
    <nav class="main-nav">
      <ul>
        <li class="main-nav__item">
          <a href="#">
            Homepage
          </a>
        </li>
        <li class="main-nav__item">
          <a href="#">
            Blog
          </a>
        </li>
        <li class="main-nav__item">
          <a href="#">
            Projets
          </a>
        </li>
        <li class="main-nav__item">
          <a href="#">
            Exemple
          </a>
        </li>
        <li class="main-nav__item">
          <a href="#">
            Contact
          </a>
        </li>
      </ul>
    </nav>
    <ul class="social-nav">
      <li class="social-nav__item">
        <a href="#">
          <i class="fa fa-twitter" aria-hidden="true" aria-label="twitter"></i>
        </a>
      </li>
      <li class="social-nav__item">
        <a href="#">
          <i class="fa fa-facebook" aria-hidden="true" aria-label="facebook"></i>
        </a>
      </li>
      <li class="social-nav__item">
        <a href="#">
          <i class="fa fa-google" aria-hidden="true" aria-label="google"></i>
        </a>
      </li>
      <li class="social-nav__item">
        <a href="#">
          <i class="fa fa-instagram" aria-hidden="true" aria-label="instagram"></i>
        </a>
      </li>
      <li class="social-nav__item">
        <a href="#">
          <i class="fa fa-github" aria-hidden="true" aria-label="github"></i>
        </a>
      </li>
    </ul>
  </div>

  <div class="wrapper">
    <header id="header" class="header" style="background-image: url('../images/see.jpg');">
      <section class="header__menu fixed">
        <div class="logo">oProfile</div>
        <ul class="social-nav">
          <li class="social-nav__item">
            <a href="#">
              <i class="fa fa-twitter" aria-hidden="true" aria-label="twitter"></i>
            </a>
          </li>
          <li class="social-nav__item">
            <a href="#">
              <i class="fa fa-facebook" aria-hidden="true" aria-label="facebook"></i>
            </a>
          </li>
          <li class="social-nav__item">
            <a href="#">
              <i class="fa fa-google" aria-hidden="true" aria-label="google"></i>
            </a>
          </li>
          <li class="social-nav__item">
            <a href="#">
              <i class="fa fa-instagram" aria-hidden="true" aria-label="instagram"></i>
            </a>
          </li>
          <li class="social-nav__item">
            <a href="#">
              <i class="fa fa-github" aria-hidden="true" aria-label="github"></i>
            </a>
          </li>
        </ul>
        <button class="button open-menu">
          <i class="fa fa-bars" aria-hidden="true" aria-label="ouvrir le menu"></i>
        </button>
      </section>
      <section id="banner" class="banner">
        <div class="intro">
          <h1 class="intro__title">
            Hello, je suis Miss Dev'WP
          </h1>
          <p class="intro__content">Une développeuse WordPress lorem ipsum sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor.</p>
        </div>
        <div class="action-links">
          <a href="#grid" class="action-link">En savoir plus</a>
          <a href="#footer" class="action-link">Contact</a>
        </div>
      </section>
    </header>
    <main class="main">
      <section id="posts" class="posts">
        <article class="post" style="background-image: url('../images/neige.jpg');">
          <h2 class="post__title">Winter View</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi tempora cupiditate quo delectus cum minima illum quod ipsam. Laborum totam et aliquam, ex temporibus earum. Eos, in sunt. Possimus ut, adipisci totam dolores quam soluta facilis libero quidem nemo voluptas.</p>
        </article>
        <article class="post" style="background-image: url('../images/arbre.jpg');">
          <h2 class="post__title">On the fly</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi tempora cupiditate quo delectus cum minima illum quod ipsam. Laborum totam et aliquam, ex temporibus earum. Eos, in sunt. Possimus ut, adipisci totam dolores quam soluta facilis libero quidem nemo voluptas.</p>
        </article>
        <article class="post" style="background-image: url('../images/montagne.jpg');">
          <h2 class="post__title">Horizon</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi tempora cupiditate quo delectus cum minima illum quod ipsam. Laborum totam et aliquam, ex temporibus earum. Eos, in sunt. Possimus ut, adipisci totam dolores quam soluta facilis libero quidem nemo voluptas.</p>
        </article>
        <article class="post" style="background-image: url('../images/fete.jpg');">
          <h2 class="post__title">Party tour</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi tempora cupiditate quo delectus cum minima illum quod ipsam. Laborum totam et aliquam, ex temporibus earum. Eos, in sunt. Possimus ut, adipisci totam dolores quam soluta facilis libero quidem nemo voluptas.</p>
        </article>
        <article class="post" style="background-image: url('../images/rue.jpg');">
          <h2 class="post__title">L'agence d'à côté</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi tempora cupiditate quo delectus cum minima illum quod ipsam. Laborum totam et aliquam, ex temporibus earum. Eos, in sunt. Possimus ut, adipisci totam dolores quam soluta facilis libero quidem nemo voluptas.</p>
        </article>
        <article class="post" style="background-image: url('../images/soleil.jpg');">
          <h2 class="post__title">Sunlight</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi tempora cupiditate quo delectus cum minima illum quod ipsam. Laborum totam et aliquam, ex temporibus earum. Eos, in sunt. Possimus ut, adipisci totam dolores quam soluta facilis libero quidem nemo voluptas.</p>
        </article>
      </section>
      <section id="grid" class="grid">
        <div class="grid__item">
          <i class="grid__item__icon fa fa-user" aria-hidden="true"></i>
          <h3 class="grid__item__title">Toujours à l'écoute</h3>
          <p class="grid__item__content">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="grid__item">
          <i class="grid__item__icon fa fa-arrow-right" aria-hidden="true"></i>
          <h3 class="grid__item__title">Pro-active</h3>
          <p class="grid__item__content">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="grid__item">
          <i class="grid__item__icon fa fa-bullhorn" aria-hidden="true"></i>
          <h3 class="grid__item__title">Communicante</h3>
          <p class="grid__item__content">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="grid__item">
          <i class="grid__item__icon fa fa-graduation-cap" aria-hidden="true"></i>
          <h3 class="grid__item__title">Des compétences reconnues</h3>
          <p class="grid__item__content">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="grid__item">
          <i class="grid__item__icon fa fa-code" aria-hidden="true"></i>
          <h3 class="grid__item__title">Expérimentée</h3>
          <p class="grid__item__content">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="grid__item">
          <i class="grid__item__icon fa fa-heart" aria-hidden="true"></i>
          <h3 class="grid__item__title">Avec passion</h3>
          <p class="grid__item__content">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </section>
    </main>
    <footer id="footer" class="footer">
      <form action="#" class="contact-form">
        <div class="user-info">
          <div class="field">
            <label class="field__label" for="name">Nom</label>
            <input class="field__input" type="text" id="name" name="name">
          </div>
          <div class="field">
            <label class="field__label" for="email">Email</label>
            <input class="field__input" type="email" id="email" name="email">
          </div>
        </div>
        <div class="field">
          <label class="field__label" for="message">Message</label>
          <textarea class="field__input" name="message" id="message" cols="30" rows="5"></textarea>
        </div>
        <button class="contact-form__button" type="submit">Envoyer</button>
      </form>
      <address class="contact-info">
        <div class="contact-info__item">
          <i class="fa fa-envelope contact-info__item__icon" aria-hidden="true"></i>
          <h4 class="contact-info__item__title">Email</h4>
          <a href="mailto:kaplan@oprofile.ocl" class="contact-info__item__value">
            kaplan@oprofile.ocl
          </a>
        </div>
        <div class="contact-info__item">
          <i class="fa fa-phone contact-info__item__icon" aria-hidden="true"></i>
          <h4 class="contact-info__item__title">Téléphone</h4>
          <a href="tel:+33600000000" class="contact-info__item__value">
            +33 6 00 00 00 00
          </a>
        </div>
        <div class="contact-info__item">
          <i class="fa fa-home contact-info__item__icon" aria-hidden="true"></i>
          <h4 class="contact-info__item__title">Adresse</h4>
          <p class="contact-info__item__value">223 allée de la gare<br>44000 Nantes</p>
        </div>
      </address>
    </footer>
  </div>

  <?php wp_footer(); ?>
</body>
</html>