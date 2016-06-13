<?php 

class UserTableSeeder extends Seeder {

    public function run()
    {

        $user = new User();
        $user->username = "kidlover";
        $user->email = "kidlover@gmail.com";
        $user->password = "lovekids";
        $user->save();
        
        $user = new User();
        $user->username = "youngcoda";
        $user->email = "youngcoda@gmail.com";
        $user->password = "codacoda";
        $user->save();

        $user = new User();
        $user->username = "imonlyten";
        $user->email = "imonlyten@gmail.com";
        $user->password = "imten";
        $user->save();        
    }

}