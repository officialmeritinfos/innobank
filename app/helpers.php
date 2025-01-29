<?php

if (!function_exists('maskAccountNumber')) {
    /**
     * Shorten an account number by replacing all but the last four digits with '*'.
     *
     * @param string $accountNumber
     * @return string
     */
    function maskAccountNumber(string $accountNumber): string
    {
        if (strlen($accountNumber) < 4) {
            return str_repeat('*', strlen($accountNumber));
        }
        return str_repeat('*', strlen($accountNumber) - 4) . substr($accountNumber, -4);
    }
}

if (!function_exists('generateUniqueAccountNumber')) {
    /**
     * Generate a unique 10-digit account number.
     *
     * @return string
     */
    function generateUniqueAccountNumber(): string
    {
        do {
            $accountNumber = (string) mt_rand(1000000000, 9999999999);
        } while (\App\Models\User::where('account_number', $accountNumber)->exists());

        return $accountNumber;
    }
}
