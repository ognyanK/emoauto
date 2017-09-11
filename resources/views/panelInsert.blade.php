    <!doctype html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Laravel</title>

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
            <script src="{{ asset('/js/app.min.js') }}"></script>
            <!-- Styles -->
            <style>
                html, body {
                    background-color: #fff;
                    color: #636b6f;
                    font-family: 'Raleway', sans-serif;
                    font-weight: 100;
                    height: 100vh;
                    margin: 0;
                }

                .full-height {
                    height: 100vh;
                }

                .flex-center {
                    align-items: center;
                    display: flex;
                    justify-content: center;
                }

                .position-ref {
                    position: relative;
                }

                .top-right {
                    position: absolute;
                    right: 10px;
                    top: 18px;
                }

                .content {
                    text-align: center;
                }

                .title {
                    font-size: 84px;
                }

                .links > a {
                    color: #636b6f;
                    padding: 0 25px;
                    font-size: 12px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }

                .m-b-md {
                    margin-bottom: 30px;
                }
            </style>
        </head>
        <body>

        {{!! Form::open(array('route' => 'panelInsert.store')) !!}}
              <!--<form name="pub" method="get" action="welcome" style="margin: 0px; padding: 0px;">-->             
          <table width=940 cellspacing=0 cellpadding=0 border=0 style="margin:0 auto;">
            <tr>
              <td width=145 style="padding-top:10px" class="pubTitles pubTitlesBlue">Марка</td>
              <td width=10  style="padding-top:10px"><img src="//www.mobile.bg/images/picturess/no.gif" width=10 height=1 border=0></td>
              <td width=145 style="padding-top:10px" class="pubTitles pubTitlesBlue">Модел</td>
              <td width=20  style="padding-top:10px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=145 style="padding-top:10px" class="pubTitles">Модификация</td>
              <td width=10  style="padding-top:10px"><img src="//www.mobile.bg/images/picturess/no.gif" width=10 height=1 border=0></td>
              <td width=145 style="padding-top:10px" class="pubTitles pubTitlesBlue">Тип двигател</td>
              <td width=20  style="padding-top:10px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=300 style="padding-top:10px" class="pubTitles pubTitlesBlue">Състояние</td>
            </tr>
            <tr>
              <td width=145 style="padding-top:5px">
      <select class="sw145" name="f5" onchange="javascript:changemm(document.pub.topmenu,document.pub.f5,document.pub.f6,'1','1')">
        <option selected value="">
    <optgroup label="A">
    <option value="AC">AC
    <option value="Acura">Acura
    <option value="Aixam">Aixam
    <option value="Alfa Romeo">Alfa Romeo
    <option value="Aston martin">Aston martin
    <option value="Audi">Audi
    <option value="Austin">Austin
    <optgroup label="B">
    <option value="BMW">BMW
    <option value="Bentley">Bentley
    <option value="Berliner">Berliner
    <option value="Borgward">Borgward
    <option value="Brilliance">Brilliance
    <option value="Bugatti">Bugatti
    <option value="Buick">Buick
    <optgroup label="C">
    <option value="Cadillac">Cadillac
    <option value="Chevrolet">Chevrolet
    <option value="Chrysler">Chrysler
    <option value="Citroen">Citroen
    <option value="Corvette">Corvette
    <optgroup label="D">
    <option value="Dacia">Dacia
    <option value="Daewoo">Daewoo
    <option value="Daihatsu">Daihatsu
    <option value="Daimler">Daimler
    <option value="Datsun">Datsun
    <option value="Dkw">Dkw
    <option value="Dodge">Dodge
    <option value="Dr">Dr
    <optgroup label="E">
    <option value="Eagle">Eagle
    <optgroup label="F">
    <option value="FSO">FSO
    <option value="Ferrari">Ferrari
    <option value="Fiat">Fiat
    <option value="Ford">Ford
    <optgroup label="G">
    <option value="Geo">Geo
    <option value="Great Wall">Great Wall
    <optgroup label="H">
    <option value="Heinkel">Heinkel
    <option value="Honda">Honda
    <option value="Hyundai">Hyundai
    <optgroup label="I">
    <option value="Ifa">Ifa
    <option value="Infiniti">Infiniti
    <option value="Innocenti">Innocenti
    <option value="Isuzu">Isuzu
    <optgroup label="J">
    <option value="Jaguar">Jaguar
    <optgroup label="K">
    <option value="Kia">Kia
    <optgroup label="L">
    <option value="Lada">Lada
    <option value="Lamborghini">Lamborghini
    <option value="Lancia">Lancia
    <option value="Lexus">Lexus
    <option value="Lifan">Lifan
    <option value="Lincoln">Lincoln
    <option value="Lotus">Lotus
    <optgroup label="M">
    <option value="Maserati">Maserati
    <option value="Matra">Matra
    <option value="Maybach">Maybach
    <option value="Mazda">Mazda
    <option value="McLaren">McLaren
    <option value="Mercedes-Benz">Mercedes-Benz
    <option value="Mercury">Mercury
    <option value="Mg">Mg
    <option value="Mini">Mini
    <option value="Mitsubishi">Mitsubishi
    <option value="Morgan">Morgan
    <option value="Moskvich">Moskvich
    <optgroup label="N">
    <option value="Nissan">Nissan
    <optgroup label="O">
    <option value="Oldsmobile">Oldsmobile
    <option value="Opel">Opel
    <optgroup label="P">
    <option value="Perodua">Perodua
    <option value="Peugeot">Peugeot
    <option value="Pgo">Pgo
    <option value="Plymouth">Plymouth
    <option value="Polonez">Polonez
    <option value="Pontiac">Pontiac
    <option value="Porsche">Porsche
    <option value="Proton">Proton
    <optgroup label="R">
    <option value="Renault">Renault
    <option value="Rolls-Royce">Rolls-Royce
    <option value="Rover">Rover
    <optgroup label="S">
    <option value="SECMA">SECMA
    <option value="Saab">Saab
    <option value="Samand">Samand
    <option value="Saturn">Saturn
    <option value="Scion">Scion
    <option value="Seat">Seat
    <option value="Shatenet">Shatenet
    <option value="Shuanghuan">Shuanghuan
    <option value="Simca">Simca
    <option value="Skoda">Skoda
    <option value="Smart">Smart
    <option value="Ssang yong">Ssang yong
    <option value="Subaru">Subaru
    <option value="Suzuki">Suzuki
    <optgroup label="T">
    <option value="Talbot">Talbot
    <option value="Tata">Tata
    <option value="Tavria">Tavria
    <option value="Tazzari">Tazzari
    <option value="Terberg">Terberg
    <option value="Tesla">Tesla
    <option value="Tofas">Tofas
    <option value="Toyota">Toyota
    <option value="Trabant">Trabant
    <option value="Triumph">Triumph
    <optgroup label="V">
    <option value="VROMOS">VROMOS
    <option value="VW">VW
    <option value="Volga">Volga
    <option value="Volvo">Volvo
    <optgroup label="W">
    <option value="Warszawa">Warszawa
    <option value="Wartburg">Wartburg
    <option value="Wiesmann">Wiesmann
    <optgroup label="X">
    <option value="Xinshun">Xinshun
    <optgroup label="Z">
    <option value="Zastava">Zastava
    <option value="Zaz">Zaz
    <optgroup label="Д">
    <option value="Други">Други
    <optgroup label="П">
    <option value="Победа">Победа
    <optgroup label="С">
    <option value="София">София
    <optgroup label="Ч">
    <option value="Чайка">Чайка

      </select>
      </td>
              <td width=10  style="padding-top:5px"><img src="//www.mobile.bg/images/picturess/no.gif" width=10 height=1 border=0></td>
              <td width=145 style="padding-top:5px">
      <select class="sw145" name="f6">
        <option value="">

      </select>
      </td>
              <td width=20  style="padding-top:5px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=145 style="padding-top:5px"><input type="text" name="f7" value="" class="sw145" maxlength="50">
    </td>
              <td width=10  style="padding-top:5px"><img src="//www.mobile.bg/images/picturess/no.gif" width=10 height=1 border=0></td>
              <td width=145 style="padding-top:5px">
      <select class="sw145" name="f8">
        <option value=""> 
    <option value="Бензинов">Бензинов
    <option value="Дизелов">Дизелов
    <option value="Електрически">Електрически
    <option value="Хибриден">Хибриден

      </select>
      </td>
              <td width=20  style="padding-top:5px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=300 style="padding-top:5px"><input type="radio" name="f25" value="1">Нов&nbsp;&nbsp;&nbsp;<input type="radio" name="f25" value="0" checked>Употребяван&nbsp;&nbsp;&nbsp;<input type="radio" name="f25" value="2">За части&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
              <td width=145 style="padding-top:10px" class="pubTitles">Мощност [к.с.]</td>
              <td width=10  style="padding-top:10px"><img src="//www.mobile.bg/images/picturess/no.gif" width=10 height=1 border=0></td>
              <td width=145 style="padding-top:10px" class="pubTitles">Евростандарт</td>
              <td width=20  style="padding-top:10px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=300 colspan=3 style="padding-top:10px" class="pubTitles pubTitlesBlue">Скоростна кутия</td>
              <td width=20  style="padding-top:10px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=300 style="padding-top:10px" class="pubTitles pubTitlesBlue">Категория</td>
            </tr>
            <tr>
              <td width=145 style="padding-top:5px"><input type="text" name="f9" value="" class="sw145" maxlength="4" onkeyup="javascript:checkfield(this,'Полето приема само цифри от 0 до 9',1)" onclick="javascript:checkfield(this,'Полето приема само цифри от 0 до 9',3)">
    </td>
              <td width=10  style="padding-top:5px"><img src="//www.mobile.bg/images/picturess/no.gif" width=10 height=1 border=0></td>
              <td width=145 style="padding-top:5px">
      <select class="sw145" name="f29">
        <option value=""> 
    <option value="1">Евро 1
    <option value="2">Евро 2
    <option value="3">Евро 3
    <option value="4">Евро 4
    <option value="5">Евро 5
    <option value="6">Евро 6

      </select>
      </td>
              <td width=20  style="padding-top:5px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=300 colspan=3 style="padding-top:5px">
      <select class="sw300" name="f10">
        <option value=""> 
    <option value="Ръчна">Ръчна
    <option value="Автоматична">Автоматична
    <option value="Полуавтоматична">Полуавтоматична

      </select>
      </td>
              <td width=20  style="padding-top:5px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=300 style="padding-top:5px">
      <select class="sw300" name="f11">
        <option value=""> 
    <option value="Ван">Ван
    <option value="Кабрио">Кабрио
    <option value="Катафалка">Катафалка
    <option value="Комби">Комби
    <option value="Купе">Купе
    <option value="Линейка">Линейка
    <option value="Миниван">Миниван
    <option value="Пикап">Пикап
    <option value="Седан">Седан
    <option value="Стреч лимузина">Стреч лимузина
    <option value="Хечбек">Хечбек

      </select>
      </td>
            </tr>
          </table>
          
                      
          <table width=940 cellspacing=0 cellpadding=0 border=0>
            <tr>
              <td width=145 style="padding-top:10px" class="pubTitles pubTitlesBlue">Цена&nbsp;<a href="javascript:;" onclick=
              "javascript:alert('ВНИМАНИЕ!\n\nПри въвеждане на НЕДЕЙСТВИТЕЛНА ЦЕНА,\nmobile.bg си запазва правото да\nпромени цената на &quot;по договаряне&quot;.');"><img src=
              "//www.mobile.bg/images/picturess/icon_error_p.gif" width=16 height=16 border=0 align="absmiddle"
              alt="ВНИМАНИЕ!

    При въвеждане на НЕДЕЙСТВИТЕЛНА ЦЕНА,
    mobile.bg си запазва правото да
    промени цената на &quot;по договаряне&quot;."></a></td>
              <td width=10  style="padding-top:10px"><img src="//www.mobile.bg/images/picturess/no.gif" width=10 height=1 border=0></td>
              <td width=145 style="padding-top:10px" class="pubTitles pubTitlesBlue">Валута</td>
              <td width=20  style="padding-top:10px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=300 colspan=3 style="padding-top:10px" class="pubTitles pubTitlesBlue">Дата на производство</td>
              <td width=20  style="padding-top:10px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=300 style="padding-top:10px" class="pubTitles pubTitlesBlue">Пробег</td>
            </tr>
            <tr>
              <td width=145 style="padding-top:5px"><input type="text" name="f12" value="" class="sw145" maxlength="7" onfocus="javascript:pricenegtype()" onkeyup="javascript:checkfield(this,'Полето приема само цифри от 0 до 9',1)" onclick="javascript:checkfield(this,'Полето приема само цифри от 0 до 9',3)">
    </td>
              <td width=10  style="padding-top:5px"><img src="//www.mobile.bg/images/picturess/no.gif" width=10 height=1 border=0></td>
              <td width=145 style="padding-top:5px">
      <select class="sw145" name="f13">
        <option value="лв.">лв.
    <option value="USD">USD
    <option value="EUR">EUR

      </select>
      </td>
              <td width=20  style="padding-top:5px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=145 style="padding-top:5px">
      <select class="sw145" name="f14">
        <option value=""> 
    <option value="януари">януари
    <option value="февруари">февруари
    <option value="март">март
    <option value="април">април
    <option value="май">май
    <option value="юни">юни
    <option value="юли">юли
    <option value="август">август
    <option value="септември">септември
    <option value="октомври">октомври
    <option value="ноември">ноември
    <option value="декември">декември

      </select>
      </td>
              <td width=10  style="padding-top:5px"><img src="//www.mobile.bg/images/picturess/no.gif" width=10 height=1 border=0></td>
              <td width=145 style="padding-top:5px">
      <select class="sw145" name="f15">
        <option value=""> 
    <option value="2017">2017
    <option value="2016">2016
    <option value="2015">2015
    <option value="2014">2014
    <option value="2013">2013
    <option value="2012">2012
    <option value="2011">2011
    <option value="2010">2010
    <option value="2009">2009
    <option value="2008">2008
    <option value="2007">2007
    <option value="2006">2006
    <option value="2005">2005
    <option value="2004">2004
    <option value="2003">2003
    <option value="2002">2002
    <option value="2001">2001
    <option value="2000">2000
    <option value="1999">1999
    <option value="1998">1998
    <option value="1997">1997
    <option value="1996">1996
    <option value="1995">1995
    <option value="1994">1994
    <option value="1993">1993
    <option value="1992">1992
    <option value="1991">1991
    <option value="1990">1990
    <option value="1989">1989
    <option value="1988">1988
    <option value="1987">1987
    <option value="1986">1986
    <option value="1985">1985
    <option value="1984">1984
    <option value="1983">1983
    <option value="1982">1982
    <option value="1981">1981
    <option value="1980">1980
    <option value="1979">1979
    <option value="1978">1978
    <option value="1977">1977
    <option value="1976">1976
    <option value="1975">1975
    <option value="1974">1974
    <option value="1973">1973
    <option value="1972">1972
    <option value="1971">1971
    <option value="1970">1970
    <option value="1969">1969
    <option value="1968">1968
    <option value="1967">1967
    <option value="1966">1966
    <option value="1965">1965
    <option value="1964">1964
    <option value="1963">1963
    <option value="1962">1962
    <option value="1961">1961
    <option value="1960">1960
    <option value="1959">1959
    <option value="1958">1958
    <option value="1957">1957
    <option value="1956">1956
    <option value="1955">1955
    <option value="1954">1954
    <option value="1953">1953
    <option value="1952">1952
    <option value="1951">1951
    <option value="1950">1950
    <option value="1949">1949
    <option value="1948">1948
    <option value="1947">1947
    <option value="1946">1946
    <option value="1945">1945
    <option value="1944">1944
    <option value="1943">1943
    <option value="1942">1942
    <option value="1941">1941
    <option value="1940">1940
    <option value="1939">1939
    <option value="1938">1938
    <option value="1937">1937
    <option value="1936">1936
    <option value="1935">1935
    <option value="1934">1934
    <option value="1933">1933
    <option value="1932">1932
    <option value="1931">1931
    <option value="1930">1930

      </select>
      </td>
              <td width=20  style="padding-top:5px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=300 style="padding-top:5px"><input type="text" name="f16" value="" class="sw145" maxlength="7" onkeyup="javascript:checkfield(this,'Полето приема само цифри от 0 до 9',1)" onclick="javascript:checkfield(this,'Полето приема само цифри от 0 до 9',3)">
      в километри</td>
            </tr>
            <tr><td valign="top" width=940 colspan=9><input type="checkbox" name="priceneg" value="99999999" onclick="javascript:pricenegcheck(this,document.pub.f12)">по договаряне</td></tr>
            <tr>
              <td width=300 colspan=3 style="padding-top:10px" class="pubTitles">Цвят</td>
              <td width=20  style="padding-top:10px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=145 style="padding-top:10px" class="pubTitles pubTitlesBlue">Регион</td>
              <td width=10  style="padding-top:10px"><img src="//www.mobile.bg/images/picturess/no.gif" width=10 height=1 border=0></td>
              <td width=145 style="padding-top:10px" class="pubTitles pubTitlesBlue">Населено място</td>
              <td width=20  style="padding-top:10px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=300 style="padding-top:10px" class="pubTitles pubTitlesBlue">Валидност на обявата</td>
            </tr>
            <tr>
              <td width=300 colspan=3 style="padding-top:5px">
      <select class="sw300" name="f17">
        <option value=""> 
    <option value="Tъмно син">Tъмно син
    <option value="Банан">Банан
    <option value="Беата">Беата
    <option value="Бежов">Бежов
    <option value="Бордо">Бордо
    <option value="Бронз">Бронз
    <option value="Бял">Бял
    <option value="Винен">Винен
    <option value="Виолетов">Виолетов
    <option value="Вишнев">Вишнев
    <option value="Графит">Графит
    <option value="Жълт">Жълт
    <option value="Зелен">Зелен
    <option value="Златист">Златист
    <option value="Кафяв">Кафяв
    <option value="Керемиден">Керемиден
    <option value="Кремав">Кремав
    <option value="Лилав">Лилав
    <option value="Металик">Металик
    <option value="Оранжев">Оранжев
    <option value="Охра">Охра
    <option value="Пепеляв">Пепеляв
    <option value="Перла">Перла
    <option value="Пясъчен">Пясъчен
    <option value="Резидав">Резидав
    <option value="Розов">Розов
    <option value="Сахара">Сахара
    <option value="Светло сив">Светло сив
    <option value="Светло син">Светло син
    <option value="Сив">Сив
    <option value="Син">Син
    <option value="Слонова кост">Слонова кост
    <option value="Сребърен">Сребърен
    <option value="Т.зелен">Т.зелен
    <option value="Тъмно сив">Тъмно сив
    <option value="Тъмно син мет.">Тъмно син мет.
    <option value="Тъмно червен">Тъмно червен
    <option value="Тютюн">Тютюн
    <option value="Хамелеон">Хамелеон
    <option value="Червен">Червен
    <option value="Черен">Черен

      </select>
      </td>
              <td width=20  style="padding-top:5px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=145 style="padding-top:5px">
      <select class="sw145" name="f18" onchange="javascript:document.pub.submit();">
        <option value=""> 
    <option value="Благоевград">Благоевград
    <option value="Бургас">Бургас
    <option value="Варна">Варна
    <option value="Велико Търново">Велико Търново
    <option value="Видин">Видин
    <option value="Враца">Враца
    <option value="Габрово">Габрово
    <option value="Добрич">Добрич
    <option value="Дупница">Дупница
    <option value="Кърджали">Кърджали
    <option value="Кюстендил">Кюстендил
    <option value="Ловеч">Ловеч
    <option value="Монтана">Монтана
    <option value="Пазарджик">Пазарджик
    <option value="Перник">Перник
    <option value="Плевен">Плевен
    <option value="Пловдив">Пловдив
    <option value="Разград">Разград
    <option value="Русе">Русе
    <option value="Силистра">Силистра
    <option value="Сливен">Сливен
    <option value="Смолян">Смолян
    <option value="София">София
    <option value="Стара Загора">Стара Загора
    <option value="Търговище">Търговище
    <option value="Хасково">Хасково
    <option value="Шумен">Шумен
    <option value="Ямбол">Ямбол
    <option value="Извън страната">Извън страната

      </select>
      </td>
              <td width=10  style="padding-top:5px"><img src="//www.mobile.bg/images/picturess/no.gif" width=10 height=1 border=0></td>
              <td width=145 style="padding-top:5px">
      <select class="sw145" name="f19">
        <option value=""> 

      </select>
      </td>
              <td width=20  style="padding-top:5px"><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=300 style="padding-top:5px">
      <select class="sw300" name="f20">
        <option value="35">35 дни
    <option value="49">49 дни

      </select>
      </td>
            </tr>
          </table>
          
                      
          <table width=940 cellspacing=0 cellpadding=0 border=0 style="margin:0 auto; margin-top:10px;">
            <tr>
              <td valign=top><label class="extra_cat">Безопасност</label><br><label ><input type="checkbox" value="GPS система за проследяване" name="f30">GPS система за проследяване</label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'AYC, ASC, TRC, SH-AWD');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Автоматичен контрол на стабилността" name="f31">Автоматичен контрол на стабилността<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'AFL');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Адаптивни предни светлини" name="f32">Адаптивни предни светлини<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'ABS');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Антиблокираща система" name="f33">Антиблокираща система<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label ><input type="checkbox" value="Въздушни възглавници - Задни" name="f34">Въздушни възглавници - Задни</label><br>
    <label ><input type="checkbox" value="Въздушни възглавници - Предни" name="f35">Въздушни възглавници - Предни</label><br>
    <label ><input type="checkbox" value="Въздушни възглавници - Странични" name="f36">Въздушни възглавници - Странични</label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'EBD');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Ел. разпределяне на спирачното усилие" name="f37">Ел. разпределяне на спирачното усилие<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'ESP, ESC, DSC, VDIM, VDS, VSA, VSC, DSTC, DTC, PSM');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Електронна програма за стабилизиране" name="f38">Електронна програма за стабилизиране<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'TPMS, SmarTire');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Контрол на налягането на гумите" name="f39">Контрол на налягането на гумите<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'PDC, APS, Park Assist, Park pilot и др.');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Парктроник" name="f40">Парктроник<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label ><input type="checkbox" value="Система ISOFIX" name="f41">Система ISOFIX</label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'DSA');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Система за динамична устойчивост" name="f42">Система за динамична устойчивост<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'ASR, TCS, EDL, TCL');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Система за защита от пробуксуване" name="f43">Система за защита от пробуксуване<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'dry brakes system – DBS');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Система за изсушаване на накладките" name="f44">Система за изсушаване на накладките<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'Distronic');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Система за контрол на дистанцията" name="f45">Система за контрол на дистанцията<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'Brake Assist, BAS');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Система за подпомагане на спирането" name="f46">Система за подпомагане на спирането<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    </td>
    <td valign=top><label class="extra_cat">Комфорт</label><br><label OnMouseOver="javascript:ShowExtriDescription(this,'ASS, ISG');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Auto Start Stop function" name="f47">Auto Start Stop function<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label ><input type="checkbox" value="Bluetooth \ handsfree система" name="f48">Bluetooth \ handsfree система</label><br>
    <label ><input type="checkbox" value="DVD, TV" name="f49">DVD, TV</label><br>
    <label ><input type="checkbox" value="Steptronic, Tiptronic" name="f50">Steptronic, Tiptronic</label><br>
    <label ><input type="checkbox" value="USB, audio\video, IN\AUX изводи" name="f51">USB, audio\video, IN\AUX изводи</label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,' Airmatic');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Адаптивно въздушно окачване" name="f52">Адаптивно въздушно окачване<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label ><input type="checkbox" value="Безключово палене " name="f53">Безключово палене </label><br>
    <label ><input type="checkbox" value="Блокаж на диференциала" name="f54">Блокаж на диференциала</label><br>
    <label ><input type="checkbox" value="Бордкомпютър" name="f55">Бордкомпютър</label><br>
    <label ><input type="checkbox" value="Датчик за светлина" name="f56">Датчик за светлина</label><br>
    <label ><input type="checkbox" value="Ел. Огледала" name="f57">Ел. Огледала</label><br>
    <label ><input type="checkbox" value="Ел. Стъкла" name="f58">Ел. Стъкла</label><br>
    <label ><input type="checkbox" value="Ел. регулиране на окачването" name="f59">Ел. регулиране на окачването</label><br>
    <label ><input type="checkbox" value="Ел. регулиране на седалките" name="f60">Ел. регулиране на седалките</label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'EPS (Electric Power Steering)');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Ел. усилвател на волана" name="f61">Ел. усилвател на волана<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label ><input type="checkbox" value="Климатик" name="f62" id='klimatik'onclick="javascript:HideShowKlima('klimatronik');">Климатик</label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'ACC, ECC, Climatecontrol, Climatronic');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Климатроник" name="f63" id='klimatronik'onclick="javascript:HideShowKlima('klimatik');">Климатроник<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label ><input type="checkbox" value="Мултифункционален волан" name="f64">Мултифункционален волан</label><br>
    <label ><input type="checkbox" value="Навигация" name="f65">Навигация</label><br>
    <label ><input type="checkbox" value="Отопление на волана" name="f66">Отопление на волана</label><br>
    <label ><input type="checkbox" value="Печка" name="f67">Печка</label><br>
    <label ><input type="checkbox" value="Подгряване на предното стъкло" name="f68">Подгряване на предното стъкло</label><br>
    <label ><input type="checkbox" value="Подгряване на седалките" name="f69">Подгряване на седалките</label><br>
    <label ><input type="checkbox" value="Регулиране на волана" name="f70">Регулиране на волана</label><br>
    <label ><input type="checkbox" value="Сензор за дъжд" name="f71">Сензор за дъжд</label><br>
    <label ><input type="checkbox" value="Серво усилвател на волана" name="f72">Серво усилвател на волана</label><br>
    <label ><input type="checkbox" value="Система за измиване на фаровете" name="f73">Система за измиване на фаровете</label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'ACC, Cruise Control, Tempomat');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="Система за контрол на скоростта (автопилот)" name="f74">Система за контрол на скоростта (автопилот)<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label ><input type="checkbox" value="Стерео уредба" name="f75">Стерео уредба</label><br>
    <label ><input type="checkbox" value="Филтър за твърди частици" name="f76">Филтър за твърди частици</label><br>
    <label ><input type="checkbox" value="Хладилна жабка" name="f77">Хладилна жабка</label><br>
    </td>
    <td valign=top><label class="extra_cat">Други</label><br><label ><input type="checkbox" value="4x4" name="f78">4x4</label><br>
    <label ><input type="checkbox" value="7 места" name="f79">7 места</label><br>
    <label ><input type="checkbox" value="Buy back" name="f80">Buy back</label><br>
    <label ><input type="checkbox" value="Бартер" name="f81">Бартер</label><br>
    <label ><input type="checkbox" value="Газова уредба" name="f82">Газова уредба</label><br>
    <label ><input type="checkbox" value="Капариран\Продаден" name="f83">Капариран\Продаден</label><br>
    <label ><input type="checkbox" value="Катастрофирал" name="f84">Катастрофирал</label><br>
    <label ><input type="checkbox" value="Лизинг" name="f85">Лизинг</label><br>
    <label ><input type="checkbox" value="Метанова уредба" name="f86">Метанова уредба</label><br>
    <label ><input type="checkbox" value="На части" name="f87">На части</label><br>
    <label ><input type="checkbox" value="Напълно обслужен" name="f88">Напълно обслужен</label><br>
    <label ><input type="checkbox" value="Нов внос" name="f89">Нов внос</label><br>
    <label ><input type="checkbox" value="С право на дан.к-т" name="f90">С право на дан.к-т</label><br>
    <label ><input type="checkbox" value="С регистрация" name="f91">С регистрация</label><br>
    <label ><input type="checkbox" value="Сервизна книжка" name="f92">Сервизна книжка</label><br>
    <label ><input type="checkbox" value="Тунинг" name="f93">Тунинг</label><br>
    <label class="extra_cat">Екстериор</label><br><label ><input type="checkbox" value="2(3) Врати" name="f94">2(3) Врати</label><br>
    <label ><input type="checkbox" value="4(5) Врати" name="f95">4(5) Врати</label><br>
    <label ><input type="checkbox" value="LED фарове" name="f96">LED фарове</label><br>
    <label ><input type="checkbox" value="Ксенонови фарове" name="f97">Ксенонови фарове</label><br>
    <label ><input type="checkbox" value="Лети джанти" name="f98">Лети джанти</label><br>
    <label ><input type="checkbox" value="Металик" name="f99">Металик</label><br>
    <label ><input type="checkbox" value="Отопляеми чистачки" name="f100">Отопляеми чистачки</label><br>
    <label ><input type="checkbox" value="Панорамен люк" name="f101">Панорамен люк</label><br>
    <label ><input type="checkbox" value="Спойлери" name="f102">Спойлери</label><br>
    <label ><input type="checkbox" value="Теглич" name="f103">Теглич</label><br>
    <label ><input type="checkbox" value="Халогенни фарове" name="f104">Халогенни фарове</label><br>
    <label ><input type="checkbox" value="Шибедах" name="f105">Шибедах</label><br>
    </td>
    <td valign=top><label class="extra_cat">Защита</label><br><label ><input type="checkbox" value="Аларма" name="f106">Аларма</label><br>
    <label ><input type="checkbox" value="Брониран" name="f107">Брониран</label><br>
    <label ><input type="checkbox" value="Имобилайзер" name="f108">Имобилайзер</label><br>
    <label ><input type="checkbox" value="Каско" name="f109">Каско</label><br>
    <label ><input type="checkbox" value="Централно заключване" name="f110">Централно заключване</label><br>
    <label class="extra_cat">Интериор</label><br><label ><input type="checkbox" value="Велурен салон" name="f111">Велурен салон</label><br>
    <label ><input type="checkbox" value="Десен волан" name="f112">Десен волан</label><br>
    <label ><input type="checkbox" value="Кожен салон" name="f113">Кожен салон</label><br>
    <label class="extra_cat">Специализирани</label><br><label ><input type="checkbox" value="TAXI" name="f114">TAXI</label><br>
    <label OnMouseOver="javascript:ShowExtriDescription(this,'Инвалиден');" OnMouseOut="javascript:HideExtriDescription();"><input type="checkbox" value="За хора с увреждания" name="f115">За хора с увреждания<img src="//www.mobile.bg/images/picturess/info.jpg" width="16" height="16" style="margin:2px 0 -2px 0;"></label><br>
    <label ><input type="checkbox" value="Катафалка" name="f116">Катафалка</label><br>
    <label ><input type="checkbox" value="Линейка" name="f117">Линейка</label><br>
    <label ><input type="checkbox" value="Учебен" name="f118">Учебен</label><br>
    <label ><input type="checkbox" value="Хладилен" name="f119">Хладилен</label><br>
    </td>

            </tr>
          </table>
          <div id="ExtriDesc" class="ExtriDesc" style="display: none; margin:0 auto;">
            <div style="position:relative;bottom:0px;">
              <span id="descarrow" class="arrow"><i></i></span>
            </div>
            <span id="descr_txt"></span>
          </div>
          
                      
          <table width=940 cellspacing=0 cellpadding=0 border=0 style="margin-top:20px;">
            <tr>
              <td width=300 valign="top">
                
      <table width=300 cellspacing=0 cellpadding=0 border=0>
        <tr><td class="pubTitles">Допълнителна информация</td></tr>
        <tr>
          <td style="padding-top:10px">
            <textarea cols=36 name="f21" rows=10 wrap=virtual maxlength="5500" class="sw300"></textarea><br><span style="color:#FF0000;">Моля, не пишете телефони в това поле!</span><br><i>Ако желате да публикувате повече от един телефон в обявата си, направете я VIP или ТОП.</i>
          </td>
        </tr>
        
      </table>
      
              </td>
              <td width=20><img src="//www.mobile.bg/images/picturess/no.gif" width=20 height=1 border=0></td>
              <td width=620 valign="top">
                

      <div id="phonePopup" class="phonePopup" style="display: none; margin:0 auto;">
        <span id="phone_txt"></span>
        <div style="position:relative;bottom:0px;">
          <span id="phone_arrow" class="phone_arrow"><i></i></span>
        </div>
      </div>
                <div style="clear:both"></div>
                
              </td>
            </tr>
            
            
            
          </table>
          
              <table width=940 cellpadding=0 cellspacing=0 border=0>
                <tr>
                  <td width=590>
                    
          <div style="margin-top:15px; font-weight:bold; font-size:14px;">ТОП ОФЕРТА и VIP обява за регистрирани потребители</div>
          <table width=580 cellpadding=0 cellspacing=0 border=0 style="margin-top:10px; border:#09F 1px solid; border-top:#09F 2px solid;">
            <tr><td colspan=2 style="padding:5px; font-size:14px;">Да се публикува като:</td></tr>
            <tr>
              <td width="60%" valign="top" style="padding:5px; border-right:#09F 5px solid;">
                <div><label><input type="radio" name="propub" value="0" checked> НОРМАЛНА обява <span style="color:#666; font-style:italic;">(безплатно)</span></label></div><div><label><input type="radio" name="propub" value="1" disabled> VIP обява <span style="color:#666; font-style:italic;">(3.6 лв. с ДДС)</span></label></div><div><label><input type="radio" name="propub" value="8" disabled> <a href="//www.mobile.bg/pcgi/mobile.cgi?act=9&mode=5" target="_blank" style="color:#000000">ТОП оферта</a> <span style="color:#666; font-style:italic;">(18 лв. с ДДС)</span></label></div>
              </td>
              <td width="50%" valign="top" style="padding:5px;">
                В сметката Ви в <b>Mobile.bg</b><br>имате <b>0 лв</b>.<br>
                Ако желаете да я захраните<br>кликнете <b><a href="//www.mobile.bg/pcgi/mobile.cgi?act=16&rub=5" class="navLinks" target="_blank">тук</a></b>.<br>
                <br>
                
              </td>
            </tr>
            <tr><td colspan=2 style="font-size:14px;">&nbsp;</td></tr>
          </table>
          
                  </td>
                  <td width=350 align="right">
                    <label><input type="checkbox" name="chkcond" value=1> Съгласен съм с <a href="//www.mobile.bg/pcgi/mobile.cgi?act=9&mode=4" class="iconLinks" target="_blank">условията за ползване на сайта</a></label><br><br>

                    <input type="submit" name="subm" style="width:230px; height:40px; font-weight:bold;" value="ПУБЛИКУВАЙ ТЕКСТА">

                    <br>
                    <div style="padding-top:10px;"><em style="color:#09F;">*След публикуване на текста<br>ще може да добавите до 17 снимки.</em></div>
                  </td>
                </tr>
              </table>
                  <script>var loc=document.location.toString(); if ( loc.indexOf('vipform')>0 ) { var pc=document.getElementById('pubcode'); if ( pc ) pc.focus(); }</script>
                  
                  {{!! Form::close() !!}}
                      <!--</form>-->
        </body>
    </html>
