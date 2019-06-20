
<?php 
/**
 * Session Class.
 */
class Sessions {
    /**
     * Session start.
     */
    public __construct() {
        session_start();
    }

    /**
     * Modify session value.
     * 
     * @param $key
     * @param $value
     */
    public modifySession(string $key, string $value): void {
        $_SESSION[$key] = $value;
    }

    /**
     * Get session value.
     */
    public getSession(string $key): string {
        if (!$this->isSessionKeyExists($key)) {
            return "";
        }
        return $_SESSION[$key];
    }

    /**
     * Check if session key exists.
     */
    private isSessionKeyExists(string $key) {
        return isset($_SESSION[$key]);
    }
}