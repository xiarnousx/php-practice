<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RemoteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $isError = $request->query('is_error');
        $url = 'https://jsonplaceholder.typicode.com/posts/1';

        try {
            
            if ($isError == 1) {
                throw new \Exception('Simulated error for testing');
            }

            $response = Http::get($url);
            Log::channel('service')->info('API Response', ['body' => $response->body(), 'url' => $url]);
            return response()->json($response->json());
        } catch (\Exception $e) {
            Log::channel('service')->error('API Exception', ['message' => $e->getMessage(), 'url' => $url]);
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
}