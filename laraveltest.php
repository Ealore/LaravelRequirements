<?php
/*
* Laravel Requirements Checklist
*
* Verifies Laravel requirements
*
* For version 5.8:
*    PHP >= 7.1.3
*    BCMath PHP Extension
*    Ctype PHP Extension
*    JSON PHP Extension
*    Mbstring PHP Extension
*    OpenSSL PHP Extension
*    PDO PHP Extension
*    Tokenizer PHP Extension
*    XML PHP Extension
*
* optional:
*    PDO_SQLite (if you plan to use SQLite)
*
* Author: Andrea Bergamasco <abergamasco@gmail.com>
*/

define('LARAVEL_MIN_PHP_VERSION', '7.1.3');

$required_extensions = [
  'bcmath' => 'BCMath',
  'ctype' => 'Ctype',
  'json' => 'JSON',
  'mbstring' => 'Mbstring',
  'openssl' => 'OpenSSL',
  'pdo' => 'PDO',
  'tokenizer' => 'Tokenizer',
  'xml' => 'XML',
];

$optional_extensions = [
  'pdo_sqlite' => 'PDO_SQLite',
];

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Requirements Checklist</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Laravel Requirements Checklist</h1>
        </div>

<!-- PHP >= 7.1.3 -->

        <div class="row">
            <h3>PHP version</h3>
            <?php if (version_compare(PHP_VERSION, LARAVEL_MIN_PHP_VERSION) >= 0) { ?>
            <div class="alert alert-success" role="alert">
                The minimum PHP version supported is <?php echo LARAVEL_MIN_PHP_VERSION; ?>,
                this server is running version <?php echo PHP_VERSION; ?>
            </div>
            <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                The minimum PHP version supported is <?php echo LARAVEL_MIN_PHP_VERSION ?>',
                this server is running version <?php echo PHP_VERSION; ?>
            </div>
            <?php } ?>
        </div>


<?php foreach($required_extensions as $ext_slug => $ext_name): ?>


<!-- <?= $ext_name ?> PHP Extension -->

        <div class="row">
            <h3><?= $ext_name ?> PHP Extension</h3>
            <?php
            $ext_version = null;

            try {
              $ext = new ReflectionExtension($ext_slug);
              $ext_version = $ext->getVersion();
            } catch(ReflectionException $exception) {
              $ext_version = null;
            }

            if ($ext_version): ?>
              <div class="alert alert-success" role="alert">
                  <?= $ext_name ?> PHP extension available in version <?php echo $ext_version; ?>
              </div>
            <?php else: ?>
              <div class="alert alert-danger" role="alert">
                  <?= $ext_name ?> PHP extension not available.
                  <pre style="margin-top: 10px;"><?= $exception->getMessage() ?></pre>
              </div>
            <?php endif; ?>
        </div>


<?php endforeach; ?>


        <div class="row">
            <h2>Optional extensions</h2>
        </div>


<?php foreach($optional_extensions as $ext => $ext_name): ?>


        <div class="row">
            <h3><?= $ext_name ?> PHP Extension</h3>
            <?php
            $ext_version = null;

            try {
              $ext = new ReflectionExtension($ext_slug);
              $ext_version = $ext->getVersion();
            } catch(ReflectionException $exception) {
              $ext_version = null;
            }

            if ($ext_version): ?>
              <div class="alert alert-success" role="alert">
                  <?= $ext_name ?> PHP extension available in version <?php echo $ext_version; ?>
              </div>
            <?php else: ?>
              <div class="alert alert-danger" role="alert">
                  <?= $ext_name ?> PHP extension not available.
                  <pre style="margin-top: 10px;"><?= $exception->getMessage() ?></pre>
              </div>
            <?php endif; ?>
        </div>


<?php endforeach; ?>


    </div>
</body>
</html>
