<?php

namespace Mayfield\Console\Commands;

use Illuminate\Console\Command;

class Bookkeeping extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bookkeeping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'プレイヤーの集計';

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
        var_dump(env('TWITTER_CONSUMER_KEY'));
    }
}
