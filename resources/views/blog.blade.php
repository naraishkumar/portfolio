@extends('layout.app')

@section('title', 'Building a REST API with Laravel 12 + Sanctum - Naraish Kumar')

@section('page', 'blog')

@section('content')

<!-- BLOG HERO -->
<div class="blog-hero" style="background:var(--navy);padding:120px 64px 60px;position:relative;overflow:hidden;">
    <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,0.03) 1px,transparent 1px);background-size:24px 24px;"></div>
    <div style="position:relative;z-index:2;margin:0 auto;">
        <div style="display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,0.1);color:#fff;border-radius:100px;padding:4px 16px;font-size:.75rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;margin-bottom:20px;">
            <span style="width:6px;height:6px;background:#3b82f6;border-radius:50%;display:inline-block;"></span>
            Laravel 12
        </div>
        <h1 style="font-family:'Playfair Display',serif;font-size:clamp(2.2rem,4.5vw,3.8rem);font-weight:900;color:#fff;letter-spacing:-.03em;line-height:1.1;margin-bottom:20px;">
            Building a REST API with Laravel 12 + Sanctum
        </h1>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.65);line-height:1.8;max-width:600px;">
            A complete step-by-step guide to building a production-ready REST API with Laravel 12
            and Sanctum authentication.
        </p>
        <div style="display:flex;align-items:center;gap:16px;margin-top:28px;color:rgba(255,255,255,0.5);font-size:.85rem;">
            <div style="display:flex;align-items:center;gap:10px;">
                <div style="width:40px;height:40px;background:linear-gradient(135deg,#2563eb,#60a5fa);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;color:#fff;font-size:.9rem;">NK</div>
                <div>
                    <div style="font-weight:600;color:#fff;">Naraish Kumar</div>
                    <div style="font-size:.8rem;color:rgba(255,255,255,0.4);">Laravel & Vue.js Developer</div>
                </div>
            </div>
            <span style="width:4px;height:4px;background:rgba(255,255,255,0.2);border-radius:50%;"></span>
            <span>July 19, 2026</span>
            <span style="width:4px;height:4px;background:rgba(255,255,255,0.2);border-radius:50%;"></span>
            <span>15 min read</span>
        </div>
    </div>
</div>

