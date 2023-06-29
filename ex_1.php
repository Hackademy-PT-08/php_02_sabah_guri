<?php

$users = [
 ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'Male'],
 ['name' => 'Maria', 'surname' => 'Rossi', 'gender' => 'Female'],
 ['name' => 'Antonio', 'surname' => 'Verdi', 'gender' => 'Male'],
 ['name' => 'Giovanna', 'surname' => 'Rana', 'gender' => 'Female'],

 
];


foreach($users as $user){
   if($user['gender']=='Male'){
    var_dump("Buongiorno Sig. $user[name] $user[surname].\n ");
   }else{
    var_dump("Buongiorno Sig.ra $user[name] $user[surname].\n ");
   }
}