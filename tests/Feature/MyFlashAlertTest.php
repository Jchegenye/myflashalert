<?php

namespace Jchegenye\MyFlashAlert\JTech\Tests;

use Orchestra\Testbench\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Jchegenye\MyFlashAlert\JTech\MyFlashAlertSessions;
use Jchegenye\MyFlashAlert\JTech\MyFlashAlertMessages;
use Jchegenye\MyFlashAlert\JTech\MyFlashAlerts;


use Illuminate\Http\RedirectResponse;


 /**
  * Tests for your myflashalert package
  * 
  * @author Jackson A. Chegenye
  * @return 
  */
class MyFlashAlertTest extends TestCase
{

    protected $data;
    protected $alerts;
    protected $session;

    public function setUp()
    {
        parent::setUp();

        $this->data = new MyFlashAlertMessages(compact('message', 'level'));
        $this->alerts = new MyFlashAlerts;

        // session()->put('myflashalert_session', [
        //     'message' => $message,
        //     'level' => $level
        // ]);

        // $this->session = session()->get('myflashalert_session');
        
    }

    /** @test default*/
    public function test_my_flash_alert_default_values()
    {

        $this->assertEquals(null, $this->data->message);
        $this->assertEquals("info", $this->data->level);
        $this->assertEquals(false, $this->data->important);
        //dd($this->data->level);
        
    }
    
    /** @test success method */
    public function test_success_method_with_session($message = null, $level = null)
    {
        
        $this->alerts->success('Successfull'); //put values into session

        $this->session = session()->get('myflashalert_session'); //get session key

        //dd($this->session);
        
        $this->assertEquals('Successfull', $this->session->message);
        $this->assertEquals('success', $this->session->level);
        $this->assertEquals(false, $this->session->important);

    }

    /** @test error method */
    public function test_error_method_with_session($message = null, $level = null)
    {
        
        $this->alerts->error('Not successfull'); //put values into session

        $this->session = session()->get('myflashalert_session'); //get session key

        //dd($this->session->level);
        
        $this->assertEquals('Not successfull', $this->session->message); //
        $this->assertEquals('danger', $this->session->level);
        $this->assertEquals(false, $this->session->important);

    }

    /** @test warning method */
    public function test_warning_method_with_session($message = null, $level = null)
    {
        
        $this->alerts->warning('About to delete!'); //put values into session

        $this->session = session()->get('myflashalert_session'); //get session key

        //dd($this->session);
        
        $this->assertEquals('About to delete!', $this->session->message); //
        $this->assertEquals('warning', $this->session->level);
        $this->assertEquals(false, $this->session->important);

    }

    /** @test info method */
    public function test_info_method_with_session($message = null, $level = null)
    {
        
        $this->alerts->info('There is a new update!'); //put values into session

        $this->session = session()->get('myflashalert_session'); //get session key

        //dd($this->session);
        
        $this->assertEquals('There is a new update!', $this->session->message); //
        $this->assertEquals('info', $this->session->level);
        $this->assertEquals(false, $this->session->important);

    }

}