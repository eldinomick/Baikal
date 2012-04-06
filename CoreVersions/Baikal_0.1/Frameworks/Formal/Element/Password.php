<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Jérôme Schneider <mail@jeromeschneider.fr>
*  All rights reserved
*
*  http://baikal.codr.fr
*
*  This script is part of the Baïkal Server project. The Baïkal
*  Server project is free software; you can redistribute it
*  and/or modify it under the terms of the GNU General Public
*  License as published by the Free Software Foundation; either
*  version 2 of the License, or (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

namespace Formal\Element;

class Password extends \Formal\Element {
	
	public function render() {
		$disabled = "";
		$inputclass = "";
		$groupclass = "";
		$placeholder = "";
		
		$value = htmlspecialchars($this->value());
		$label = $this->option("label");
		$prop = $this->option("prop");
		$placeholder = $this->option("placeholder");
		
		if($this->option("readonly") === TRUE) {
			$inputclass .= " disabled";
			$disabled = " disabled";
		}
		
		if($this->option("error") === TRUE) {
			$groupclass .= " error";
		}
		
		if(($sPlaceHolder = trim($this->option("placeholder"))) !== "") {
			$placeholder = " placeholder=\"" . htmlspecialchars($sPlaceHolder) . "\" ";
		}
		
		$sHtml =<<<HTML
<div class="control-group{$groupclass}">
	<label class="control-label" for="displayname">{$label}</label>
	<div class="controls">
		<input type="password" class="input-xlarge{$inputclass}" id="{$prop}" name="{$prop}" value="{$value}"{$disabled}{$placeholder}/>
	</div>
</div>
HTML;
		return $sHtml;
	}
}