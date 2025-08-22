<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ConsumedTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $startTime = microtime(true);

        $response =  $next($request);

        $consumedTime = microtime(true) - $startTime;
        $response->headers->set('X-Consumed-Time', $consumedTime);

        if ($response instanceof JsonResponse) {
            $data = $response->getData(true);
            $data['consumedTime'] = $consumedTime;
            $response->setData($data);
        }
        
        return $response;
    }
}
