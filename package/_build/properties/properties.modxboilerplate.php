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
 * Properties for the modxboilerplate snippet.
 *
 * @package modxboilerplate
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'tpl',
        'desc' => 'prop_modxboilerplate.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'Item',
        'lexicon' => 'modxboilerplate:properties',
    ),
    array(
        'name' => 'sortBy',
        'desc' => 'prop_modxboilerplate.sortby_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'name',
        'lexicon' => 'modxboilerplate:properties',
    ),
    array(
        'name' => 'sortDir',
        'desc' => 'prop_modxboilerplate.sortdir_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'ASC',
        'lexicon' => 'modxboilerplate:properties',
    ),
    array(
        'name' => 'limit',
        'desc' => 'prop_modxboilerplate.limit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 5,
        'lexicon' => 'modxboilerplate:properties',
    ),
    array(
        'name' => 'outputSeparator',
        'desc' => 'prop_modxboilerplate.outputseparator_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'modxboilerplate:properties',
    ),
    array(
        'name' => 'toPlaceholder',
        'desc' => 'prop_modxboilerplate.toplaceholder_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => true,
        'lexicon' => 'modxboilerplate:properties',
    ),
/*
    array(
        'name' => '',
        'desc' => 'prop_modxboilerplate.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'modxboilerplate:properties',
    ),
    */
);

return $properties;