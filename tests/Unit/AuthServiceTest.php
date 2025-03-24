<?php


namespace Tests\Unit;

use Tests\TestCase;
use App\Services\AuthService;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use PHPUnit\Framework\Attributes\Test;

class AuthServiceTest extends TestCase
{
    private AuthService $authService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->authService = new AuthService();
    }

    #[Test]
    public function it_attempts_login_with_correct_credentials(): void
    {
        $user = User::factory()->create([
            'password' => 'password123',
        ]);

        $result = $this->authService->attemptLogin([
            'email' => $user->email,
            'password' => 'password123'
        ]);

        $this->assertTrue($result);
        $this->assertAuthenticatedAs($user);
    }

    #[Test]
    public function it_fails_login_with_incorrect_credentials(): void
    {
        $user = User::factory()->create([
            'password' => 'password123',
        ]);

        $result = $this->authService->attemptLogin([
            'email' => $user->email,
            'password' => 'wrong-password'
        ]);

        $this->assertFalse($result);
        $this->assertGuest();
    }

    #[Test]
    public function it_throws_exception_when_rate_limited(): void
    {
        $email = 'test@example.com';

        // Simulate rate limiting
        for ($i = 0; $i < 5; $i++) {
            RateLimiter::hit($this->callProtectedMethod($this->authService, 'throttleKey', [$email]));
        }

        $this->expectException(ValidationException::class);

        $this->authService->attemptLogin([
            'email' => $email,
            'password' => 'password'
        ]);
    }


    private function callProtectedMethod(object $object, string $methodName, array $args = [])
    {
        $class = new \ReflectionClass(get_class($object));
        $method = $class->getMethod($methodName);
        $method->setAccessible(true);
        return $method->invokeArgs($object, $args);
    }

    #[Test]
    public function it_checks_user_role_correctly(): void
    {
        // Create roles if they don't exist
        $adminRole = \Spatie\Permission\Models\Role::firstOrCreate(['name' => User::ADMIN]);
        $studentRole = \Spatie\Permission\Models\Role::firstOrCreate(['name' => User::STUDENT]);

        $user = User::factory()->create();
        $user->assignRole($adminRole);

        $result = $this->authService->checkUserRole($user, User::ADMIN);
        $this->assertTrue($result);

        $result = $this->authService->checkUserRole($user, User::STUDENT);
        $this->assertFalse($result);
    }


    #[Test]
    public function it_performs_logout_correctly(): void
    {
        $user = User::factory()->create();
        Auth::login($user);

        $this->assertAuthenticatedAs($user);

        $this->authService->logout();

        $this->assertGuest();
    }
}