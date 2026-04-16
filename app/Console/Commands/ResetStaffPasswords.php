<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ResetStaffPasswords extends Command
{
    protected $signature   = 'staff:reset-passwords';
    protected $description = 'One-time: apply the pre-hashed admin password from STAFF_ADMIN_HASH env var to all staff accounts.';

    public function handle(): int
    {
        $hash = env('STAFF_ADMIN_HASH');

        if (! $hash) {
            $this->info('STAFF_ADMIN_HASH not set — skipping.');
            return self::SUCCESS;
        }

        $rows = DB::table('lunar_staff')->update(['password' => $hash]);

        $this->info("Staff password reset applied to {$rows} account(s).");

        return self::SUCCESS;
    }
}
