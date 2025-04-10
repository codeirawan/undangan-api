<?php

use Core\Database\Migration;
use Core\Facades\App;
use Core\Database\DataBase;

return new class implements Migration
{
    public function up()
    {
        App::get()->singleton(DataBase::class)->exec("ALTER TABLE comments CHANGE nama name VARCHAR(255)");
        App::get()->singleton(DataBase::class)->exec("ALTER TABLE comments CHANGE hadir presence TINYINT(1)");
        App::get()->singleton(DataBase::class)->exec("ALTER TABLE comments CHANGE komentar comment TEXT");
    }

    public function down()
    {
        App::get()->singleton(DataBase::class)->exec("ALTER TABLE comments CHANGE name nama VARCHAR(255)");
        App::get()->singleton(DataBase::class)->exec("ALTER TABLE comments CHANGE presence hadir TINYINT(1)");
        App::get()->singleton(DataBase::class)->exec("ALTER TABLE comments CHANGE comment komentar TEXT");
    }
};
