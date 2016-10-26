<?php
/**
 * @Filename    AdminCheck.php
 * @Descript    This is description.
 * @Author      snowdiva
 * @CreateBy    2016/10/17 - 16:21
 * @Copyright   @Snowdiva
 */

namespace App\Http\Middleware;

use Closure;

class AdminCheck
{
    public function handle($request, Closure $next)
    {
        // 验证是否admin管理员
        if (!$request->session()->get('admin')) {
            return redirect('/admin/login');
        }

        return $next($request);
    }
}