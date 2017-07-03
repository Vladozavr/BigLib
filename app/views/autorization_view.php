<?php
$routes = explode('/',$_SERVER['REQUEST_URI']);
  if ($routes[1] == 'bigLib') {
  $firstRout = 2;
  $secondRout = 3;
  $bigLibPrefix = "/bigLib";
}else{
  $firstRout = 1;
  $secondRout = 2;
  $bigLibPrefix ="";
}
if ($data['numRowsCheckUser'] != 0):?>
  <p>Вы успешно вошли!</p>
  <script type='text/javascript'>setTimeout(function(){document.location.href ='<?php echo $bigLibPrefix;?>/';}, 1000);</script>
<?php else: ?>
  <p>Логин и/или пароль не совпадают!</p>
<?php endif; ?>
