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
 * modxboilerplate Connector
 *
 * @package modxboilerplate
 */
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

$corePath = $modx->getOption('modxboilerplate.core_path',null,$modx->getOption('core_path').'components/modxboilerplate/');
require_once $corePath.'model/modxboilerplate/modxboilerplate.class.php';
$modx->modxboilerplate = new modxboilerplate($modx);

$modx->lexicon->load('modxboilerplate:default');

/* handle request */
$path = $modx->getOption('processorsPath',$modx->modxboilerplate->config,$corePath.'processors/');
$modx->request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));