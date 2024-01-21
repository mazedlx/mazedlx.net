<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CreatePostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:create
                            {title : The title of the post}
                            {--date=now : The date of the post}
                            {--publish=yes : Wether to publish the post}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new post.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $title = $this->argument('title');
        $slug = mb_strtolower(Str::slug($title));
        $options = $this->options();
        $date = 'now' === $options['date'] ? Carbon::now() : Carbon::createFromFormat('Y-m-d', $options['date']);
        $published = 'yes' === $options['publish'] ? '' : 'published: no';

        $path = $date->format('Y-m-d') . '.' . $slug . '.md';

        $contents = file_get_contents(__DIR__ . '/stubs/post-stub.md');
        $contents = str_replace(['$title', '$slug', '$date', '$published'], [$title, $slug, $date->format('Y-m-d'), $published], $contents);

        if (Storage::disk('posts')->exists($path)) {
            $this->error($path . ' already exists!');

            return;
        }
        Storage::disk('posts')->put($path, $contents);

        $this->line('The post');
        $this->info($path);
        $this->line('was created successfully 👍');
    }
}
