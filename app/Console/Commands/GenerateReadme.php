<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GenerateReadme extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:readme';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Readme.txt ';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
{
    $users = DB::table('users')->select('nama', 'password')->get();
    $databaseVersion = DB::select('SELECT VERSION() AS version')[0]->version;
    $phpVersion = PHP_VERSION;

    $content = '';

    foreach ($users as $user) {
        $content .= "Username: {$user->nama}\n";
        $content .= "Password: {$user->password}\n";
        $content .= "\n";
    }

    $content .= "Framework : Laravel\n";
    $content .= "Database Version: {$databaseVersion}\n";
    $content .= "PHP Version: {$phpVersion}\n";

    $file = fopen(storage_path('app/readme.txt'), 'w');
    fwrite($file, $content);
    fclose($file);

    $this->info('readme.txt file generated successfully!');
}


}
