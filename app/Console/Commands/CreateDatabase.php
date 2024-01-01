<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "create-database";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Create database for project";

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $database = config("database.connections.mysql.database");

        $this->reconnnect(null);

        $query = "CREATE DATABASE IF NOT EXISTS $database CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";

        DB::statement($query);

        $this->info("Database $database created successfully!");

        $this->reconnnect($database);
    }

    private function reconnnect(?string $db): void
    {
        config(["database.connections.mysql.database" => $db]);

        DB::purge("mysql");
        DB::reconnect();
    }
}
