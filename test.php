<?php




session_start();

if (isset($_SESSION['score'])){

echo "session isset";

}else {
  $_SESSION['score'] = 0;
}


for ($i=0; $i < 10; $i++) { 
  $_SESSION['score']++;
  echo $_SESSION['score'];
}

?>