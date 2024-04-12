<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vittorio Cusieri</title>
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div>
        <di id="header-container-menu-icon" class="header__container-menu-icon">
            <span id="header-menu-icon-one" class="header__icon-line header__icon-line-one"></span>
            <span id="header-menu-icon-two" class="header__icon-line header__icon-line-two"></span>
            <span id="header-menu-icon-three" class="header__icon-line header__icon-line-three"></span>
        </div>
        <div class="header__container-logo">
            <h1 class="logo">Arti Presepi Vittorio</h1>
        </div>
        <nav id="header-nav" class="nav">
            <ul class="nav__menu">
                <li class="nav__menu-item"><a class="link p__xl" href="{{ path('app_home') }}">Home</a></li>
                <li class="nav__menu-item"><a class="link p__xl" href="{{ path('app_statue', {pageNumber: '0'}) }}">Negozio</a></li>
                <li class="nav__menu-item"><a class="link p__xl" href="{{ path('app_about') }}">Chi Sono</a></li>
                <li class="nav__menu-item"><a class="link p__xl" href="{{ path('app_contact') }}">Contatti</a></li>
                {% if is_granted('ROLE_ADMIN') %}
                    <li class="nav__menu-item">
                        <a class="link p__xl" href="{{ path('app_admin') }}">Admin</a>
                    </li>
                {% endif %}
            </ul>
        </nav>
    </div>
</header>