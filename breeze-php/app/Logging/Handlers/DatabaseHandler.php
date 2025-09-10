<?php

namespace App\Logging\Handlers;

use Illuminate\Support\Facades\DB;
use Monolog\Handler\AbstractProcessingHandler;

class DatabaseHandler extends AbstractProcessingHandler
{
    /**
     * Write a log entry to the database.
     *
     * @param  array  $record
     */
    protected function write($record): void
    {
        // Support both array and LogRecord object for compatibility
        if ($record instanceof \Monolog\LogRecord) {
            $recordArr = $record->toArray();
        } else {
            $recordArr = $record;
        }

        DB::table('service_logs')->insert([
            'message' => $recordArr['message'],
            'context' => json_encode($recordArr['context']),
            'level' => $recordArr['level_name'],
            'channel' => $recordArr['channel'],
            'file' => $recordArr['extra']['file'] ?? null,
            'line' => $recordArr['extra']['line'] ?? null,
            'remote_addr' => $recordArr['extra']['remote_addr'] ?? null,
            'user_agent' => $recordArr['extra']['user_agent'] ?? null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}