<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.9.2.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
</head>

<body>
    <div id="page-wrap">
        <header class="siteHead">
            <span class="leftPic"><img src="img/bank-logo.png" alt="WORLD BANK Publications"
                    title="WORLD BANK Publications"></span>
            <pre class="rightText">
                8-800-100-5005 
                +7 (3452) 522-000</pre>
                <ul class="menu">
                    <li><a href="#cred" id="cred">Кредитные карты</a></li>
                    <li><a href="#vklad" id="vklad">Вклады</a></li>
                    <li><a href="#deb" id="deb">Дебетовая карта</a></li>
                    <li><a href="#str" id="str">Страхование</a></li>
                    <li><a href="#druz" id="druz">Друзья</a></li>
                    <li><a href="#ibank" id="ibank">Интернет-банк</a></li>
                </ul>
        </header>
        <ol id="breadcrumbs">
            <li id="ref"><a href="#">Главная</a></li>
            <li id="ref"><a href="#">Вклады</a></li>
            <li><span id="curr">Калькулятор</span></li>
        </ol>
        <div class="calc">

            <div class="calcName">
                <h1 class="cName">Калькулятор</h1>
            </div>
            <div class="calcBody">
                <div class="nameElem" id="nameEl1">
                    Дата оформления вклада
                </div>
                <div class="valElem" id="valElem1">
                    <input type="text" id="dateDep" placeholder="дд.мм.гггг">
                </div>

                <div class="nameElem" id="nameEl2">
                    Сумма вклада
                </div>
                <div class="valElem" id="valElem2">
                    <input type="number" class="inp1" id="sumVkl" placeholder="1000000" min="1000" max="3000000"
                        onchange="inputBlock(this);" \>
                </div>

                <div class="nameElem" id="nameEl3">
                    Срок вклада
                </div>
                <div class="valElem" id="valElem3">
                    <select id="srokVklad" name="srokVkl">
                        <option value="12">1 Год</option>
                        <option value="24">2 Года</option>
                        <option value="36">3 Года</option>
                        <option value="48">4 Года</option>
                        <option value="60">5 Лет</option>
                    </select>
                </div>

                <div class="nameElem" id="nameEl4">
                    Пополнение вклада
                </div>
                <div class="valElem" id="valElem4">
                    <div>
                        <input type="radio" id="depositNo" name="depositRefill" value="0" checked>
                        <label for="depositNo">Нет</label>
                    </div>
                    <div>
                        <input type="radio" id="depositYes" name="depositRefill" value="1">
                        <label for="depositYes">Да</label>
                    </div>
                </div>

                <div class="nameElem" id="nameEl5">
                    Сумма пополнения вклада
                </div>
                <div class="valElem" id="valElem5">
                    <input class="inp2" id="sumPopVkl" type="number" placeholder="1000000" min="1000" max="3000000"
                        onchange="inputBlock(this);" \>
                </div>

            </div>
            <div>
                <div class="polzunok-container-1">
                    <div class="polzunok-1"></div>
                </div>
                <i id="t1">1 тыс. руб.</i>
                <i id="t2">3 000 000</i>

                <div class="polzunok-container-2">
                    <div class="polzunok-2"></div>
                </div>
                <i id="t1">1 тыс. руб.</i>
                <i id="t2">3 000 000</i>
            </div>
            <div class="calculation">
                <div class="butt">
                    <input class="button" type="submit" name="calculate" value="Рассчитать">
                </div>
                <span class="rez">Результат: </span><span class="count"> 0 руб.</span>
            </div>
        </div>
    </div>
    <footer>
        <div class="botMenu">
            <a href="#">Кредитные карты</a>
            <a href="#">Вклады</a>
            <a href="#">Дебетовая карта</a>
            <a href="#">Страхование</a>
            <a href="#">Друзья</a>
            <a href="#">Интернет-банк</a>
        </div>
    </footer>
    <script type="text/javascript">

        $(document).ready(function () {
            var polz = $(".polzunok-1");
            var inp = $(".inp1");
            polz.slider({
                range: "min",
                value: 1000000,
                min: 1000,
                max: 3000000,
                step: 1,
                slide: function (event, ui) {
                    inp.val(ui.value);
                }
            });
            inp.val(1000000).focusout(function () {
                polz.slider("value", this.value);
            }).focusout();
        });

        $(document).ready(function () {
            var polz = $(".polzunok-2");
            var inp = $(".inp2");
            $(".polzunok-2").slider({
                range: "min",
                value: 1000000,
                min: 1000,
                max: 3000000,
                step: 1,
                slide: function (event, ui) {
                    $(".inp2").val(ui.value);
                }
            });
            inp.val(1000000).focusout(function () {
                polz.slider("value", this.value);
            }).focusout();
        });

        $('#dateDep').datepicker({ dateFormat: 'dd.mm.yy' });

        $.datepicker.setDefaults({
            closeText: 'Закрыть',
            prevText: '<Пред',
            nextText: 'След>',
            currentText: 'Сегодня',
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
            dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
            dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            weekHeader: 'Нед',
            dateFormat: 'dd.mm.yy',
            firstDay: 1,
            showAnim: 'slideDown',
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        });

        function inputBlock(input) {
            if (input.value < 1000) input.value = 1000;
            if (input.value > 3000000) input.value = 3000000;
        }

        $(document).ready(function () {
            $(".button").bind("click", function () {
                $.ajax({
                    url: "calc.php",
                    type: "POST",
                    data: ({
                        sumVkl: $("#sumVkl").val(),
                        sumPopVkl: $("#sumPopVkl").val(),
                        dateDep: $("#dateDep").val(),
                        srokVklad: $("#srokVklad").val(),
                        depositRefill: $("input[name=depositRefill]:checked").val()
                    }),
                    dataType: "html",
                    success: function (data) {
                        $(".count").text(data);
                    }
                });
            });
        });
    </script>
</body>

</html>