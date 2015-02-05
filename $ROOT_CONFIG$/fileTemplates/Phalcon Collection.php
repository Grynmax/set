<?php
#parse("PHP File Header.php")

namespace ${NAMESPACE};

use Phalcon\Mvc\Collection;

/**
 * Class ${NAME}
 * @package ${NAMESPACE}
 *
 * @method static \\${NAMESPACE}\\${NAME} findById(string ${DS}id)
 * @method static \\${NAMESPACE}\\${NAME} findFirst(array ${DS}arr=array())
 */
class ${NAME} extends Collection 
{
    /** List of Table fields */
    public ${DS};
    
    public function getSource()
    {
        return "${TABLE}";
    }
/**
    public function beforeCreate()
    {
    }
*/
/**
    public function beforeUpdate()
    {
    }
*/
}