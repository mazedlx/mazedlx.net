@servers(['web' => 'mazedlx.net'])

@task('deploy', ['on' => 'web'])
    cd /var/www/html/blog
    php artisan down
    git stash
    git pull
    composer install --no-dev
    npm install
    npm run prod
    php artisan optimize
    php artisan responsecache:clear
    php artisan up
@endtask

@task('posts', ['on' => 'web'])
    cd /var/www/html/blog
    git stash
    git pull
    php artisan responsecache:clear
@endtask
