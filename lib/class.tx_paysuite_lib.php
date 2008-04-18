<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2007-2008 Franz Holzinger <contact@fholzinger.com>
*  All rights reserved
*
*  This script is part of the Typo3 project. The Typo3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Part of the paysuite (Payment Suite) extension.
 *
 * $Id$
 *
 * @author	Franz Holzinger <contact@fholzinger.com>
 * @maintainer	Franz Holzinger <contact@fholzinger.com> 
 * @package TYPO3
 * @subpackage paysuite
 *
 *
 */


class tx_paysuite_lib {
	private $providerKey = "paymentlib_paypal";

	function init ($providerKey)	{
		$this->providerKey = $providerKey;
	}

	function createUniqueID($orderuid, $callingExtension)	{
		$rc = $this->providerKey.'#'.md5($callingExtension.'-'.$orderuid);
		return $rc;
	}
}



if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/paysuite/lib/class.tx_paysuite_lib.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/paysuite/lib/class.tx_paysuite_lib.php']);
}


?>
