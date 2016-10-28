<?php 
session_start(); 
include_once "./configuracion.php"; 
  
function verificar_login($user,$password,&$result) { 
    $sql = "SELECT * FROM usuario WHERE DNI = '$user' and password = '$password'";
    $rec = mysql_query($sql); 
    $count = 0; 
  
    while($row = mysql_fetch_object($rec)) 
    { 
        $count++; 
        $result = $row; 
    } 
  
    if($count == 1) 
    { 
        return 1; 
    } 
  
    else 
    { 
        return 0; 
    } 
} 

if(!isset($_SESSION['userid'])) 
{ 
    if(isset($_POST['login'])) 
    { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
        { 
            $resultado = mysql_query('select * from imagen');

        $table = array();
        while($r = mysql_fetch_array($resultado)){
            $row = array();
            foreach($r as $k=>$v) {
                 $row[$k] = $v;
            }
            array_push($table,$row);
            unset($row);
        }
    $_SESSION['imagenes'] = $table;
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $_POST['user'];
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
   
            header("location:inicio.php"); 
        } 
        else 
        { 
            echo '<div class="col-md-18"><h4 class="text-center" style="color:red;">Su usuario es incorrecto intentelo nuevamente</h4>'; 
        } 
    } 
?> 
<style>
    body{
  padding:0;
  margin:0;
}
.vid-container{
  position:relative;
  height:100vh;
  overflow:hidden;
}
.bgvid.back {
  position: fixed; right: 0; bottom: 0;
  min-width: 100%; min-height: 100%;
  width: auto; height: auto; z-index: -100;
}
.inner {
  position: absolute;
}
.inner-container{
  width:400px;
  height:430px;
  position:absolute;
  top:calc(50vh - 200px);
  left:calc(50vw - 200px);
  overflow:hidden;
}
.bgvid.inner{
  top:calc(-50vh + 200px);
  left:calc(-50vw + 200px);
  filter: url("data:image/svg+xml;utf9,<svg%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'><filter%20id='blur'><feGaussianBlur%20stdDeviation='10'%20/></filter></svg>#blur");
  -webkit-filter:blur(10px);
  -ms-filter: blur(10px);
  -o-filter: blur(10px);
  filter:blur(10px);
}
.box{
  position:absolute;
  height:100%;
  width:100%;
  font-family:Helvetica;
  color:#fff;
  background:rgba(0,0,0,0.13);
  padding:30px 0px;
}
.box h1{
  text-align:center;
  margin:30px 0;
  font-size:30px;
}
.box input{
  display:block;
  width:300px;
  margin:10px auto;
  padding:15px;
  background:rgba(0,0,0,0.2);
  color:#fff;
  border:0;
}
.box input:focus,.box input:active,.box button:focus,.box button:active{
  outline:none;
}
.box button{
  background:#742ECC;
  border:0;
  color:#fff;
  padding:10px;
  font-size:20px;
  width:330px;
  margin:20px auto;
  display:block;
  cursor:pointer;
}
.box button:active{
  background:#27ae60;
}
.box p{
  font-size:14px;
  text-align:center;
}
.box p span{
  cursor:pointer;
  color:#666;
}
    
</style>

<link rel="stylesheet" href="css/bootstrap.min.css">
  <div class="vid-container">
  <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
      
     
  <div class="inner-container">
    <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>
    <div class="box">
      <h1>Login</h1>
     
      
      
      <form action="" method="post" class="login"> 
          <div><label ></label><input name="user" type="text"placeholder="Username"></div> 
    <div><label></label><input name="password" type="password" placeholder="Password"/></div> 
    <button name="login">Login</button>

    </form>
      <p>Not a member? <span>Register</span></p>
    </div>
  </div>
</div>
<!--<form action="" method="post" class="login"> 
    <div><label>Username</label><input name="user" type="text" ></div> 
    <div><label>Password</label><input name="password" type="password"></div> 
    <div><input name="login" type="submit" value="login"></div>
</form> -->
<?php 
} else { 
    echo '<div class="col-md-18"><h2 class="text-center" style="color:white;">Progreso</h2>'; 
    echo '<a href="logout.php">Logout</a>'; 
} 
?>