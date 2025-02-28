<?php

namespace App\Actions;

use App\Models\WalletTransfer;
use Illuminate\Http\Response;

class RecuringTransfer
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected RecuringTransfer $RecuringTransfer){}

    public function execute(int $id): Response {
        $transfer = WalletTransfer::delete($id);

        return response()->noContent(204);
    }
}
