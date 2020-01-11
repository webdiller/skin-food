<!-- navigation for 768px - more -->
<div class="d-none d-md-block navigation-cabinet">
    <div class="navigation-cabinet__wrapper">
        <ul class="navigation-cabinet-list">
            <li class="navigation-cabinet-list__item">
                <span class="navigation-cabinet-list__icon navigation-cabinet__user-icon"></span>
                <a href="user-cabinet.php" class="navigation-cabinet-list__link">личные данные</a>
            </li>
            <li class="navigation-cabinet-list__item">
                <span class="navigation-cabinet-list__icon navigation-cabinet__user-orders"></span>
                <a href="user-orders.php" class="navigation-cabinet-list__link">мои заказы</a>
            </li>
            <li class="navigation-cabinet-list__item">
                <span class="navigation-cabinet-list__icon navigation-cabinet__user-fav"></span>
                <a href="user-favorite.php" class="navigation-cabinet-list__link">избранное</a>
            </li>
            <li class="navigation-cabinet-list__item active">
                <span class="navigation-cabinet-list__icon navigation-cabinet__user-visited"></span>
                <a href="user-visited.php" class="navigation-cabinet-list__link">просмотренные товары</a>
            </li>
        </ul>
    </div>
</div>

<!-- cabinet -->
<div id="userNavCabinet" class="user-nav user-nav--cabinet">
    <div class="user-nav__wrapper">
        <a href="user-visited.php" class="user-nav__prev demo-icon icon-left-open-big"></a>
        <p class="user-nav__current"><span class="user-nav__current-icon user-nav__current-icon--data"></span> ЛИЧНЫЕ ДАННЫЕ</p>
        <a href="user-orders.php" class="user-nav__next demo-icon icon-right-open-big"></a>
    </div>
</div>

<!-- orders -->
<div id="userNavOrders" class="user-nav user-nav--orders">
    <div class="user-nav__wrapper">
        <a href="user-cabinet.php" class="user-nav__prev demo-icon icon-left-open-big"></a>
        <p class="user-nav__current"><span class="user-nav__current-icon user-nav__current-icon--orders"></span>МОИ ЗАКАЗЫ</p>
        <a href="user-favorite.php" class="user-nav__next demo-icon icon-right-open-big"></a>
    </div>
</div>

<!-- fav -->
<div id="userNavFav" class="user-nav user-nav--fav">
    <div class="user-nav__wrapper">
        <a href="user-orders.php" class="user-nav__prev demo-icon icon-left-open-big"></a>
        <p class="user-nav__current"><span class="user-nav__current-icon user-nav__current-icon--fav"></span>ИЗБРАННОЕ</p>
        <a href="user-visited.php" class="user-nav__next demo-icon icon-right-open-big"></a>
    </div>
</div>

<!-- visited -->
<div id="userNavVisited" class="user-nav user-nav--visited">
    <div class="user-nav__wrapper">
        <a href="user-favorite.php" class="user-nav__prev demo-icon icon-left-open-big"></a>
        <p class="user-nav__current"><span class="user-nav__current-icon user-nav__current-icon--visited"></span>ПРОСМОТРЕННЫЕ ТОВАРЫ</p>
        <a href="user-cabinet.php" class="user-nav__next demo-icon icon-right-open-big"></a>
    </div>
</div>