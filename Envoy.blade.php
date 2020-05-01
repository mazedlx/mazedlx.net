@servers(['web' => 'mazedlx.net'])

@task('deploy', ['on' => 'web'])
    cd /var/www/html/blog
    php artisan down
    git stash
    git pull
    npm install
    npm run prod
    php artisan optimize
    php artisan up
@endtask

@task('posts', ['on' => 'web'])
    cd /var/www/html/blog
    git stash
    git pull
@endtask
