<?php

use App\User;
use App\Service;
use App\Order;
use App\Review;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        Service::truncate();
        Order::truncate();
        Review::truncate();

        $userQunatity = 200;
        $serviceQunatity = 10;
        $orderQunatity = 100;
        $reviewQunatity = 200;

        factory(User::class,$userQunatity)->create();
        factory(Service::class,$serviceQunatity)->create();
        factory(Order::class,$orderQunatity)->create();
        factory(Review::class,$reviewQunatity)->create();
    }
}
