<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
IncludeTemplateLangFile(__FILE__);

use Bitrix\Main\Page\Asset;

?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <?
    //Styles
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/template/css/normalize.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/template/css/style.css');
    ?>
</head>

<body>
<? $APPLICATION->ShowPanel() ?>
<div class="page-wrapper">

    <header class="main-header">
        <div class="main-header__container container">
            <h1 class="visually-hidden">YetiCave</h1>
            <a class="main-header__logo">
                <img src="<?= SITE_TEMPLATE_PATH ?>/template/img/logo.svg" width="160" height="39" alt="Логотип компании YetiCave">
            </a>
            <form class="main-header__search" method="get" action="https://echo.htmlacademy.ru">
                <input type="search" name="search" placeholder="Поиск лота">
                <input class="main-header__search-btn" type="submit" name="find" value="Найти">
            </form>
            <a class="main-header__add-lot button" href="add-lot.html">Добавить лот</a>
            <nav class="user-menu">
                <div class="user-menu__image">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/template/img/user.jpg" width="40" height="40" alt="Пользователь">
                </div>
                <div class="user-menu__logged">
                    <p>Константин</p>
                    <a href="login.html">Выйти</a>
                </div>
            </nav>
        </div>
    </header>

    <? if($APPLICATION->GetCurPage(false) === SITE_DIR): ?>
        <main class="container">
    <? else: ?>
        <main>
    <? endif; ?>



