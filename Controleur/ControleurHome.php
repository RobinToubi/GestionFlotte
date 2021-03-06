<?php

require_once 'Vue/Vue.php';

class ControleurHome
{
    public function getHomePage()
    {
      $vue = new Vue('Home');
      $vue->generer(array());
    }

    public function getLoginPage()
    {
      $vue = new Vue('HomeLogin');
      $vue->generer(array());
    }

    public function getSignUpPage()
    {
      $vue = new Vue('HomeSignUp');
      $vue->generer(array());
    }
}

?>
