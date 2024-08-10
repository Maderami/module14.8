<?php

include "assets/layout/header.php";
require('filehandler.php');
require 'timeraction.php';
$usersList = new Files();
$usersList = $usersList->getUserListOFile('userslist.txt');
$timer = new Timer();
?>
<div class="container">
    <div class="row">
        <h1>Основные услуги:</h1>
        <div class="col col-lg-4  ">
            <div class="card">
                <div class="card-header">
                    <img class="card-img" src="/assets/images/spa01.jpeg">
                </div>
                <div class="card-body justify-content-center m-auto "><h3>Термальный массаж</h3></div>
                <div class="card-footer "><input class="btn btn-info" value="Узнать подробно"/></div>
            </div>
        </div>
        <div class="col col-lg-4">
            <div class="card">
                <div class="card-header">
                    <img class="card-img" src="/assets/images/spa01.jpeg">
                </div>
                <div class="card-body"><h3>Термальный массаж</h3></div>
                <div class="card-footer"><input class="btn btn-info" value="Узнать подробно"/></div>
            </div>
        </div>
        <div class="col col-lg-4">
            <div class="card">
                <div class="card-header">
                    <img class="card-img" src="/assets/images/spa01.jpeg">
                </div>
                <div class="card-body"><h3>Термальный массаж</h3></div>
                <div class="card-footer"><input class="btn btn-info" value="Узнать подробно"/></div>
            </div>
        </div>
        <div class="col col-lg-4">
            <div class="card">
                <div class="card-header">
                    <img class="card-img" src="/assets/images/spa01.jpeg">
                </div>
                <div class="card-body"><h3>Термальный массаж</h3></div>
                <div class="card-footer"><input class="btn btn-info" value="Узнать подробно"/></div>
            </div>
        </div>
        <div class="col col-lg-4">
            <div class="card">
                <div class="card-header">
                    <img class="card-img" src="/assets/images/spa01.jpeg">
                </div>
                <div class="card-body"><h3>Термальный массаж</h3></div>
                <div class="card-footer"><input class="btn btn-info" value="Узнать подробно"/></div>
            </div>
        </div>
        <div class="col col-lg-4">
            <div class="card">
                <div class="card-header">
                    <img class="card-img" src="/assets/images/spa01.jpeg">
                </div>
                <div class="card-body"><h3>Термальный массаж</h3></div>
                <div class="card-footer"><input class="btn btn-info" value="Узнать подробно"/>
                <?echo md5('hsgh&S^d76w87dg1');?></div>
            </div>
        </div>

    </div>
    <div class="row">
        <h1>Наши акции:</h1>
        <? if ($auth) {
            if (date('d.m.y', time()) == $_SESSION['date']) { ?>
                <div class="col col-lg-5 justify-content-center m-auto mt-3">
                <div class="card">
                    <div class="card-header">
                        <img class="card-img" src="/assets/images/spa03.jpg">
                    </div>
                    <div class="card-body">
                        <h3>Термальный массаж</h3>
                        <p>30% на массаж в данной категории.</p>
                        <p>
                            До конца акции осталось:
                        </p>
                        <h2 id="counter1" class="text-center">
                            <?php
                            $getDateTimeOneDay = $timer->timerOneDay($_SESSION['date']);
                            ?></h2>
                    </div>
                    <div class="card-footer"><input class="btn btn-info" value="Узнать подробно"/></div>
                </div>
                </div><? }
        } ?>
        <?php
        $dateNowEnd = date("j") + 3;
        if ($auth) {
            if (date('d.m', time()) == date('d.m', strtotime($usersList[$_SESSION['login']]['birthday'])) and date('j', time()) <= $dateNowEnd) {
                ?>
                <div class="col col-lg-5 justify-content-center m-auto mt-3">
                <div class="card">
                    <div class="card-header">
                        <img class="card-img" src="/assets/images/spa03.jpg">
                    </div>
                    <div class="card-body">
                        <h3>Термальный массаж</h3>
                        <p>30% на массаж в день рождения. Торопитесь акция длится 3 дня</p>
                        <p>
                            До конца акции осталось:
                        </p>
                        <h2 id="counter" class="text-center"><?php
                            $getDateTime = $timer->timerBirthday($usersList[$_SESSION['login']]['birthday']); ?></h2>
                    </div>
                    <div class="card-footer"><input class="btn btn-info" value="Узнать подробно"/>

                    </div>
                </div>
                </div><? }
        } ?>
    </div>
</div>
<?php
include "assets/layout/footer.php";
?>

