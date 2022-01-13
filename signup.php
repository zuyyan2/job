
<style>

@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);
*:focus {
  outline: none;
}

body {
  margin: 0;
  padding: 0;
  background: url(images/fff.jpg);
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}


#login-box {
  position: relative;
  margin: 5% auto;
  width: 400px;
  height: 600px;
  background: #FFF;
  border-radius: 2px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}



h1 {
  margin: 0 0 20px 0;
  font-family: italic;
  font-size: 38px;
  color: #16a085;

  
}

input[type="text"],
input[type="password"] {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 2px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="submit"] {
  margin-top: 28px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

input[type="submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}


</style>

<div id="login-box">
  <center>
  <br>
    
  <form action="dataccess.php" method="POST">
    <h1 style="font-text:20px"><u><i>Sign up<i></u></h1>
    
    <input type="text" name="username" placeholder="Username"  />
    <input type="text" name="email" placeholder="E-mail" />
    <input type="text" name="Phonenumber" placeholder="phonenumber" />
    <input type="text" name="DateofBirth" placeholder="Date of Birth" />
    <input type="text" name="Education" placeholder="Education" />
    <input type="text" name="Gender" placeholder="Gender" />
    <input type="password" name="password" placeholder="Password" />


    <input type="submit" class="btn btn-default" name="btnsign" value="Register">
    <h4> already have account <a href="login.php">login here </a> </h6>
    
</form>
</center>

    <br>
    <br>
   
    
  </div>
  
  