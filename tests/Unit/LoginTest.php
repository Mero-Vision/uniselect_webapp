<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Validator;

class LoginTest extends TestCase
{
   
    public function it_validates_login_request()
    {
        $request = new LoginRequest();
        $rules = $request->rules();

        // Test valid data
        $validData = [
            'email' => 'test@example.com',
            'password' => 'password123',
        ];

        $validator = Validator::make($validData, $rules);
        $this->assertTrue($validator->passes());

        // Test invalid data
        $invalidData = [
            'email' => 'not-an-email',
            'password' => 'short',
        ];

        $validator = Validator::make($invalidData, $rules);
        $this->assertFalse($validator->passes());
        $this->assertArrayHasKey('email', $validator->errors()->toArray());
        $this->assertArrayHasKey('password', $validator->errors()->toArray());
    }
}