<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./public/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="head">
        <div class="logo">
            <h1>GROOMING</h1>
            <p>Service for dogs and cats</p>
        </div>
        <div class="head_nav">
            <a @click="goToMain" class="nav_link">ГЛАВНАЯ</a>
            <a href="./public/registration.php" class="nav_link">ВХОД</a>
        </div>
    </div>
<div class="container" id="tht">
    <div class="glav">
        <div class="nad">
            <h2 class="glav_nad">Профессиональная укладка<br>
            для ваших домашних<br>
            питомцев</h2>
        </div>
        <form>
            <h2 class="soz">Создайте заявку</h2>
            <div class="zaiv">
                <input type="text" class="zav" v-bind:value="valueInputName" v-on:input="inputName" v-on:keypress.enter="applicationForm" placeholder="Введите кличку">
                <select v-model="selected" class="select" id="app-service-select" required>
                    <option v-for="option in options" v-bind:value="option.value">{{option.value}}</option>
                  </select>
                <button class="soz_glav" type="button" v-on:click="applicationForm">Записаться</button>
            </div>        
        </form>
    </div>
    <div class="galerea">
        <div class="rez" id="rez">
            <div class="zaiavki-form">
                <div class="store__row-card" v-for="services in services">
                <img :src="services.url" class="foto">
                <div class="info">{{services.name}}</div>
                <div class="info"><b>{{services.option}}</b></div>
                <div class="info"><span>{{services.status}}</span></div>
            </div>
          </div>
      </div>
    </div>
    </div>
    <footer>
        <div class="ewr">
        <p class="footer_nat">groom-salon.com 2000-2999</p>
        </div>
    </footer>
    <script src="./public/js/vue.js"></script>
    <script src="./public/js/script.js"></script>

</body>
</html>