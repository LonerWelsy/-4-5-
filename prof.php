<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="wrapper">
        <header>
            <section class="hapca">
                <div class="hapca_vse">
                    <nav class="navbar">
                        <div class="container">
                            <div class="navbar__wrap">
                                <a href="index.html" class="logo" id="logo"><img src="assets/img/logo.jpg" alt="logo"
                                        class="logo"></a>
                                <ul class="menu" id="menu">
                                    <li><a href="menu.php" class="navi">Меню</a></li>
                                    <li><a href="index.php" class="navi">Акции</a></li>
                                    <li><a href="about.html" class="navi">Контакты</a></li>
                                    <li><a href="profile.html" class="navi">Личный кабинет</a></li>
                                    <li><a href="prof.php" class="navi">Вход </a></li>
                                    <li><a href="" class="navi">Корзина</a></li>
                                </ul>
                                <div class="hamb">
                                    <a href=""><img src="assets/img/rarzina.png" alt="" class="carzina"></a>
                                    <div class="hamb__field" id="hamb">
                                        <span class="bar"></span> <span class="bar"></span>
                                        <span class="bar"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="popup" id="popup"></div>
                </div>
            </section>
        </header>
        <main>
            <br><br>
            <br><br>
            <section class="form_section">
                <div class="form__vse">


                    <form action="login.php" method="post">
                    <h1 class="hh">Вход</h1>
                        <input type="text" placeholder="login" name="login">
                        <input type="text" placeholder="password" name="pass">
                        <div class="baton_biv">
                            <button type="submit" class="baton bg_fff">Войти</button>
                        </div>

                    </form>

                    <form action="register.php" method="post">
                    <h1 class="hh">Регистрация</h1>
                        <input type="text" placeholder="login" name="login">
                        <input type="text" placeholder="password" name="pass">
                        <input type="text" placeholder="repeat password" name="repeatpass">
                        <input type="email" placeholder="email" name="email">
                        <div class="baton_biv">
                            <button type="submit" class="baton bg_fff">Зарегистрироваться</button>
                        </div>
                    </form>


                </div>
            </section>
        </main>
        <footer class="footer">
            <section class="section_footer">
                <p><a href="" class="slog__footer">Ваши отзывы и предложения</a></p>
                <div class="tet">
                    <ul class="text_footer">
                        <li><a href="#navig" class="navi"></a></li>
                        <li><a href="order.html" class="navi">Контакты</a></li>
                        <li><a href="about.html" class="navi">Акции</a></li>
                        <li><a href="login.html" class="navi">Личный кабинет</a></li>
                    </ul>
                </div>

            </section>
        </footer>
    </div>
    <script src="assets/js/hh.js"></script>
</body>