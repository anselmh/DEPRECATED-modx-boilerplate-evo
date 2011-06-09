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
 * Remove an Item.
 * 
 * @package modxboilerplate
 * @subpackage processors
 */
/* get board */
if (empty($scriptProperties['id'])) return $modx->error->failure($modx->lexicon('modxboilerplate.item_err_ns'));
$item = $modx->getObject('modxboilerplateItem',$scriptProperties['id']);
if (!$item) return $modx->error->failure($modx->lexicon('modxboilerplate.item_err_nf'));

if ($item->remove() == false) {
    return $modx->error->failure($modx->lexicon('modxboilerplate.item_err_remove'));
}

/* output */
return $modx->error->success('',$item);