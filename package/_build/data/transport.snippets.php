<?php
/**
 * modxboilerplate
 *
 * Copyright 2011 by Anselm Hannemann, Novolo Designagentur, ( http://www.novolo.de/ )
 *
 * modxboilerplate is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * modxboilerplate is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * modxboilerplate; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package modxboilerplate
 */
/**
 * Add snippets to build
 * 
 * @package modxboilerplate
 * @subpackage build
 */
$snippets = array();

$snippets[0]= $modx->newObject('modSnippet');
$snippets[0]->fromArray(array(
    'id' => 0,
    'name' => 'modxboilerplate',
    'description' => 'Displays Items.',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.modxboilerplate.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.modxboilerplate.php';
$snippets[0]->setProperties($properties);
unset($properties);

return $snippets;