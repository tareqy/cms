<?php
/**
 * PhalconEye
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to lantian.ivan@gmail.com so we can send you a copy immediately.
 *
 */

namespace Engine\Db;

class Model extends \Phalcon\Mvc\Model{

    /**
     * Get table name
     *
     * @return string
     */
    public static function getTableName()
    {
        $reader = \Phalcon\DI::getDefault()->get('annotations');
        $reflector = $reader->get(get_called_class());
        $annotations = $reflector->getClassAnnotations();
        return $annotations->get('Source')->getArgument(0);
    }
}