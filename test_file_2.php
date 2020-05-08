<?php
function _pcntl_setpriority($priority, $pid = 0)
{
        $priority = (int)$priority;
        $pid = (int)$pid;

        if ($priority > 20 && $priority < -20) {
                return False;
        }
        if ($pid == 0) {
                $pid = getmypid();
        }

        return system("renice  $priority -p $pid") != false;
}

?>
