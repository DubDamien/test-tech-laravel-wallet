<?php

namespace App\Actions;

use App\Models\WalletTransfer;

class RecuringTransfer
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected RecuringTransfer $RecuringTransfer) {}

    public function execute(int $id) {
        $transfer = WalletTransfer::find($id);

        return $transfer;
    }
}
