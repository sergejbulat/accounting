<?php

namespace App\Http\Middleware;

use App\Services\CheckUserRole;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
{
    /**
     * @var CheckUserRole
     */
    private $checkUserRole;

    public function __construct(CheckUserRole $checkUserRole)
    {
        $this->checkUserRole = $checkUserRole;
    }

    public function handle($request, Closure $next)
    {
        if (!$this->checkUserRole->checkUserRole(Auth::user())) {
            return redirect('home');
        }
        return $next($request);
    }
}
