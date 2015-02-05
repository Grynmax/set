<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})

namespace ${NAMESPACE};

#end

use PApp\Base\BaseModel;

class ${NAME} extends BaseModel {
    /**
     * Set data before create new item
     */
    protected function setupData()
    {
    }

    /**
     * initialize model relations
     * belongsTo(\$fields, \$referenceModel, \$referencedFields, \$options=null){ }
     * hasOne(\$fields, \$referenceModel, \$referencedFields, \$options=null){ }
     * hasMany(\$fields, \$referenceModel, \$referencedFields, \$options=null){ }
     * hasManyToMany(\$fields, \$intermediateModel, \$intermediateFields, \$intermediateReferencedFields, \$referenceModel, \$referencedFields, \$options=null){ }
     */
    public function initialize()
    {
    }

    /**
     * Get DataBase name
     * @return string
     */
    public function getSchema()
    {
        return '${DATABASE}';
    }

    /**
     * Get Table name
     * @return string
     */
    public function getSource()
    {
        return '${TABLENAME}';
    }
}