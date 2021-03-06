<?php

class MyLogger
{
    public $origin = 'not set';

    function __construct($origin)
    {
        $this->origin = $origin;
    }

    public function log($message, $type)
    {
        switch ($type) {
            case 'error':
                $this->error($message);
                break;
            case 'debug':
                $this->debug($message);
                break;
            case 'notice':
                $this->notice($message);
                break;
            case 'warning':
                $this->warning($message);
                break;
            default:
                echo('unknown log type');
        }
    }

    public function error($message)
    {
        $this->logWithTime('Error: ' . $message);
    }

    private function logWithTime($type, $message)
    {
        $date = date('Y-m-d H:i:s');
        echo('[' . $date . '] ' . $this->origin . ' - ' . $type . ': ' . $message);
    }

    public function debug($message)
    {
        $this->logWithTime('Debug: ' . $message);
    }

    public function notice($message)
    {
        $this->logWithTime('Notice: ' . $message);
    }

    public function warning($message)
    {
        $this->logWithTime('warning', $message);
    }

    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }
}

?>
