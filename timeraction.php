<?php

class Timer
{

    public function timerBirthday($usersList)
    {
        $daybirthday = date("j", strtotime($usersList));
        $daybirthday = $daybirthday + 3;
        $monbirthday = date("m", strtotime($usersList));
        $yearbirthday = date("y");
        $montstr = ("01" == "{$monbirthday}") ? "Junar" :
            $montstr = ("02" == "{$monbirthday}") ? "Junar" :
                $montstr = ("03" == "{$monbirthday}") ? "Junar" :
                    $montstr = ("04" == "{$monbirthday}") ? "Junar" :
                        $montstr = ("05" == "{$monbirthday}") ? "Junar" :
                            $montstr = ("06" == "{$monbirthday}") ? "Junar" :
                                $montstr = ("07" == "{$monbirthday}") ? "Junar" :
                                    $montstr = ("08" == "{$monbirthday}") ? "August" :
                                        $montstr = ("09" == "{$monbirthday}") ? "September" :
                                            $montstr = ("10" == "{$monbirthday}") ? "October" :
                                                $montstr = ("11" == "{$monbirthday}") ? "November" :
                                                    $montstr = ("12" == "{$monbirthday}") ? "December" : 'Месяц не определен';
        $dateTime = strtotime("{$montstr} {$daybirthday},{$yearbirthday} 23:59:59");
        $getDateTime = date("F d, Y H:i:s", $dateTime);
        return $getDateTime;
    }
    public function timerOneDay($dateses)
    {
        $daybirthday = date("j", strtotime($dateses));
        $monbirthday = date("m", strtotime($dateses));
        $yearbirthday = date("y");
        $montstr = ("01" == "{$monbirthday}") ? "Junar" :
            $montstr = ("02" == "{$monbirthday}") ? "Junar" :
                $montstr = ("03" == "{$monbirthday}") ? "Junar" :
                    $montstr = ("04" == "{$monbirthday}") ? "Junar" :
                        $montstr = ("05" == "{$monbirthday}") ? "Junar" :
                            $montstr = ("06" == "{$monbirthday}") ? "Junar" :
                                $montstr = ("07" == "{$monbirthday}") ? "Junar" :
                                    $montstr = ("08" == "{$monbirthday}") ? "August" :
                                        $montstr = ("09" == "{$monbirthday}") ? "September" :
                                            $montstr = ("10" == "{$monbirthday}") ? "October" :
                                                $montstr = ("11" == "{$monbirthday}") ? "November" :
                                                    $montstr = ("12" == "{$monbirthday}") ? "December" : 'Месяц не определен';
        $dateTime = strtotime("{$montstr} {$daybirthday},{$yearbirthday} 23:59:59");
        $getDateTimeOneDay = date("F d, Y H:i:s", $dateTime);
        return $getDateTimeOneDay;
    }
}

?>