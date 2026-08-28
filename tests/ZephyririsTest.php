<?php
/**
 * Tests for ZephyrIris
 */

use PHPUnit\Framework\TestCase;
use Zephyriris\Zephyriris;

class ZephyririsTest extends TestCase {
    private Zephyriris $instance;

    protected function setUp(): void {
        $this->instance = new Zephyriris(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zephyriris::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
