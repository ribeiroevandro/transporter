<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/provider/request/*',
        '/provider/profile/available',
        '/provider/paytm/response',
        '/paytm/response',
        '/stripe/account',
        '/pagar/success/provider',
        'pagar/success',
        'provider/pagar/success',
        '/pagar/flow',
        '/contact/us',
        '/wallet/*',
        '/account/kit',
        '*/logout',
        '/socket'
    ];
}
