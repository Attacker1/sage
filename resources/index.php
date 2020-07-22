<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description') ?></title>
    <?php
      wp_head();
    ?>
</head>
<body>
    <section class="promo">
        <div class="background">
            <div class="container">
                <header class="header">
                    <div class="header__presentation">
                        <div class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <a href="<?php echo get_home_url(); ?>">
                          <!-- <img src="<?php echo bloginfo('template_url');?>/assets/images/logo.svg" alt="logo" class="header__logo"> -->
                          <img src="<?php 
                            $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
                            // выводим
                            echo $custom_logo__url[0]; 
                           ?>" alt="Стоматология Казани" class="header__logo">
                        </a>
                        <div class="header__address"><?php the_field('address', 2); ?></div>
                        <div class="header__price"><?php the_field('download_price', 2); ?></div>
                    </div>
                    <button class="header__appointment">
                        Записаться на прием</button>
                </header>
            </div>
        </div>
        <div class="container">
            <div class="navigation">
                <div class="navigation__menu">
                    <a class="navigation__item"><?php the_field('main', 2); ?></a>
                    <a class="navigation__item"><?php the_field('prices', 2); ?></a>
                    <a class="navigation__item"><?php the_field('about', 2); ?></a>
                    <a class="navigation__item"><?php the_field('shares', 2); ?></a>
                    <a class="navigation__item"><?php the_field('blog', 2); ?></a>
                    <a class="navigation__item"><?php the_field('questions_for_doctor', 2); ?></a>
                    <a class="navigation__item"><?php the_field('contacts', 2); ?></a>
                </div>
                <div class="navigation__address"><?php the_field('address', 2); ?></div>
                <a href="tel:89297256114" class="navigation__phone"><?php the_field('phone', 2); ?></a>
                <div class="navigation__price"><?php the_field('download_price', 2); ?></div>
            </div>
        </div>
    </section>
    <section class="appointment">
        <div class="container">
            <h2 class="appointment__title"><?php the_field('form_title', 2); ?></h2>
            <form action="#" class="feed-form">
                <div class="about_me">
                    <div class="my_information">
                        <input name="name" placeholder="Имя*" type="text">
                        <input name="phone" placeholder="Мобильный телефон*" type="text">
                        <input name="email" placeholder="Электронная почта*" type="text">
                        <input name="date" placeholder="Дата" type="text">
                        <input name="time" placeholder="Время" type="text">
                    </div>
                    <div class="my_problem">
                        <textarea name="my_problem" placeholder="Расскажите о своей проблеме" type="text"></textarea>
                    </div>
                </div>
                <div class="send_request">
                  <div> Отправляя форму я соглашаюсь с <span>условиями передачи информации</span></div>
                  <button button_submit>Записаться на прием</button>
                </div>
            </form>
        </div>
    </section>
    <?php
      wp_footer();
    ?>
</body>
</html>