<!-- BLOG CONTENT -->
<article style="margin:0 40px;padding:60px 24px 80px;">

    <!-- Table of Contents -->
    <div style="background:var(--off-white);border:1px solid var(--border);border-radius:16px;padding:32px 36px;margin-bottom:48px;">
        <h3 style="font-family:'Playfair Display',serif;font-size:1.2rem;font-weight:700;color:var(--navy);margin-bottom:16px;">📚 Table of Contents</h3>
        <ul style="list-style:none;display:flex;flex-direction:column;gap:10px;font-size:.92rem;">
            <li><a href="#intro" style="color:var(--blue);text-decoration:none;display:flex;align-items:center;gap:10px;"><span style="display:inline-block;width:6px;height:6px;background:var(--blue);border-radius:50%;"></span>Introduction</a></li>
            <li><a href="#prerequisites" style="color:var(--blue);text-decoration:none;display:flex;align-items:center;gap:10px;"><span style="display:inline-block;width:6px;height:6px;background:var(--blue);border-radius:50%;"></span>Prerequisites</a></li>
            <li><a href="#installation" style="color:var(--blue);text-decoration:none;display:flex;align-items:center;gap:10px;"><span style="display:inline-block;width:6px;height:6px;background:var(--blue);border-radius:50%;"></span>Step 1: Install Laravel 12</a></li>
            <li><a href="#sanctum" style="color:var(--blue);text-decoration:none;display:flex;align-items:center;gap:10px;"><span style="display:inline-block;width:6px;height:6px;background:var(--blue);border-radius:50%;"></span>Step 2: Install and Configure Sanctum</a></li>
            <li><a href="#controller" style="color:var(--blue);text-decoration:none;display:flex;align-items:center;gap:10px;"><span style="display:inline-block;width:6px;height:6px;background:var(--blue);border-radius:50%;"></span>Step 3: Create the Authentication Controller</a></li>
            <li><a href="#routes" style="color:var(--blue);text-decoration:none;display:flex;align-items:center;gap:10px;"><span style="display:inline-block;width:6px;height:6px;background:var(--blue);border-radius:50%;"></span>Step 4: Set Up Routes</a></li>
            <li><a href="#password-reset" style="color:var(--blue);text-decoration:none;display:flex;align-items:center;gap:10px;"><span style="display:inline-block;width:6px;height:6px;background:var(--blue);border-radius:50%;"></span>Step 5: Password Reset with OTP</a></li>
            <li><a href="#testing" style="color:var(--blue);text-decoration:none;display:flex;align-items:center;gap:10px;"><span style="display:inline-block;width:6px;height:6px;background:var(--blue);border-radius:50%;"></span>Step 6: Test with Postman</a></li>
            <li><a href="#endpoints" style="color:var(--blue);text-decoration:none;display:flex;align-items:center;gap:10px;"><span style="display:inline-block;width:6px;height:6px;background:var(--blue);border-radius:50%;"></span>API Endpoints Summary</a></li>
            <li><a href="#advanced" style="color:var(--blue);text-decoration:none;display:flex;align-items:center;gap:10px;"><span style="display:inline-block;width:6px;height:6px;background:var(--blue);border-radius:50%;"></span>Advanced Features</a></li>
            <li><a href="#conclusion" style="color:var(--blue);text-decoration:none;display:flex;align-items:center;gap:10px;"><span style="display:inline-block;width:6px;height:6px;background:var(--blue);border-radius:50%;"></span>Conclusion</a></li>
        </ul>
    </div>

    <!-- Introduction -->
    <h2 id="intro" style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:48px;margin-bottom:16px;">Introduction</h2>
    <p style="color:var(--muted);line-height:1.8;font-size:1rem;margin-bottom:20px;">
        In this comprehensive tutorial, we'll build a production-ready REST API using <strong>Laravel 12</strong>
        with <strong>Sanctum</strong> authentication. You'll learn how to implement secure user registration,
        login, token management, password reset with OTP, and advanced security features.
    </p>
    <p style="color:var(--muted);line-height:1.8;font-size:1rem;margin-bottom:20px;">
        By the end of this guide, you'll have a fully functional API that you can use as a starting point
        for your next Laravel project or integrate with a Vue.js/React frontend.
    </p>

    <!-- What We'll Build -->
    <div style="background:var(--blue-pale);border-left:4px solid var(--blue);border-radius:8px;padding:20px 24px;margin:32px 0;">
        <h4 style="font-weight:700;color:var(--navy);margin-bottom:8px;">📋 What We'll Build</h4>
        <ul style="list-style:none;display:flex;flex-direction:column;gap:6px;color:var(--muted);font-size:.95rem;">
            <li>✅ User Registration &amp; Login with token-based authentication</li>
            <li>✅ Protected routes using Sanctum middleware</li>
            <li>✅ Password reset functionality with OTP</li>
            <li>✅ User profile management</li>
            <li>✅ Token management (list, revoke)</li>
        </ul>
    </div>

    <!-- Prerequisites -->
    <h2 id="prerequisites" style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:48px;margin-bottom:16px;">Prerequisites</h2>
    <p style="color:var(--muted);line-height:1.8;font-size:1rem;margin-bottom:20px;">
        Before we start, ensure you have:
    </p>
    <ul style="color:var(--muted);line-height:2;font-size:1rem;padding-left:24px;margin-bottom:24px;">
        <li>PHP 8.2+</li>
        <li>Composer installed</li>
        <li>MySQL or any supported database</li>
        <li>Postman or similar API testing tool</li>
    </ul>

    <!-- Step 1: Install Laravel 12 -->
    <h2 id="installation" style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:48px;margin-bottom:16px;">Step 1: Install Laravel 12</h2>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.88rem;margin:0;white-space:pre-wrap;">
composer create-project laravel/laravel laravel-api-sanctum
cd laravel-api-sanctum</pre>
    </div>

    <!-- Step 2: Sanctum -->
    <h2 id="sanctum" style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:48px;margin-bottom:16px;">Step 2: Install and Configure Sanctum</h2>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.88rem;margin:0;white-space:pre-wrap;">
composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate</pre>
    </div>

    <h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Configure Sanctum</h4>
    <p style="color:var(--muted);line-height:1.8;font-size:.95rem;">Open <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">config/sanctum.php</code> and ensure the <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">stateful</code> array includes your frontend domains:</p>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">
