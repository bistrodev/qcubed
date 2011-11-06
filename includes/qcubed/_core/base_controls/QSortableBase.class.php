<?php
	/**
	 * The QSortableBase class defined here provides an interface between the generated
	 * QSortableGen class, and QCubed. This file is part of the core and will be overwritten
	 * when you update QCubed. To override, make your changes to the QSortable.class.php file instead.
	 *
	 */

	/**
	 * @property-read Array $ItemArray	List of ControlIds in sort order.
	 */

	class QSortableBase extends QSortableGen	{
		/** @var array */
		protected $aryItemArray = null;
		

		// Find out what the sort order is at the beginning so that aryItemArray is up to date
		public function makeJqOptions () {
			$strJqOptions = parent::makeJqOptions();
			
			if ($strJqOptions) {
				$strJqOptions .= ",";
			}
			
			$strJqOptions .=<<<FUNC
			create: function (event, ui) {
						var ary = jQuery(this).sortable("toArray");
						var str = ary.join(",");
			 			qcubed.recordControlModification("$this->ControlId", "ItemArray", str);
					}					
FUNC;
			return $strJqOptions; 
		}		
		public function GetControlJavaScript() {
			$strJS = parent::GetControlJavaScript();
			
			$strJS .=<<<FUNC
			.bind("sortstop", function (event, ui) {
						var ary = jQuery(this).sortable("toArray");
						var str = ary.join(",");
			 			qcubed.recordControlModification("$this->ControlId", "ItemArray", str);
					})						
FUNC;
			
			return $strJS;
		}


		public function __set($strName, $mixValue) {
			$this->blnModified = true;
			
			switch ($strName) {
				case 'ItemArray':
					// used to interface with javascript above. Not intended for public consumption.
					try {
						$data = QType::Cast($mixValue, QType::String);
						$a = split (",", $data);
						$this->aryItemArray = $a;
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					 
				default:
					try {
						parent::__set($strName, $mixValue);
						break;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
			
		}
		
		public function __get($strName) {
			switch ($strName) {
				case 'ItemArray': return $this->aryItemArray;
				default: 
					try { 
						return parent::__get($strName); 
					} catch (QCallerException $objExc) { 
						$objExc->IncrementOffset(); 
						throw $objExc; 
					}
			}
		}
	}

?>