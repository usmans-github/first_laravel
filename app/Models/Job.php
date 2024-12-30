<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                "id" => 1,
                "title" => "Mern Stack Developer",
                "salary" => "$50,000"
            ],
            [
                "id" => 2,
                "title" => "Mean Stack Developer",
                "salary" => "$40,000"
            ],
            [
                "id" => 3,
                "title" => "Java Developer",
                "salary" => "$60,000"
            ],
            [
                "id" => 4,
                "title" => "Backend Developer",
                "salary" => "$65,000"
            ],
        ];
    }

    public static function find(int $id): array 
    {
        return   Arr::first(static::all(), fn($job) => $job["id"] === $id);

        if(! $job){
            abort(404);
        }
        return $job;
    }
}