'stateful' => explode(',', env('SANCTUM_STATEFUL_DOMAINS', sprintf(
    '%s%s',
    'localhost,localhost:3000,127.0.0.1,127.0.0.1:8000,::1',
    Sanctum::currentApplicationUrlWithPort()
))),</pre>
    </div>

    <h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Update .env</h4>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">
SANCTUM_STATEFUL_DOMAINS=localhost,localhost:8000,127.0.0.1
SESSION_DRIVER=cookie</pre>
    </div>

    <!-- Step 3: Controller -->
    <h2 id="controller" style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:48px;margin-bottom:16px;">Step 3: Create the Authentication Controller</h2>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">
php artisan make:controller Api/AuthController</pre>
    </div>

    <p style="color:var(--muted);line-height:1.8;font-size:.95rem;margin-bottom:16px;">
        The controller handles registration, login, logout, profile management, password reset with OTP,
        and token management. Here's the complete implementation:
    </p>

    <!-- Show key code snippets -->
    <h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Registration Method</h4>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">
public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    $token = $user->createToken('api-token')->plainTextToken;

    return response()->json([
        'message' => 'Registration successful',
        'token' => $token,
        'user' => $user->only(['id', 'name', 'email'])
    ], 201);
}</pre>
    </div>

    <h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Login Method</h4>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">
public function login(Request $request)
{
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    if (!Auth::attempt($request->only('email', 'password'))) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    $user = User::where('email', $request->email)->firstOrFail();
    $token = $user->createToken('api-token')->plainTextToken;

    return response()->json([
        'message' => 'Login successful',
        'token' => $token,
        'user' => $user->only(['id', 'name', 'email'])
    ]);
}</pre>
    </div>

    <!-- Step 4: Routes -->
    <h2 id="routes" style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:48px;margin-bottom:16px;">Step 4: Set Up Routes</h2>
    <p style="color:var(--muted);line-height:1.8;font-size:.95rem;margin-bottom:16px;">
        Open <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">routes/api.php</code> and add:
    </p>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">
// Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::put('/user', [AuthController::class, 'updateProfile']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::put('/user/password', [AuthController::class, 'changePassword']);
    Route::get('/tokens', [AuthController::class, 'listTokens']);
    Route::delete('/tokens/{tokenId}', [AuthController::class, 'revokeToken']);
});</pre>
    </div>

    <!-- Step 5: Password Reset -->
    <h2 id="password-reset" style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:48px;margin-bottom:16px;">Step 5: Password Reset with OTP</h2>
    <p style="color:var(--muted);line-height:1.8;font-size:.95rem;margin-bottom:16px;">
        Create a migration for storing OTPs:
    </p>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">
php artisan make:model PasswordResetOtp -m</pre>
    </div>

    <p style="color:var(--muted);line-height:1.8;font-size:.95rem;margin-bottom:16px;">
        The OTP model stores reset codes with expiration and usage tracking:
    </p>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">
Schema::create('password_reset_otps', function (Blueprint $table) {
    $table->id();
    $table->string('email')->index();
    $table->string('otp');
    $table->timestamp('expires_at');
    $table->boolean('used')->default(false);
    $table->integer('attempts')->default(0);
    $table->timestamps();
});</pre>
    </div>

    <!-- Step 6: Testing -->
    <h2 id="testing" style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:48px;margin-bottom:16px;">Step 6: Test with Postman</h2>

    <h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">1. Register User</h4>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">
POST http://localhost:8000/api/register
Content-Type: application/json

{
    "name": "John Doe",
    "email": "john@example.com",
    "password": "password123",
    "password_confirmation": "password123"
}</pre>
    </div>

    <div style="background:#e6ffed;border:1px solid #22c55e;border-radius:8px;padding:16px 20px;margin:16px 0 24px;">
        <h4 style="color:#166534;font-weight:700;margin-bottom:6px;">✅ Expected Response:</h4>
        <pre style="color:#166534;font-family:'Fira Code',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">
{
    "message": "Registration successful",
    "token": "1|abc123def456...",
    "user": {
        "id": 1,
        "name": "John Doe",
        "email": "john@example.com"
    }
}</pre>
    </div>

    <h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">2. Login User</h4>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">
