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
      $vue = new Vue('Login');
      $vue->generer(array());
    }
}

?>
