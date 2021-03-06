<?php
/**
 * Joomlatools Pages
 *
 * @copyright   Copyright (C) 2018 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/joomlatools/joomlatools-pages for the canonical source repository
 */

return function($id)
{
    static $entities;

    if(!isset($entities[$id]))
    {
        //Check if an alias exists
        $id = $this->getObject('ext:joomla.model.articles')->getAliases()->get($id, $id);

        if(is_numeric($id)) {
            $entities[$id] =  $this->getObject('ext:joomla.model.articles')->id($id)->fetch();
        } else {
            $entities[$id] = $this->getObject('ext:joomla.model.articles')->slug($id)->fetch();
        }
    }

    return $entities[$id];
};
