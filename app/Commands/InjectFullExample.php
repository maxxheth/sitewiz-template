<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\File; // Import the File facade
use JsonException; // Import JsonException
use LaravelZero\Framework\Commands\Command;

class InjectFullExample extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // Add arguments for source file and target JSON
    protected $signature = 'app:inject-full-example
                            {source_file : The path to the file containing the example code}
                            {target_json : The path to the target JSON knowledge base file}';

    /**
     * The console command description.
     *
     * @var string
     */
    // Update description
    protected $description = 'Injects the content of a source file into the "full_example" key of a target JSON file.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sourcePath = $this->argument('source_file');
        $targetPath = $this->argument('target_json');

        // 1. Validate source file
        if (!File::exists($sourcePath)) {
            $this->error("Source file not found: {$sourcePath}");
            return Command::FAILURE;
        }
        if (!File::isReadable($sourcePath)) {
            $this->error("Source file is not readable: {$sourcePath}");
            return Command::FAILURE;
        }

        // 2. Validate target JSON file
        if (!File::exists($targetPath)) {
            $this->error("Target JSON file not found: {$targetPath}");
            return Command::FAILURE;
        }
        if (!File::isReadable($targetPath)) {
            $this->error("Target JSON file is not readable: {$targetPath}");
            return Command::FAILURE;
        }
         if (!File::isWritable($targetPath)) {
            $this->error("Target JSON file is not writable: {$targetPath}");
            return Command::FAILURE;
        }

        // 3. Read source file content
        $sourceContent = File::get($sourcePath);
        if ($sourceContent === false) {
             $this->error("Failed to read source file: {$sourcePath}");
             return Command::FAILURE;
        }

        // 4. Read and decode target JSON
        $targetJsonContent = File::get($targetPath);
         if ($targetJsonContent === false) {
             $this->error("Failed to read target JSON file: {$targetPath}");
             return Command::FAILURE;
        }

        try {
            // Decode as associative array (true as second argument)
            $targetData = json_decode($targetJsonContent, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            $this->error("Invalid JSON in target file: {$targetPath}");
            $this->error("Error: " . $e->getMessage());
            return Command::FAILURE;
        }

        // 5. Inject source content into 'full_example' key
        $targetData['full_example'] = $sourceContent;

        // 6. Encode back to JSON (pretty print for readability)
        try {
            $updatedJsonContent = json_encode($targetData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
             $this->error("Failed to encode updated JSON data.");
             $this->error("Error: " . $e->getMessage());
             return Command::FAILURE;
        }


        // 7. Overwrite target JSON file
        if (File::put($targetPath, $updatedJsonContent) === false) {
            $this->error("Failed to write updated content to target JSON file: {$targetPath}");
            return Command::FAILURE;
        }

        $this->info("Successfully injected example from '{$sourcePath}' into '{$targetPath}'.");
        return Command::SUCCESS;
    }

    /**
     * Define the command's schedule.
     * (Keep this method as is unless you need scheduling)
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
