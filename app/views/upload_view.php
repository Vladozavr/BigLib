

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
 if (@$data['articleUpload'] == true): ?>
<p style="text-align:center;">Статья - <b><?php echo $data['name']?></b>, успешно добавлена!<br><br>
  <a href="<?php echo @$bigLibPrefixServer; ?><?php echo $data['variableIndicateSection']?>/<?php echo $data['sectionIt']?>">Перейти</a><br><br>
<?php else: ?>
  <p style="text-align:center;">Произошла ошибка!</p>
  <p>mysqliError - <?php echo @$data['mysqliError'];?></p><br>
  <p>mysqliErrno - <?php echo @$data['mysqliErrno'];?></p>
  <p><?php echo $data['mesage']; ?></p>
<?php endif; ?>
<?php if (@$data['errUser']): ?>
  <p style="text-align:center"><?php echo $data['mesage']; ?></p>
<?php endif; ?>
