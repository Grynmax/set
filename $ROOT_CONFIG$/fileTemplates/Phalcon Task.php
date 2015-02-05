<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})

namespace ${NAMESPACE};

#end

use Phalcon\CLI\Task as BaseTask;

class ${NAME} extends BaseTask 
{
    public function mainAction()
    {
        echo "${NAME} called\n";
    }
}