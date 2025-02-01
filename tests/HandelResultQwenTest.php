<?php
namespace Qwen\Tests;


use Qwen\Enums\Requests\HTTPState;
use PHPUnit\Framework\TestCase;
use Qwen\QwenClient;

class HandelResultQwenTest extends TestCase
{
    protected $apiKey;
    protected $expiredApiKey;
    protected function setUp():void
    {
        $this->apiKey = "valid-api-key";
        $this->expiredApiKey = "expired-api-key";
    }
    
    public function test_ok_response()
    {
        $qwen = QwenClient::build($this->apiKey)
            ->query('Hello Qwen, how are you today?');
        $response = $qwen->run();
        $result = $qwen->getResult();

        $this->assertNotEmpty($response);
        $this->assertTrue($result->isSuccess());
        $this->assertEquals(HTTPState::OK->value, $result->getStatusCode());
    }

    public function test_can_not_access_with_api_expired_payment()
    {
        $qwen = QwenClient::build($this->expiredApiKey)
            ->query('Hello Qwen, how are you today?');
        $response = $qwen->run();
        $result = $qwen->getResult();
        
        $this->assertNotEmpty($response);
        if(!$result->isSuccess())
        {
            $this->assertEquals(HTTPState::BAD_REQUEST->value, $result->getStatusCode());
        }
    }

    public function test_access_with_wrong_api_key()
    {
        $qwen = QwenClient::build($this->apiKey."wrong-api-key")
            ->query('Hello Qwen, how are you today?');
        $response = $qwen->run();
        $result = $qwen->getResult();
        
        $this->assertNotEmpty($response);
        $this->assertEquals(HTTPState::UNAUTHORIZED->value, $result->getStatusCode());
    }
}
