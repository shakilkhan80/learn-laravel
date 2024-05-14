<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id'      => 1,
                'title'   => 'Developer',
                'company' => 'Google',
                'salary'  => 10000
            ],
            [
                'id'      => 2,
                'title'   => 'Marketer',
                'company' => 'Youtube',
                'salary'  => 30000
            ],
            [
                'id'      => 3,
                'title'   => 'Investor',
                'company' => 'Tesla',
                'salary'  => 200000
            ],
        ];
    }
    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }
        return $job;
    }
}