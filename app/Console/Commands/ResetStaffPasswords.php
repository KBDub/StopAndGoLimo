<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetStaffPasswords extends Command
{
    protected $signature   = 'staff:reset-passwords';
    protected $description = 'One-time: set the Lunar admin staff passwords to the value in STAFF_ADMIN_PASSWORD env var.';

    public function handle(): int
    {
        $password = env('STAFF_ADMIN_PASSWORD');

        if (! $password) {
            $this->error('STAFF_ADMIN_PASSWORD env var is not set. Skipping.');
            return self::FAILURE;
        }

        $hash  = Hash::make($password);
        $rows  = DB::table('lunar_staff')->update(['password' => $hash]);

        $this->info("Updated password for {$rows} staff account(s).");

        return self::SUCCESS;
    }
}
