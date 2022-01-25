<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="head">
        <div class="logo">
            <h1>GROOMING</h1>
            <p>Service for dogs and cats</p>
        </div>
        <div class="head_nav">
            <a href="./public/index.php" class="nav_link">ГЛАВНАЯ</a>
            <a href="./public/registration.php" class="nav_link">ВХОД</a>
        </div>
    </div>

    <div class="glav">
        <div class="nad">
            <h2 class="glav_nad">Войдите или зарегистрируйтесь<br>
            Чтобы получить возможность<br>
            Отправить заявку</h2>
        </div>
        <form id="reg">
            <div class="opo">
                <a class="nav-zaiv">ВХОД</a>
                <a class="nav-zaiv" v-on:click="openRegister" href="form-reg.php">Регистрация</a>
            </div>
            <div class="zaiv">
                <div class="zaiv">
                    <input type="email" class="zav" v-bind:value="valueEmail" v-on:input="inputEmail" placeholder="Введите Логин">
                    <input type="password" class="zav" v-bind:value="valuePassword" v-on:input="inputPassword" placeholder="Введите Пароль">
                    <button class="zav" type="button" v-on:click="consoleData">Войти</button>
                </div>
            </div>
        </form>
    </div>
    <div class="footer">
        <div class="ewr">
        <p class="footer_nat">groom-salon.com 2000-2999</p>
        </div>
    </div>
    <script src="./public/js/vue.js"></script>
    <script src="./public/js/add.js"></script>
</body>
</html>