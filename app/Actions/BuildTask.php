<?php
 
namespace App\Actions;
 
use Hyde\Framework\Features\BuildTasks\PostBuildTask;
 
class BuildTask extends PostBuildTask
{
    public static string $message = 'Say hello';
 
    public function handle(): void
    {
        $this->info('Hello World!');
    }
 
    public function printFinishMessage(): void
    {
        $this->line('Goodbye World!');
    }
}