POST http://localhost:8000/api/login
Content-Type: application/json

{
    "email": "john@example.com",
    "password": "password123"
}</pre>
    </div>

    <h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">3. Get Authenticated User (Protected)</h4>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">
GET http://localhost:8000/api/user
Authorization: Bearer &lt;your-token&gt;</pre>
    </div>

    <h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">4. Logout</h4>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">
POST http://localhost:8000/api/logout
Authorization: Bearer &lt;your-token&gt;</pre>
    </div>

    <!-- Step 7: Endpoints Summary -->
    <h2 id="endpoints" style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:48px;margin-bottom:16px;">API Endpoints Summary</h2>
    <div style="overflow-x:auto;margin:16px 0 32px;">
        <table style="width:100%;border-collapse:collapse;font-size:.9rem;">
            <thead>
                <tr style="background:var(--navy);color:#fff;">
                    <th style="padding:12px 16px;text-align:left;border:1px solid rgba(255,255,255,0.1);">Method</th>
                    <th style="padding:12px 16px;text-align:left;border:1px solid rgba(255,255,255,0.1);">Endpoint</th>
                    <th style="padding:12px 16px;text-align:left;border:1px solid rgba(255,255,255,0.1);">Auth Required</th>
                    <th style="padding:12px 16px;text-align:left;border:1px solid rgba(255,255,255,0.1);">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#fff;border:1px solid var(--border);">
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">POST</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/register</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">❌</td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">Register a new user</td>
                </tr>
                <tr style="background:var(--off-white);border:1px solid var(--border);">
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">POST</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/login</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">❌</td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">Login and get token</td>
                </tr>
                <tr style="background:#fff;border:1px solid var(--border);">
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">GET</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/user</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">✅</td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">Get authenticated user</td>
                </tr>
                <tr style="background:var(--off-white);border:1px solid var(--border);">
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">POST</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/logout</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">✅</td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">Logout (revoke current token)</td>
                </tr>
                <tr style="background:#fff;border:1px solid var(--border);">
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">PUT</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/user/password</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">✅</td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">Change password</td>
                </tr>
                <tr style="background:var(--off-white);border:1px solid var(--border);">
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">GET</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/tokens</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">✅</td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">List all active tokens</td>
                </tr>
                <tr style="background:#fff;border:1px solid var(--border);">
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">DELETE</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/tokens/{id}</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">✅</td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">Revoke specific token</td>
                </tr>
                <tr style="background:var(--off-white);border:1px solid var(--border);">
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code style="background:#f0f4ff;padding:2px 8px;border-radius:4px;color:#2563eb;">POST</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);"><code>/api/password/forgot</code></td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">❌</td>
                    <td style="padding:10px 16px;border:1px solid var(--border);">Send OTP for password reset</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Advanced Features -->
    <h2 id="advanced" style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:48px;margin-bottom:16px;">Advanced Features (Optional)</h2>

    <h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Rate Limiting</h4>
    <p style="color:var(--muted);line-height:1.8;font-size:.95rem;margin-bottom:16px;">
        In <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">App\Http\Kernel.php</code>, add to the <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">$middlewareGroups</code>:
    </p>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">
'api' => [
    \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
    'throttle:api',
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
],</pre>
    </div>

    <h4 style="font-weight:700;color:var(--navy);margin-top:24px;margin-bottom:12px;">Token Expiration</h4>
    <p style="color:var(--muted);line-height:1.8;font-size:.95rem;margin-bottom:16px;">
        In <code style="background:var(--light);padding:2px 8px;border-radius:4px;font-size:.85rem;">config/sanctum.php</code>:
    </p>
    <div style="background:#0d1117;border-radius:10px;padding:20px;margin:16px 0 24px;overflow-x:auto;">
        <pre style="color:#e6edf3;font-family:'Fira Code',monospace;font-size:.82rem;margin:0;white-space:pre-wrap;">
