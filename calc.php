<?php
        $sumVkl = $_POST['sumVkl'];
        $sumPopVkl = $_POST['sumPopVkl'];
        $dateDep = $_POST['dateDep'];
        $percent=0.1;
        $period = $_POST['srokVklad'];
        $depositRefill = $_POST['depositRefill'];
        
        if ($dateDep != null){
        for ($i=0; $i<=$period; $i++){
            $time = strtotime($dateDep);
            $year = date("Y",$time);
            $month = date("n",$time);
            $daysn = cal_days_in_month(CAL_GREGORIAN, $month, $year);
            $daysy = date('L',$time)?366:365;
            if($depositRefill == 1){
                if($i==0){
                    $day = date("j",$time);
                    $sumVkl = $sumVkl + ($sumVkl + $sumPopVkl)*($daysn - $day)*($percent / $daysy);
                } else {
                $sumVkl = $sumVkl + ($sumVkl + $sumPopVkl)*$daysn*($percent / $daysy);
            }
            } else {
                if($i==0){
                    $day = date("j",$time);
                    $sumVkl = $sumVkl + $sumVkl*($daysn - $day)*($percent / $daysy);
                } else {
                $sumVkl = $sumVkl + $sumVkl*$daysn*($percent / $daysy);
                }
            }
            $dateDep = date('d.m.Y', strtotime($dateDep."+1 month"));
        }

        echo round($sumVkl, 2).' руб.';
    } else {
        echo 'Ошибка: Заполните поле "Дата оформления вклада"';
    }
        
?>