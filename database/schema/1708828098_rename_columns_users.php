<?php

use Core\Database\Migration;
use Core\Facades\App;
use Core\Database\DataBase;

return new class implements Migration
{
    public function up()
    {
        App::get()->singleton(DataBase::class)->exec("ALTER TABLE users CHANGE nama name VARCHAR(50)");
    }

    public function down()
    {
        App::get()->singleton(DataBase::class)->exec("ALTER TABLE users CHANGE name nama VARCHAR(50)");
    }
};
