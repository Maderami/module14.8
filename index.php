<?php

include "assets/layout/header.php";
require('filehandler.php');
$usersList = new Files();
$usersList = $usersList->getUserListOFile('userslist.txt');
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
                <div class="card-footer"><input class="btn btn-info" value="Узнать подробно"/></div>
            </div>
        </div>

    </div>
    <div class="row">
        <h1>Наши акции:</h1>
        <?if(date('m/d/Y h:i:s a', time())<="08/08/2024 18:00:00"){?>
        <div class="col col-lg-5 justify-content-center m-auto mt-3">
            <div class="card">
                <div class="card-header">
                    <img class="card-img" src="/assets/images/spa03.jpg">
                </div>
                <div class="card-body">
                    <h3>Термальный массаж</h3>
                    <p>30% на массаж в данной категории. Торопитесь акция длится неделю</p>
                </div>
                <div class="card-footer"><input class="btn btn-info" value="Узнать подробно"/></div>
            </div>
        </div> <?}?>
        <?if(date('m/d/Y h:i:s a', time())<="08/08/2024 18:00:00"){?>
        <div class="col col-lg-5 justify-content-center m-auto mt-3">
            <div class="card">
                <div class="card-header">
                    <img class="card-img" src="/assets/images/spa03.jpg">
                </div>
                <div class="card-body">
                    <h3>Термальный массаж</h3>
                    <p>30% на массаж в данной категории. <?php require_once 'timeraction.php';?></p>
                </div>
                <div class="card-footer"><input class="btn btn-info" value="Узнать подробно"/></div>
            </div>
        </div><?}?>
        <?php
        $dateNowEnd = date("j")+2;
        if($auth){
        if(date('d.m', time())==$usersList[$_SESSION['login']]['birthday'] and date('j', time())<=$dateNowEnd){?>
        <div class="col col-lg-5 justify-content-center m-auto mt-3">
            <div class="card">
                <div class="card-header">
                    <img class="card-img" src="/assets/images/spa03.jpg">
                </div>
                <div class="card-body">
                    <h3>Термальный массаж</h3>
                    <p>30% на массаж в день рождения. Торопитесь акция длится 2 дня</p>
                </div>
                <div class="card-footer"><input class="btn btn-info" value="Узнать подробно"/><p>
                        До конца акции осталось:
                    </p>
                    <h2 id="counter" class="text-center"></h2>
                <span>

                </span></div>
            </div>
        </div><?}}?>
    </div>
</div>
<?php
include "assets/layout/footer.php";
?>

