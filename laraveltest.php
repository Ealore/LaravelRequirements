<?php
/*
 * Laravel Requisites Checklist
 *
 * Verifies Laravel prerequisites
 *
 * For version 5.1:
 * PHP >= 5.5.9
 * OpenSSL PHP Extension
 * PDO PHP Extension
 * Mbstring PHP Extension
 * Tokenizer PHP Extension
 */
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel Requisites Checklist</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Laravel Requisites Checklist</h1>
            </div>
            <div class="row">
                <h3>PHP version</h3>
                <?php if (version_compare(PHP_VERSION, '5.5.9') >= 0) { ?>
                    <div class="alert alert-success" role="alert">The minimum PHP version supported is 5.5.9, this server is running version <?php echo PHP_VERSION; ?></div>
                <?php } else { ?>
                    <div class="alert alert-warning" role="alert">The minimum PHP version supported is 5.5.9, this server is running version <?php echo PHP_VERSION; ?></div>
                <?php } ?>
            </div>

            <div class="row">
                <h3>OpenSSL PHP Extension</h3>
                <?php if (OPENSSL_VERSION_TEXT) { ?>
                    <div class="alert alert-success" role="alert">OpenSSL PHP extension available in version <?php echo OPENSSL_VERSION_TEXT; ?></div>
                <?php } else { ?>
                    <div class="alert alert-warning" role="alert">OpenSSL PHP extension not available.</div>
                <?php } ?>            </div>

            <div class="row">
                <h3>PDO PHP Extension</h3>
                <?php if ( $tokenizer = phpversion('pdo')) { ?>
                    <div class="alert alert-success" role="alert">PDO PHP extension available in version <?php echo $tokenizer; ?></div>
                <?php } else { ?>
                    <div class="alert alert-warning" role="alert">PDO PHP extension not available.</div>
                <?php } ?>
            </div>

            <div class="row">
                <h3>PDO_SQLite PHP Extension</h3>
                <?php if ( $pdo_sqlite = phpversion('pdo_sqlite')) { ?>
                    <div class="alert alert-success" role="alert">PDO_SQLite PHP extension available in version <?php echo $pdo_sqlite; ?></div>
                <?php } else { ?>
                    <div class="alert alert-warning" role="alert">PDO_SQLite PHP extension not available.</div>
                <?php } ?>
            </div>

            <div class="row">
                <h3>Mbstring PHP Extension</h3>
                <?php if ($mbstring = mb_get_info('internal_encoding')) { ?>
                    <div class="alert alert-success" role="alert">Mbstring PHP extension available with internal encoding set to <?php echo $mbstring; ?></div>
                <?php } else { ?>
                    <div class="alert alert-warning" role="alert">Mbstring PHP extension not available.</div>
                <?php } ?>
            </div>

            <div class="row">
                <h3>Tokenizer PHP Extension</h3>
                <?php if ( $tokenizer = phpversion('tokenizer')) { ?>
                    <div class="alert alert-success" role="alert">Tokenizer PHP extension available in version <?php echo $tokenizer; ?></div>
                <?php } else { ?>
                    <div class="alert alert-warning" role="alert">Tokenizer PHP extension not available.</div>
                <?php } ?>
            </div>

        </div>

    </body>
</html>