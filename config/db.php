<?php
if (YII_ENV_DEV) {
  return [
      'class' => 'yii\db\Connection',
      'dsn' => 'mysql:host=mysql3000.mochahost.com;dbname=beto2gom_green_auditorio_telmex',
      'username' => 'beto2gom_develop',
      'password' => 'c0d1ngG33k',
      'charset' => 'utf8',
  ];
} else {
  return [
      'class' => 'yii\db\Connection',
      'dsn' => 'mysql:host=localhost;dbname=particip_auditorio',
      'username' => 'particip_GeekDev',
      'password' => 'c0d1ngG33k',
      'charset' => 'utf8',
  ];
}
