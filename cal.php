
<?php
$events = [
    ['event_date'=>'03-12-2024', 'content'=>'Fryzjer'],
    ['event_date'=>'10-12-2024', 'content'=>'Obiad u Macieja'],
    ['event_date'=>'18-12-2024', 'content'=>'Szkolenie'],
    ['event_date'=>'28-01-2024', 'content'=>'Szpital'],
    ['event_date'=>'18-02-2024', 'content'=>'Kolacja u Madzi'],
    ['event_date'=>'24-03-2024', 'content'=>'Mechanik'],
    ['event_date'=>'18-05-2024', 'content'=>'Wakacje']
];
?>
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
    if(isset($_GET['wcz_tyg'])){ 
            $wcz_tyg=$_GET['wcz_tyg'];
        }
        else {
            $wcz_tyg=0;
        }


    for ($i = -dniDoPoprzPon()-7*$wcz_tyg; $i < 30 - dniDoPoprzPon(); $i++) {
        $isSunday = date('N', strtotime("{$i} days")) == 7;
        $dodatkowe_klasy = $isSunday ? ' niedziela' : '';

        if (($i>-dniDoPoprzPon()-1) && ($i<-dniDoPoprzPon()+7))
            {$dodatkowe_klasy = $dodatkowe_klasy . ' this_week';}
        if ($i==0)
            {$dodatkowe_klasy = $dodatkowe_klasy . ' dzis';}
            
        echo '<div class="day-box'.$dodatkowe_klasy.'">'.liczbaNaDate($i).'</div>';
    }
    
    ?>
</div>
<p><a href="?id=5&wcz_tyg=4">Dodaj 4 wcześniejsze tygodnie</a></p>
<p><a href="?id=5&nast_tyg=8">Dodaj 8 następnych tygodni</a></p>