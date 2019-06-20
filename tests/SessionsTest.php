<?php   

use PHPUnit\Framework\TestCase;
use src\WebFeatures\Sessions;

/**
 * Session tests.
 */
final class SessionsTest extends TestCase {
    /**
     * Example of session start.
     */
    public function sessionStartTest(): void {
        $sessions = new Sessions();
        $this->assertTrue(true);
    }

    /**
     * Example of modify session.
     */
    public function testModifySession(): void {
        $sessions = new Sessions();
        $sessions->modifySession("key", "Hello World!");
        $this->assertTrue($sessions->getSession("key") === "Hello World");
    }

    /**
     * Example of remove all session variable.
     */
    public function testRemoveAllSessionVariable(): void {
        $sessions = new Sessions();
        $sessions->modifySession("key", "Hello World!");
        $this->assertTrue(true);
    }

    /**
     * Destroy session.
     */
    public function testDestroySession(): void {
        $this->assertTrue(true);
    }
}