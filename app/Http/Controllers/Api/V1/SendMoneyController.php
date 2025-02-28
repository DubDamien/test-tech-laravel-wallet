<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use App\Actions\PerformWalletTransfer;
use App\Http\Requests\Api\V1\SendMoneyRequest;
use Illuminate\Http\Response;

class SendMoneyController
{
    public function __invoke(SendMoneyRequest $request, PerformWalletTransfer $performWalletTransfer): Response
    {
        $recipient = $request->getRecipient();

        $performWalletTransfer->execute(
            sender: $request->user(),
            recipient: $recipient,
            amount: $request->input('amount'),
            reason: $request->input('reason'),
            recuring: $request->input('recursive'),
            start_date: $request->input('start_date'),
            end_date: $request->input('end_date'),
            frequency: $request->input('frequency')
        );

        return response()->noContent(201);
    }
}
