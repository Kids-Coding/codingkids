<?php 

class UserTableSeeder extends Seeder {

    public function run()
    {

        $user = new User();
        $user->parentName = "John Smith";
        $user->childName = "Jim Smith";
        $user->username = "kidlover";
        $user->email = "kidlover@gmail.com";
        $user->password = "lovekids";
        $user->confirmPassword = "lovekids";
        $user->save();
        
        $user = new User();
        $user->parentName = "Sam Smith";
        $user->childName = "Sarah Smith";
        $user->username = "youngcoda";
        $user->email = "youngcoda@gmail.com";
        $user->password = "codacoda";
        $user->confirmPassword = "codacoda";
        $user->save();

        $user = new User();
        $user->parentName = "Jack Smith";
        $user->childName = "Jill Smith";
        $user->username = "imonlyten";
        $user->email = "imonlyten@gmail.com";
        $user->password = "imten";
        $user->confirmPassword = "imten";
        $user->save();        
    }

}