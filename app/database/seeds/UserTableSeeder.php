<?php

class UserTableSeeder extends Seeder {

    public function run()
    {

        $user = new User();
        $user->parentName = "John Smith";
        $user->childName = "Jim Smith";
        $user->username = "codelover";
        $user->email = "codelover@gmail.com";
        $user->password = Hash::make($_ENV['USER_PASSWORD']);
        $user->save();
        
        $user = new User();
        $user->parentName = "Sam Smith";
        $user->childName = "Sarah Smith";
        $user->username = "youngcoda";
        $user->email = "youngcoda@gmail.com";
        $user->password = Hash::make($_ENV['USER_PASSWORD']);
        $user->save();

        $user = new User();
        $user->parentName = "Jack Smith";
        $user->childName = "Jill Smith";
        $user->username = "imonlyten";
        $user->email = "imonlyten@gmail.com";
        $user->password = Hash::make($_ENV['USER_PASSWORD']);
        $user->save();        
    }

}