<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;

class createCustomBlade extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:blade {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = explode('.', $this->argument('name'));
        $fileName = array_pop($data);
        $main_path = implode('/', $data);
        if (!File::isDirectory(resource_path('views/'.$main_path))) {
            File::makeDirectory(resource_path('views/'.$main_path), 0777, true, true);
        }
        $path = resource_path('views/frontend/layouts/template.html'); 
        $template_data = file_get_contents($path);  
        $path2 = resource_path('views/'.$main_path.'/'.$fileName.'.blade.php'); 
        File::put($path2, $template_data); 
        $this->info('Custom blade createde');
    }
}