// Token expiration in minutes (null = never expires)
'expiration' => env('SANCTUM_EXPIRATION', 60 * 24 * 7), // 7 days</pre>
    </div>

    <!-- Conclusion -->
    <h2 id="conclusion" style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:48px;margin-bottom:16px;">🎉 Conclusion</h2>
    <p style="color:var(--muted);line-height:1.8;font-size:1rem;margin-bottom:20px;">
        You've successfully built a secure REST API with Laravel 12 and Sanctum! This implementation includes:
    </p>
    <ul style="color:var(--muted);line-height:2;font-size:1rem;padding-left:24px;margin-bottom:32px;">
        <li>✅ User registration and login with token-based authentication</li>
        <li>✅ Protected routes with Sanctum middleware</li>
        <li>✅ Password reset with OTP</li>
        <li>✅ User profile management</li>
        <li>✅ Token management (list, revoke)</li>
        <li>✅ Rate limiting and security features</li>
    </ul>

    <!-- Share/CTA -->
    <div style="background:var(--navy);border-radius:16px;padding:40px;text-align:center;margin-top:48px;">
        <h3 style="font-family:'Playfair Display',serif;font-size:1.4rem;font-weight:700;color:#fff;margin-bottom:12px;">💡 Found this helpful?</h3>
        <p style="color:rgba(255,255,255,0.6);margin-bottom:20px;">Share it with your network and help others build better APIs!</p>
        <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
            <a href="#" style="padding:10px 24px;background:#fff;color:var(--navy);border-radius:8px;text-decoration:none;font-weight:700;transition:all .3s;">🐦 Twitter</a>
            <a href="#" style="padding:10px 24px;background:#0a66c2;color:#fff;border-radius:8px;text-decoration:none;font-weight:700;transition:all .3s;">💼 LinkedIn</a>
            <a href="#" style="padding:10px 24px;background:#e1306c;color:#fff;border-radius:8px;text-decoration:none;font-weight:700;transition:all .3s;">📸 Instagram</a>
        </div>
    </div>
</article>

<!-- Related Posts -->
<section style="background:var(--off-white);padding:60px 24px;">
    <div style="max-width:1200px;margin:0 auto;">
        <h2 style="font-family:'Playfair Display',serif;font-size:2rem;font-weight:900;color:var(--navy);text-align:center;margin-bottom:40px;">📖 Related <span style="color:var(--blue);">Articles</span></h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px;">
            <a href="#" style="background:#fff;border:1px solid var(--border);border-radius:16px;padding:24px;text-decoration:none;transition:all .3s;">
                <div style="font-size:2rem;margin-bottom:12px;">🔐</div>
                <h4 style="font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:700;color:var(--navy);">JWT vs Sanctum — Choosing the Right Auth</h4>
                <p style="color:var(--muted);font-size:.85rem;margin-top:8px;">A practical comparison of JWT and Sanctum for Laravel APIs.</p>
            </a>
            <a href="#" style="background:#fff;border:1px solid var(--border);border-radius:16px;padding:24px;text-decoration:none;transition:all .3s;">
                <div style="font-size:2rem;margin-bottom:12px;">⚡</div>
                <h4 style="font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:700;color:var(--navy);">Laravel Performance Optimization</h4>
                <p style="color:var(--muted);font-size:.85rem;margin-top:8px;">Speed up your Laravel app in 7 easy steps.</p>
            </a>
            <a href="#" style="background:#fff;border:1px solid var(--border);border-radius:16px;padding:24px;text-decoration:none;transition:all .3s;">
                <div style="font-size:2rem;margin-bottom:12px;">🎯</div>
                <h4 style="font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:700;color:var(--navy);">Laravel + Vue.js Full Stack SPA</h4>
                <p style="color:var(--muted);font-size:.85rem;margin-top:8px;">Build a decoupled Laravel API with Vue.js frontend.</p>
            </a>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="newsletter-section" style="margin:0;">
    <div class="newsletter-inner anim">
        <div class="section-badge" style="justify-content:center;margin-bottom:4px;"><span class="dot"></span>Stay Updated</div>
        <h2>Never Miss an <span>Article</span></h2>
        <p>Subscribe to get new articles, tutorials, and developer tips delivered straight to your inbox.</p>
        <div class="newsletter-form">
            <input type="email" class="newsletter-input" id="nlEmail2" placeholder="your@email.com"/>
            <button class="newsletter-btn" onclick="subscribeNewsletter2()">Subscribe</button>
        </div>
        <div class="newsletter-success" id="nlSuccess2">🎉 You're subscribed!</div>
        <p class="newsletter-note">No spam. Unsubscribe at any time.</p>
    </div>
</section>

@endsection
