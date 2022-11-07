@setup
    $now = new DateTime;
@endsetup

@servers(['localhost' => '127.0.0.1'])

@task('deploy')
    php artisan queue:restart
    php artisan casino-dog:install -y
@endtask
