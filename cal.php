<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generowanie Divów</title>
    <style>
        /* CSS */
        .container {
            display: flex;
            flex-wrap: wrap;
            width: 100%; 
        }
        .day-box {
            width: 13.3%;
            border: 1px solid black;
            margin: 1px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
        }
        .niedziela {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Nazwy dni tygodnia -->
    <div class="day-box">Pn</div>
    <div class="day-box">Wt</div>
    <div class="day-box">Śr</div>
    <div class="day-box">Cz</div>
    <div class="day-box">Pt</div>
    <div class="day-box">So</div>
    <div class="day-box niedziela">Nd</div>

    <?php
    function liczbaNaDate($liczba) {
        return date('d-m-Y', strtotime("{$liczba} days"));
    }

    function dniDoPoprzPon() {
        $dzisiaj = date('N');
        return $dzisiaj - 1;
    }

    for ($i = -dniDoPoprzPon(); $i < 30 - dniDoPoprzPon(); $i++) {
        $isSunday = date('N', strtotime("{$i} days")) == 7;
        $dodatkowe_klasy = $isSunday ? ' niedziela' : '';
        echo '<div class="day-box'.$dodatkowe_klasy.'">'.liczbaNaDate($i).'</div>';
    }
    ?>
</div>

</body>
</html>