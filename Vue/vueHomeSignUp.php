<?php $this->titre = "Home | Registration"; ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/style-Inscri.css" rel="stylesheet">
<section class="inscri-block">
    <div class="container">
	<div class="row">
		<div class="col-md-12 inscri-sec">
		    <h2 class="text-center">Registration</h2>
		    <form class="inscri-form">
<form method="POST" action="index.php?home=sendRegistration">
  <div class="form-group">
    <label for="name" class="text-uppercase">Name :</label>
    <input type="text" class="form-control" id="name" name="surname"  placeholder="Name" />
  </div>
  <div class="form-group">
    <label for="name" class="text-uppercase">First name:</label>
    <input type="text" class="form-control"  name="name" placeholder="FirstName" />
  </div>
  <div class="form-group">
    <label for="mail" class="text-uppercase">Password :</label>
    <input type="password" class="form-control" name="password" placeholder="Password"/>
  </div>
  <div class="form-group">
    <label for="mail" class="text-uppercase">Confirm Password :</label>
    <input type="password" class="form-control" name="password" placeholder="Password"/>
  </div>
  <div class="form-group">
    <label for="mail" class="text-uppercase">e-mail :</label>
    <input type="email" class="form-control"  name="mail"  placeholder="E-mail"/>
  </div>

    <input type="submit" value="S'inscrire" class="btn btn-inscri float-right">
    
</form>

