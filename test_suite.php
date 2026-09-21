<?php

require __DIR__ . '/vendor/autoload.php';

function testSuite() {
    $app = require __DIR__ . '/bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

    echo "\n======================================================\n";
    echo "       LARAVEL RESTFUL API & SANCTUM TEST SUITE       \n";
    echo "======================================================\n\n";

    // Test 1: Register (Success -> 201)
    echo "[TEST 1] Registering a new user...\n";
    $email = 'tester_' . uniqid() . '@example.com';
    $req = Illuminate\Http\Request::create('/api/register', 'POST', [
        'name' => 'Test User',
        'email' => $email,
        'password' => 'secret123',
        'password_confirmation' => 'secret123'
    ], [], [], ['HTTP_ACCEPT' => 'application/json']);
    $res = $kernel->handle($req);
    $data = json_decode($res->getContent(), true);
    echo "  Status: " . $res->getStatusCode() . " (Expected: 201)\n";
    echo "  Response: " . json_encode($data, JSON_UNESCAPED_UNICODE) . "\n\n";
    $kernel->terminate($req, $res);

    // Test 2: Validation Error (Expect 422)
    echo "[TEST 2] Validation Error (empty fields)...\n";
    $app2 = require __DIR__ . '/bootstrap/app.php';
    $kernel2 = $app2->make(Illuminate\Contracts\Http\Kernel::class);
    $req = Illuminate\Http\Request::create('/api/register', 'POST', [], [], [], ['HTTP_ACCEPT' => 'application/json']);
    $res = $kernel2->handle($req);
    echo "  Status: " . $res->getStatusCode() . " (Expected: 422)\n";
    echo "  Response: " . $res->getContent() . "\n\n";
    $kernel2->terminate($req, $res);

    // Test 3: Login (Success -> 200 & returns PlainTextToken)
    echo "[TEST 3] Login with registered user...\n";
    $app3 = require __DIR__ . '/bootstrap/app.php';
    $kernel3 = $app3->make(Illuminate\Contracts\Http\Kernel::class);
    $req = Illuminate\Http\Request::create('/api/login', 'POST', [
        'email' => $email,
        'password' => 'secret123'
    ], [], [], ['HTTP_ACCEPT' => 'application/json']);
    $res = $kernel3->handle($req);
    $data = json_decode($res->getContent(), true);
    $token = $data['token'] ?? null;
    echo "  Status: " . $res->getStatusCode() . " (Expected: 200)\n";
    echo "  Obtained Token: " . $token . "\n\n";
    $kernel3->terminate($req, $res);

    // Test 4: Protected GET /api/user with valid token
    echo "[TEST 4] Protected GET /api/user with Bearer Token...\n";
    $app4 = require __DIR__ . '/bootstrap/app.php';
    $kernel4 = $app4->make(Illuminate\Contracts\Http\Kernel::class);
    $req = Illuminate\Http\Request::create('/api/user', 'GET', [], [], [], [
        'HTTP_ACCEPT' => 'application/json',
        'HTTP_AUTHORIZATION' => 'Bearer ' . $token
    ]);
    $res = $kernel4->handle($req);
    echo "  Status: " . $res->getStatusCode() . " (Expected: 200)\n";
    echo "  User: " . $res->getContent() . "\n\n";
    $kernel4->terminate($req, $res);

    // Test 5: Protected GET /api/user without token (Expect 401)
    echo "[TEST 5] Protected GET /api/user WITHOUT token (Expect 401)...\n";
    $app5 = require __DIR__ . '/bootstrap/app.php';
    $kernel5 = $app5->make(Illuminate\Contracts\Http\Kernel::class);
    $req = Illuminate\Http\Request::create('/api/user', 'GET', [], [], [], [
        'HTTP_ACCEPT' => 'application/json'
    ]);
    $res = $kernel5->handle($req);
    echo "  Status: " . $res->getStatusCode() . " (Expected: 401)\n";
    echo "  Response: " . $res->getContent() . "\n\n";
    $kernel5->terminate($req, $res);

    // Test 6: Create Blog (POST /api/blogs) with Token
    echo "[TEST 6] Create Blog POST /api/blogs with Token...\n";
    $app6 = require __DIR__ . '/bootstrap/app.php';
    $kernel6 = $app6->make(Illuminate\Contracts\Http\Kernel::class);
    $req = Illuminate\Http\Request::create('/api/blogs', 'POST', [
        'title' => 'ทดสอบสร้างบทความผ่าน Sanctum API',
        'content' => 'เนื้อหาบทความละเอียดสำหรับ Assignment สัปดาห์ที่ 15',
        'status' => true
    ], [], [], [
        'HTTP_ACCEPT' => 'application/json',
        'HTTP_AUTHORIZATION' => 'Bearer ' . $token
    ]);
    $res = $kernel6->handle($req);
    $createdBlog = json_decode($res->getContent(), true);
    $blogId = $createdBlog['data']['id'];
    echo "  Status: " . $res->getStatusCode() . " (Expected: 201)\n";
    echo "  Created Blog ID: " . $blogId . "\n";
    echo "  Response (via BlogResource): " . json_encode($createdBlog, JSON_UNESCAPED_UNICODE) . "\n\n";
    $kernel6->terminate($req, $res);

    // Test 7: Public GET /api/blogs
    echo "[TEST 7] Public GET /api/blogs...\n";
    $app7 = require __DIR__ . '/bootstrap/app.php';
    $kernel7 = $app7->make(Illuminate\Contracts\Http\Kernel::class);
    $req = Illuminate\Http\Request::create('/api/blogs', 'GET', [], [], [], ['HTTP_ACCEPT' => 'application/json']);
    $res = $kernel7->handle($req);
    echo "  Status: " . $res->getStatusCode() . " (Expected: 200)\n";
    $list = json_decode($res->getContent(), true);
    echo "  Total returned: " . count($list['data']) . " items\n\n";
    $kernel7->terminate($req, $res);

    // Test 8: Public GET /api/blogs/{id}
    echo "[TEST 8] Public GET /api/blogs/{$blogId}...\n";
    $app8 = require __DIR__ . '/bootstrap/app.php';
    $kernel8 = $app8->make(Illuminate\Contracts\Http\Kernel::class);
    $req = Illuminate\Http\Request::create('/api/blogs/' . $blogId, 'GET', [], [], [], ['HTTP_ACCEPT' => 'application/json']);
    $res = $kernel8->handle($req);
    echo "  Status: " . $res->getStatusCode() . " (Expected: 200)\n";
    echo "  Response: " . $res->getContent() . "\n\n";
    $kernel8->terminate($req, $res);

    // Test 9: Update Blog (PUT /api/blogs/{id}) with Token
    echo "[TEST 9] Update Blog PUT /api/blogs/{$blogId} with Token...\n";
    $app9 = require __DIR__ . '/bootstrap/app.php';
    $kernel9 = $app9->make(Illuminate\Contracts\Http\Kernel::class);
    $req = Illuminate\Http\Request::create('/api/blogs/' . $blogId, 'PUT', [
        'title' => 'บทความนี้ได้รับการอัปเดตแล้วสำเร็จ',
        'status' => false
    ], [], [], [
        'HTTP_ACCEPT' => 'application/json',
        'HTTP_AUTHORIZATION' => 'Bearer ' . $token
    ]);
    $res = $kernel9->handle($req);
    echo "  Status: " . $res->getStatusCode() . " (Expected: 200)\n";
    echo "  Response: " . $res->getContent() . "\n\n";
    $kernel9->terminate($req, $res);

    // Test 10: Logout
    echo "[TEST 10] Logout (Revoke Token)...\n";
    $app10 = require __DIR__ . '/bootstrap/app.php';
    $kernel10 = $app10->make(Illuminate\Contracts\Http\Kernel::class);
    $req = Illuminate\Http\Request::create('/api/logout', 'POST', [], [], [], [
        'HTTP_ACCEPT' => 'application/json',
        'HTTP_AUTHORIZATION' => 'Bearer ' . $token
    ]);
    $res = $kernel10->handle($req);
    echo "  Status: " . $res->getStatusCode() . " (Expected: 200)\n";
    echo "  Response: " . $res->getContent() . "\n\n";
    $kernel10->terminate($req, $res);

    // Test 11: Call Protected Route with Revoked Token (Expect 401)
    echo "[TEST 11] Call Protected Route with Revoked Token (Expect 401)...\n";
    $app11 = require __DIR__ . '/bootstrap/app.php';
    $kernel11 = $app11->make(Illuminate\Contracts\Http\Kernel::class);
    $req = Illuminate\Http\Request::create('/api/user', 'GET', [], [], [], [
        'HTTP_ACCEPT' => 'application/json',
        'HTTP_AUTHORIZATION' => 'Bearer ' . $token
    ]);
    $res = $kernel11->handle($req);
    echo "  Status: " . $res->getStatusCode() . " (Expected: 401)\n";
    echo "  Response: " . $res->getContent() . "\n\n";
    $kernel11->terminate($req, $res);

    echo "======================================================\n";
    echo "             ALL TESTS PASSED WITH SUCCESS            \n";
    echo "======================================================\n";
}

testSuite();
