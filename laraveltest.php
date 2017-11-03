<?php
/*
* Laravel Requirements Checklist
*
* Verifies Laravel requirements
*
* For version 5.4:
* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
*
* optional:
* PDO_SQLite
*
* Author: Andrea Bergamasco <abergamasco@gmail.com>
*/

define('LARAVEL_MIN_PHP_VERSION', '5.6.4');

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

        <div class="row">
            <h3>PHP version</h3>
            <?php if (version_compare(PHP_VERSION, LARAVEL_MIN_PHP_VERSION) >= 0) { ?>
            <div class="alert alert-success" role="alert">
                The minimum PHP version supported is <?php echo LARAVEL_MIN_PHP_VERSION; ?>,
                this server is running version <?php echo PHP_VERSION; ?>
            </div>
            <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                The minimum PHP version supported is <?php echo LARAVEL_MIN_PHP_VERSION ?>',
                this server is running version <?php echo PHP_VERSION; ?>
            </div>
            <?php } ?>
        </div>

        <div class="row">
            <h3>OpenSSL PHP Extension</h3>
            <?php if (OPENSSL_VERSION_TEXT) { ?>
            <div class="alert alert-success" role="alert">
                OpenSSL PHP extension available in version <?php echo str_replace('OpenSSL', '', OPENSSL_VERSION_TEXT); ?>
            </div>
            <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                OpenSSL PHP extension not available.
            </div>
            <?php } ?>
        </div>

        <div class="row">
            <h3>PDO PHP Extension</h3>
            <?php if ($pdo = phpversion('pdo')) { ?>
            <div class="alert alert-success" role="alert">
                PDO PHP extension available in version <?php echo $pdo; ?>
            </div>
            <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                PDO PHP extension not available.
            </div>
            <?php } ?>
        </div>

        <div class="row">
            <h3>Mbstring PHP Extension</h3>
            <?php if ($mbstring = mb_get_info('internal_encoding')) { ?>
            <div class="alert alert-success" role="alert">
                Mbstring PHP extension available with internal encoding set to <?php echo $mbstring; ?>
            </div>
            <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                Mbstring PHP extension not available.
            </div>
            <?php } ?>
        </div>

        <div class="row">
            <h3>Tokenizer PHP Extension</h3>
            <?php if ($tokenizer = phpversion('tokenizer')) { ?>
            <div class="alert alert-success" role="alert">
                Tokenizer PHP extension available in version <?php echo $tokenizer; ?>
            </div>
            <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                Tokenizer PHP extension not available.
            </div>
            <?php } ?>
        </div>

        <div class="row">
            <h3>XML PHP Extension</h3>
            <?php if ($xml = phpversion('xml')) { ?>
            <div class="alert alert-success" role="alert">
                XML PHP extension available in version <?php echo $xml; ?>
            </div>
            <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                XML PHP extension not available.
            </div>
            <?php } ?>
        </div>

        <div class="row">
            <h2>Optional extensions</h2>
        </div>

        <div class="row">
            <h3>PDO_SQLite PHP Extension <small>(necessary if you plan to use an SQLite database)</small></h3>
            <?php if ($pdo_sqlite = phpversion('pdo_sqlite')) { ?>
            <div class="alert alert-success" role="alert">
                PDO_SQLite PHP extension available in version <?php echo $pdo_sqlite; ?>
            </div>
            <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                PDO_SQLite PHP extension not available.
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
