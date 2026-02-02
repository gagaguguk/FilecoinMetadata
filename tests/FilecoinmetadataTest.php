<?php
/**
 * Tests for FilecoinMetadata
 */

use PHPUnit\Framework\TestCase;
use Filecoinmetadata\Filecoinmetadata;

class FilecoinmetadataTest extends TestCase {
    private Filecoinmetadata $instance;

    protected function setUp(): void {
        $this->instance = new Filecoinmetadata(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Filecoinmetadata::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
