<?php

namespace Tests\Unit;
use App\Providers\RouteServiceProvider;
use App\Models\Customer;
use Tests\TestCase;

class login_test extends TestCase{

    public function test_login(){
        $response=$this->from('signin')->post('signinuser', [
                'email' => 'info@gmail.com',
                'password' => '123456',
                
                
        ]);
        
        $response->assertRedirect('dashboard');
        

    }

}

