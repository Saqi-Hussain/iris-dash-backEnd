<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'api/*', // Exclude your API routes from CSRF verification
        // Add any other routes you want to exclude
        'register',  // Add your routes here
        'login',     // Add other routes as needed
        'resetPassword', // Add your route here
    ];
}
