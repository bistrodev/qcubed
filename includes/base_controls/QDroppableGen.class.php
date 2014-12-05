<?php
	/**
	 * QDroppableGen File
	 * 
	 * The abstract QDroppableGen class defined here is
	 * code-generated and contains options, events and methods scraped from the
	 * JQuery UI documentation Web site. It is not generated by the typical
	 * codegen process, but rather is generated periodically by the core QCubed
	 * team and checked in. However, the code to generate this file is
	 * in the assets/_core/php/_devetools/jquery_ui_gen/jq_control_gen.php file
	 * and you can regenerate the files if you need to.
	 *
	 * The comments in this file are taken from the JQuery UI site, so they do
	 * not always make sense with regard to QCubed. They are simply provided
	 * as reference. Note that this is very low-level code, and does not always
	 * update QCubed state variables. See the QDroppableBase 
	 * file, which contains code to interface between this generated file and QCubed.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the QDroppable class file.
	 *
	 */

	/* Custom event classes for this control */
	
	
	/**
	 * Triggered when an accepted draggable starts dragging. This can be useful if
	 * 		you want to make the droppable &quot;light up&quot; when it can be dropped
	 * 		on.<ul><li><strong>event</strong> Type: <a>Event</a> </li>
	 * 		<li><strong>ui</strong> Type: <a>Object</a> 
	 * 		<ul><li><strong>draggable</strong> Type: <a>jQuery</a> A jQuery object
	 * 		representing the draggable element.</li> <li><strong>helper</strong> Type:
	 * 		<a>jQuery</a> A jQuery object representing the helper that is being
	 * 		dragged.</li> <li><strong>position</strong> Type: <a>Object</a> Current CSS
	 * 		position of the draggable helper as <code>{ top, left }</code> object.</li>
	 * 		<li><strong>offset</strong> Type: <a>Object</a> Current offset position of
	 * 		the draggable helper as <code>{ top, left }</code>
	 * 		object.</li></ul></li></ul>
	 */
	class QDroppable_ActivateEvent extends QJqUiEvent {
		const EventName = 'dropactivate';
	}
	/**
	 * Triggered when the droppable is created.<ul><li><strong>event</strong>
	 * 		Type: <a>Event</a> </li> <li><strong>ui</strong> Type: <a>Object</a>
	 * 		</li></ul><p><em>Note: The <code>ui</code> object is empty but included for
	 * 		consistency with other events.</em></p>
	 */
	class QDroppable_CreateEvent extends QJqUiEvent {
		const EventName = 'dropcreate';
	}
	/**
	 * Triggered when an accepted draggable stops
	 * 		dragging.<ul><li><strong>event</strong> Type: <a>Event</a> </li>
	 * 		<li><strong>ui</strong> Type: <a>Object</a> 
	 * 		<ul><li><strong>draggable</strong> Type: <a>jQuery</a> A jQuery object
	 * 		representing the draggable element.</li> <li><strong>helper</strong> Type:
	 * 		<a>jQuery</a> A jQuery object representing the helper that is being
	 * 		dragged.</li> <li><strong>position</strong> Type: <a>Object</a> Current CSS
	 * 		position of the draggable helper as <code>{ top, left }</code> object.</li>
	 * 		<li><strong>offset</strong> Type: <a>Object</a> Current offset position of
	 * 		the draggable helper as <code>{ top, left }</code>
	 * 		object.</li></ul></li></ul>
	 */
	class QDroppable_DeactivateEvent extends QJqUiEvent {
		const EventName = 'dropdeactivate';
	}
	/**
	 * Triggered when an accepted draggable is dropped on the droppable (based on
	 * 		the<a><code>tolerance</code></a> option).<ul><li><strong>event</strong>
	 * 		Type: <a>Event</a> </li> <li><strong>ui</strong> Type: <a>Object</a> 
	 * 		<ul><li><strong>draggable</strong> Type: <a>jQuery</a> A jQuery object
	 * 		representing the draggable element.</li> <li><strong>helper</strong> Type:
	 * 		<a>jQuery</a> A jQuery object representing the helper that is being
	 * 		dragged.</li> <li><strong>position</strong> Type: <a>Object</a> Current CSS
	 * 		position of the draggable helper as <code>{ top, left }</code> object.</li>
	 * 		<li><strong>offset</strong> Type: <a>Object</a> Current offset position of
	 * 		the draggable helper as <code>{ top, left }</code>
	 * 		object.</li></ul></li></ul>
	 */
	class QDroppable_DropEvent extends QJqUiEvent {
		const EventName = 'drop';
	}
	/**
	 * Triggered when an accepted draggable is dragged out of the droppable (based
	 * 		on the<a><code>tolerance</code></a> option).<ul><li><strong>event</strong>
	 * 		Type: <a>Event</a> </li> <li><strong>ui</strong> Type: <a>Object</a>
	 * 		</li></ul><p><em>Note: The <code>ui</code> object is empty but included for
	 * 		consistency with other events.</em></p>
	 */
	class QDroppable_OutEvent extends QJqUiEvent {
		const EventName = 'dropout';
	}
	/**
	 * Triggered when an accepted draggable is dragged over the droppable (based
	 * 		on the<a><code>tolerance</code></a> option).<ul><li><strong>event</strong>
	 * 		Type: <a>Event</a> </li> <li><strong>ui</strong> Type: <a>Object</a> 
	 * 		<ul><li><strong>draggable</strong> Type: <a>jQuery</a> A jQuery object
	 * 		representing the draggable element.</li> <li><strong>helper</strong> Type:
	 * 		<a>jQuery</a> A jQuery object representing the helper that is being
	 * 		dragged.</li> <li><strong>position</strong> Type: <a>Object</a> Current CSS
	 * 		position of the draggable helper as <code>{ top, left }</code> object.</li>
	 * 		<li><strong>offset</strong> Type: <a>Object</a> Current offset position of
	 * 		the draggable helper as <code>{ top, left }</code>
	 * 		object.</li></ul></li></ul>
	 */
	class QDroppable_OverEvent extends QJqUiEvent {
		const EventName = 'dropover';
	}

	/* Custom "property" event classes for this control */

	/**
	 * Generated QDroppableGen class.
	 * 
	 * This is the QDroppableGen class which is automatically generated
	 * by scraping the JQuery UI documentation website. As such, it includes all the options
	 * as listed by the JQuery UI website, which may or may not be appropriate for QCubed. See
	 * the QDroppableBase class for any glue code to make this class more
	 * usable in QCubed.
	 * 
	 * @see QDroppableBase
	 * @package Controls\Base
	 * @property mixed $Accept Controls which draggable elements are accepted by the
	 * 		droppable.<strong>Multiple types
	 * 		supported:</strong><ul><li><strong>Selector</strong>: A selector indicating
	 * 		which draggable elements are accepted.</li> <li><strong>Function</strong>:
	 * 		A function that will be called for each draggable on the page (passed as
	 * 		the first argument to the function). The function must return
	 * 		<code>true</code> if the draggable should be accepted.</li></ul>
	 * @property string $ActiveClass If specified, the class will be added to the droppable while an acceptable
	 * 		draggable is being dragged.
	 * @property boolean $AddClasses If set to <code>false</code>, will prevent the <code>ui-droppable</code>
	 * 		class from being added. This may be desired as a performance optimization
	 * 		when calling <code>.droppable()</code> init on hundreds of elements.
	 * @property boolean $Disabled Disables the droppable if set to <code>true</code>.
	 * @property boolean $Greedy By default, when an element is dropped on nested droppables, each droppable
	 * 		will receive the element. However, by setting this option to
	 * 		<code>true</code>, any parent droppables will not receive the element. The
	 * 		<code>drop</code> event will still bubble normally, but the
	 * 		<code>event.target</code> can be checked to see which droppable received
	 * 		the draggable element.
	 * @property string $HoverClass If specified, the class will be added to the droppable while an acceptable
	 * 		draggable is being hovered over the droppable.
	 * @property string $Scope Used to group sets of draggable and droppable items, in addition to the
	 * 		<a><code>accept</code></a> option. A draggable with the same scope value as
	 * 		a droppable will be accepted.
	 * @property string $Tolerance Specifies which mode to use for testing whether a draggable is hovering
	 * 		over a droppable. Possible values:
	 * 						<ul><li><code>&quot;fit&quot;</code>: Draggable overlaps the droppable
	 * 		entirely.</li> 					<li><code>&quot;intersect&quot;</code>: Draggable
	 * 		overlaps the droppable at least 50% in both directions.</li>
	 * 							<li><code>&quot;pointer&quot;</code>: Mouse pointer overlaps the
	 * 		droppable.</li> 					<li><code>&quot;touch&quot;</code>: Draggable overlaps
	 * 		the droppable any amount.</li></ul>
	 */

	abstract class QDroppableGen extends QControl	{
		protected $strJavaScripts = __JQUERY_EFFECTS__;
		protected $strStyleSheets = __JQUERY_CSS__;
		/** @var mixed */
		protected $mixAccept = null;
		/** @var string */
		protected $strActiveClass = null;
		/** @var boolean */
		protected $blnAddClasses = null;
		/** @var boolean */
		protected $blnDisabled = null;
		/** @var boolean */
		protected $blnGreedy = null;
		/** @var string */
		protected $strHoverClass = null;
		/** @var string */
		protected $strScope = null;
		/** @var string */
		protected $strTolerance = null;
		
		protected function makeJsProperty($strProp, $strKey) {
			$objValue = $this->$strProp;
			if (null === $objValue) {
				return '';
			}

			return $strKey . ': ' . JavaScriptHelper::toJsObject($objValue) . ', ';
		}

		protected function makeJqOptions() {
			$strJqOptions = '';
			$strJqOptions .= $this->makeJsProperty('Accept', 'accept');
			$strJqOptions .= $this->makeJsProperty('ActiveClass', 'activeClass');
			$strJqOptions .= $this->makeJsProperty('AddClasses', 'addClasses');
			$strJqOptions .= $this->makeJsProperty('Disabled', 'disabled');
			$strJqOptions .= $this->makeJsProperty('Greedy', 'greedy');
			$strJqOptions .= $this->makeJsProperty('HoverClass', 'hoverClass');
			$strJqOptions .= $this->makeJsProperty('Scope', 'scope');
			$strJqOptions .= $this->makeJsProperty('Tolerance', 'tolerance');
			if ($strJqOptions) $strJqOptions = substr($strJqOptions, 0, -2);
			return $strJqOptions;
		}

		public function getJqSetupFunction() {
			return 'droppable';
		}

		public function GetControlJavaScript() {
			return sprintf('jQuery("#%s").%s({%s})', $this->getJqControlId(), $this->getJqSetupFunction(), $this->makeJqOptions());
		}

		public function GetEndScript() {
			$str = '';
			if ($this->getJqControlId() !== $this->ControlId) {
				// #845: if the element receiving the jQuery UI events is different than this control
				// we need to clean-up the previously attached event handlers, so that they are not duplicated 
				// during the next ajax update which replaces this control.
				$str = sprintf('jQuery("#%s").off(); ', $this->getJqControlId());
			}
			$str .= $this->GetControlJavaScript();
			if ($strParentScript = parent::GetEndScript()) {
				$str .= '; ' . $strParentScript;
			}
			return $str;
		}
		
		/**
		 * Call a JQuery UI Method on the object. 
		 * 
		 * A helper function to call a jQuery UI Method. Takes variable number of arguments.
		 *
		 * @param boolean $blnAttribute true if the method is modifying an option, false if executing a command
		 * @param string $strMethodName the method name to call
		 * @internal param $mixed [optional] $mixParam1
		 * @internal param $mixed [optional] $mixParam2
		 */
		protected function CallJqUiMethod($blnAttribute, $strMethodName /*, ... */) {
			$args = func_get_args();
			array_shift ($args);

			$strArgs = JavaScriptHelper::toJsObject($args);
			$strJs = sprintf('jQuery("#%s").%s(%s)',
				$this->getJqControlId(),
				$this->getJqSetupFunction(),
				substr($strArgs, 1, strlen($strArgs)-2));	// params without brackets
			if ($blnAttribute) {
				$this->AddAttributeScript($strJs);
			} else {
				QApplication::ExecuteJavaScript($strJs);
			}
		}


		/**
		 * Removes the droppable functionality completely. This will return the
		 * element back to its pre-init state.<ul><li>This method does not accept any
		 * arguments.</li></ul>
		 */
		public function Destroy() {
			$this->CallJqUiMethod(false, "destroy");
		}
		/**
		 * Disables the droppable.<ul><li>This method does not accept any
		 * arguments.</li></ul>
		 */
		public function Disable() {
			$this->CallJqUiMethod(false, "disable");
		}
		/**
		 * Enables the droppable.<ul><li>This method does not accept any
		 * arguments.</li></ul>
		 */
		public function Enable() {
			$this->CallJqUiMethod(false, "enable");
		}
		/**
		 * <p>Retrieves the droppable&apos;s instance object. If the element does not
		 * have an associated instance, <code>undefined</code> is returned.</p> 
		 * 		<p>Unlike other widget methods, <code>instance()</code> is safe to call
		 * on any element after the droppable plugin has loaded.</p><ul><li>This
		 * method does not accept any arguments.</li></ul>
		 */
		public function Instance() {
			$this->CallJqUiMethod(false, "instance");
		}
		/**
		 * <p>Gets the value currently associated with the specified
		 * <code>optionName</code>.</p> 			<p><strong>Note:</strong> For options that
		 * have objects as their value, you can get the value of a specific key by
		 * using dot notation. For example, <code>&quot;foo.bar&quot;</code> would get
		 * the value of the <code>bar</code> property on the <code>foo</code>
		 * option.</p><ul><li><strong>optionName</strong> Type: <a>String</a> The name
		 * of the option to get.</li></ul>
		 * @param $optionName
		 */
		public function Option($optionName) {
			$this->CallJqUiMethod(false, "option", $optionName);
		}
		/**
		 * Gets an object containing key/value pairs representing the current
		 * droppable options hash.<ul><li>This signature does not accept any
		 * arguments.</li></ul>
		 */
		public function Option1() {
			$this->CallJqUiMethod(false, "option");
		}
		/**
		 * <p>Sets the value of the droppable option associated with the specified
		 * <code>optionName</code>.</p> 			<p><strong>Note:</strong> For options that
		 * have objects as their value, you can set the value of just one property by
		 * using dot notation for <code>optionName</code>. For example,
		 * <code>&quot;foo.bar&quot;</code> would update only the <code>bar</code>
		 * property of the <code>foo</code>
		 * option.</p><ul><li><strong>optionName</strong> Type: <a>String</a> The name
		 * of the option to set.</li> <li><strong>value</strong> Type: <a>Object</a> A
		 * value to set for the option.</li></ul>
		 * @param $optionName
		 * @param $value
		 */
		public function Option2($optionName, $value) {
			$this->CallJqUiMethod(false, "option", $optionName, $value);
		}
		/**
		 * Sets one or more options for the droppable.<ul><li><strong>options</strong>
		 * Type: <a>Object</a> A map of option-value pairs to set.</li></ul>
		 * @param $options
		 */
		public function Option3($options) {
			$this->CallJqUiMethod(false, "option", $options);
		}


		public function __get($strName) {
			switch ($strName) {
				case 'Accept': return $this->mixAccept;
				case 'ActiveClass': return $this->strActiveClass;
				case 'AddClasses': return $this->blnAddClasses;
				case 'Disabled': return $this->blnDisabled;
				case 'Greedy': return $this->blnGreedy;
				case 'HoverClass': return $this->strHoverClass;
				case 'Scope': return $this->strScope;
				case 'Tolerance': return $this->strTolerance;
				default: 
					try { 
						return parent::__get($strName); 
					} catch (QCallerException $objExc) { 
						$objExc->IncrementOffset(); 
						throw $objExc; 
					}
			}
		}

		public function __set($strName, $mixValue) {
			switch ($strName) {
				case 'Accept':
					$this->mixAccept = $mixValue;
				
					if ($this->OnPage) {
						$this->CallJqUiMethod(true, 'option', 'accept', $mixValue);
					}
					break;

				case 'ActiveClass':
					try {
						$this->strActiveClass = QType::Cast($mixValue, QType::String);
						if ($this->OnPage) {
							$this->CallJqUiMethod(true, 'option', 'activeClass', $this->strActiveClass);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AddClasses':
					try {
						$this->blnAddClasses = QType::Cast($mixValue, QType::Boolean);
						if ($this->OnPage) {
							$this->CallJqUiMethod(true, 'option', 'addClasses', $this->blnAddClasses);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Disabled':
					try {
						$this->blnDisabled = QType::Cast($mixValue, QType::Boolean);
						if ($this->OnPage) {
							$this->CallJqUiMethod(true, 'option', 'disabled', $this->blnDisabled);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Greedy':
					try {
						$this->blnGreedy = QType::Cast($mixValue, QType::Boolean);
						if ($this->OnPage) {
							$this->CallJqUiMethod(true, 'option', 'greedy', $this->blnGreedy);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'HoverClass':
					try {
						$this->strHoverClass = QType::Cast($mixValue, QType::String);
						if ($this->OnPage) {
							$this->CallJqUiMethod(true, 'option', 'hoverClass', $this->strHoverClass);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Scope':
					try {
						$this->strScope = QType::Cast($mixValue, QType::String);
						if ($this->OnPage) {
							$this->CallJqUiMethod(true, 'option', 'scope', $this->strScope);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Tolerance':
					try {
						$this->strTolerance = QType::Cast($mixValue, QType::String);
						if ($this->OnPage) {
							$this->CallJqUiMethod(true, 'option', 'tolerance', $this->strTolerance);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				case 'Enabled':
					$this->Disabled = !$mixValue;	// Tie in standard QCubed functionality
					parent::__set($strName, $mixValue);
					break;
					
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

		/**
		* If this control is attachable to a codegenerated control in a metacontrol, this function will be
		* used by the metacontrol designer dialog to display a list of options for the control.
		* @return QMetaParam[]
		**/
		public static function GetMetaParams() {
			return array_merge(parent::GetMetaParams(), array(
				new QMetaParam (get_called_class(), 'ActiveClass', 'If specified, the class will be added to the droppable while an acceptable draggable is being dragged.', QType::String),
				new QMetaParam (get_called_class(), 'AddClasses', 'If set to <code>false</code>, will prevent the <code>ui-droppable</code> class from being added. This may be desired as a performance optimization when calling <code>.droppable()</code> init on hundreds of elements.', QType::Boolean),
				new QMetaParam (get_called_class(), 'Disabled', 'Disables the droppable if set to <code>true</code>.', QType::Boolean),
				new QMetaParam (get_called_class(), 'Greedy', 'By default, when an element is dropped on nested droppables, each droppable will receive the element. However, by setting this option to <code>true</code>, any parent droppables will not receive the element. The <code>drop</code> event will still bubble normally, but the <code>event.target</code> can be checked to see which droppable received the draggable element.', QType::Boolean),
				new QMetaParam (get_called_class(), 'HoverClass', 'If specified, the class will be added to the droppable while an acceptable draggable is being hovered over the droppable.', QType::String),
				new QMetaParam (get_called_class(), 'Scope', 'Used to group sets of draggable and droppable items, in addition to the <a><code>accept</code></a> option. A draggable with the same scope value as a droppable will be accepted.', QType::String),
				new QMetaParam (get_called_class(), 'Tolerance', 'Specifies which mode to use for testing whether a draggable is hovering over a droppable. Possible values: 				<ul><li><code>&quot;fit&quot;</code>: Draggable overlaps the droppable entirely.</li> 					<li><code>&quot;intersect&quot;</code>: Draggable overlaps the droppable at least 50% in both directions.</li> 					<li><code>&quot;pointer&quot;</code>: Mouse pointer overlaps the droppable.</li> 					<li><code>&quot;touch&quot;</code>: Draggable overlaps the droppable any amount.</li></ul>', QType::String),
			));
		}
	}

?>
