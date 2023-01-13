<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="44.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:#F0FFFF;
}
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

/* Style the header */
header {
  padding: 5px;
/*text-align: center;*/
  font-size: 20px;
  color: black;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: right;
  width: 40%; 
  padding: 62px;
}

h1{
font-size: 40px;
}

article {
  float: left;
  padding-bottom: 30px;
  padding-top: 3px;
  width: 60%;
 
height:1300px;

  
  
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}



/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
body {
  overflow: hidden; /* Hide scrollbars */
}

</style>
</head>
<body>


<header>
  <img src="1.jpg" height="50px">
</header>

<section>
<nav>
  <h1><center>Welcome to AU Dashboard</center></h1><br>    
    <div class="login">  
      
<center>

<form  action="logina.php" method="post"  >
  <div>
   
  <div class="form-field">
    <input type="email" name="n1" placeholder="Email " >
  </div>
  
  <div class="form-field">
    <input type="password" name="n2" placeholder="Password" >                         </div>
  
  <div class="form-field">
<button class="btn" type="submit">Log in</button>
    
  </div>
</form>
<!-- partial -->
  



    </div>		
         
    </form>     
  </nav>
  <article>
    <img src="33.jpg" height="50%" width="100%">
  </article>
</section>



</body>
</html>

