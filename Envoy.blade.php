@servers(['web' => 'mazedlx.net'])

@task('deploy', ['on' => 'web'])
    cd /var/www/html/blog
    php artisan down
    git stash
    git pull
    yarn
    yarn prod
    php artisan up
@endtask