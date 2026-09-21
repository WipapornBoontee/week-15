<?php

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

$output = [
    'users' => User::select('id', 'name', 'email', 'created_at')->get(),
    'blogs_sample' => Blog::latest()->take(5)->get(),
    'personal_access_tokens' => DB::table('personal_access_tokens')->latest()->take(5)->get(['id', 'tokenable_id', 'name', 'created_at', 'last_used_at'])
];

echo json_encode($output, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
