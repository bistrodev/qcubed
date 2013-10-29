<?php
	/**
	 * QSpinnerGen File
	 * 
	 * The abstract QSpinnerGen class defined here is
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
	 * update QCubed state variables. See the QSpinnerBase 
	 * file, which contains code to interface between this generated file and QCubed.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the QSpinner class file.
	 *
	 */

	/* Custom event classes for this control */
	
	
	/**
	 * Triggered when the value of the spinner has changed and the input is no
	 * 		longer focused.<ul><li><strong>event</strong> Type: <a>Event</a> </li>
	 * 		<li><strong>ui</strong> Type: <a>Object</a> </li></ul><p><em>Note: The
	 * 		<code>ui</code> object is empty but included for consistency with other
	 * 		events.</em></p>
	 */
	class QSpinner_ChangeEvent extends QJqUiEvent {
		const EventName = 'spinchange';
	}
	/**
	 * Triggered when the spinner is created.<ul><li><strong>event</strong> Type:
	 * 		<a>Event</a> </li> <li><strong>ui</strong> Type: <a>Object</a>
	 * 		</li></ul><p><em>Note: The <code>ui</code> object is empty but included for
	 * 		consistency with other events.</em></p>
	 */
	class QSpinner_CreateEvent extends QJqUiEvent {
		const EventName = 'spincreate';
	}
	/**
	 * Triggered during increment/decrement (to determine direction of spin
	 * 		compare current value with <code>ui.value</code>). 				<p>Can be canceled,
	 * 		preventing the value from being updated.</p><ul><li><strong>event</strong>
	 * 		Type: <a>Event</a> </li> <li><strong>ui</strong> Type: <a>Object</a> 
	 * 		<ul><li><strong>value</strong> Type: <a>Number</a> The new value to be set,
	 * 		unless the event is cancelled.</li></ul></li></ul>
	 */
	class QSpinner_SpinEvent extends QJqUiEvent {
		const EventName = 'spin';
	}
	/**
	 * Triggered before a spin. Can be canceled, preventing the spin from
	 * 		occurring.<ul><li><strong>event</strong> Type: <a>Event</a> </li>
	 * 		<li><strong>ui</strong> Type: <a>Object</a> </li></ul><p><em>Note: The
	 * 		<code>ui</code> object is empty but included for consistency with other
	 * 		events.</em></p>
	 */
	class QSpinner_StartEvent extends QJqUiEvent {
		const EventName = 'spinstart';
	}
	/**
	 * Triggered after a spin.<ul><li><strong>event</strong> Type: <a>Event</a>
	 * 		</li> <li><strong>ui</strong> Type: <a>Object</a> </li></ul><p><em>Note:
	 * 		The <code>ui</code> object is empty but included for consistency with other
	 * 		events.</em></p>
	 */
	class QSpinner_StopEvent extends QJqUiEvent {
		const EventName = 'spinstop';
	}

	/* Custom "property" event classes for this control */

	/**
	 * Generated QSpinnerGen class.
	 * 
	 * This is the QSpinnerGen class which is automatically generated
	 * by scraping the JQuery UI documentation website. As such, it includes all the options
	 * as listed by the JQuery UI website, which may or may not be appropriate for QCubed. See
	 * the QSpinnerBase class for any glue code to make this class more
	 * usable in QCubed.
	 * 
	 * @see QSpinnerBase
	 * @package Controls\Base
	 * @property string $Culture Sets the culture to use for parsing and formatting the value. If
	 * 		<code>null</code>, the currently set culture in <code>Globalize</code> is
	 * 		used, see <a>Globalize docs</a> for available cultures. Only relevant if
	 * 		the <a><code>numberFormat</code></a> option is set. Requires
	 * 		<a>Globalize</a> to be included.
	 * @property boolean $Disabled Disables the spinner if set to <code>true</code>.
	 * @property mixed $Icons Icons to use for buttons, matching an icon defined by the jQuery UI CSS
	 * 		Framework. 				<ul><li>up (string, default: "ui-icon-triangle-1-n")</li>
	 * 							<li>down (string, default: "ui-icon-triangle-1-s")</li></ul>
	 * @property mixed $Incremental Controls the number of steps taken when holding down a spin
	 * 		button.<strong>Multiple types
	 * 		supported:</strong><ul><li><strong>Boolean</strong>: When set to
	 * 		<code>true</code>, the stepping delta will increase when spun incessantly.
	 * 		When set to <code>false</code>, all steps are equal (as defined by the
	 * 		<a><code>step</code></a> option).</li> <li><strong>Function</strong>:
	 * 		Receives one parameter: the number of spins that have occurred. Must return
	 * 		the number of steps that should occur for the current spin.</li></ul>
	 * @property mixed $Max The maximum allowed value. The element's <code>max</code> attribute is used
	 * 		if it exists and the option is not explicitly set. If <code>null</code>,
	 * 		there is no maximum enforced.<strong>Multiple types
	 * 		supported:</strong><ul><li><strong>Number</strong>: The maximum value.</li>
	 * 		<li><strong>String</strong>: If <a>Globalize</a> is included, the
	 * 		<code>max</code> option can be passed as a string which will be parsed
	 * 		based on the <a><code>numberFormat</code></a> and
	 * 		<a><code>culture</code></a> options; otherwise it will fall back to the
	 * 		native <code>parseFloat()</code> method.</li></ul>
	 * @property mixed $Min The minimum allowed value. The element's <code>min</code> attribute is used
	 * 		if it exists and the option is not explicitly set. If <code>null</code>,
	 * 		there is no minimum enforced.<strong>Multiple types
	 * 		supported:</strong><ul><li><strong>Number</strong>: The minimum value.</li>
	 * 		<li><strong>String</strong>: If <a>Globalize</a> is included, the
	 * 		<code>min</code> option can be passed as a string which will be parsed
	 * 		based on the <a><code>numberFormat</code></a> and
	 * 		<a><code>culture</code></a> options; otherwise it will fall back to the
	 * 		native <code>parseFloat()</code> method.</li></ul>
	 * @property string $NumberFormat Format of numbers passed to  <a><code>Globalize</code></a>, if available.
	 * 		Most common are <code>"n"</code> for a decimal number and <code>"C"</code>
	 * 		for a currency value. Also see the <a><code>culture</code></a> option.
	 * @property integer $Page The number of steps to take when paging via the
	 * 		<a><code>pageUp</code></a>/<a><code>pageDown</code></a> methods.
	 * @property mixed $Step The size of the step to take when spinning via buttons or via the
	 * 		<a><code>stepUp()</code></a>/<a><code>stepDown()</code></a> methods. The
	 * 		element's <code>step</code> attribute is used if it exists and the option
	 * 		is not explicitly set.<strong>Multiple types
	 * 		supported:</strong><ul><li><strong>Number</strong>: The size of the
	 * 		step.</li> <li><strong>String</strong>: If <a>Globalize</a> is included,
	 * 		the <code>step</code> option can be passed as a string which will be parsed
	 * 		based on the <a><code>numberFormat</code></a> and
	 * 		<a><code>culture</code></a> options, otherwise it will fall back to the
	 * 		native <code>parseFloat</code>.</li></ul>
	 */

	class QSpinnerGen extends QTextBox	{
		protected $strJavaScripts = __JQUERY_EFFECTS__;
		protected $strStyleSheets = __JQUERY_CSS__;
		/** @var string */
		protected $strCulture = null;
		/** @var boolean */
		protected $blnDisabled = null;
		/** @var mixed */
		protected $mixIcons = null;
		/** @var mixed */
		protected $mixIncremental = null;
		/** @var mixed */
		protected $mixMax = null;
		/** @var mixed */
		protected $mixMin = null;
		/** @var string */
		protected $strNumberFormat = null;
		/** @var integer */
		protected $intPage = null;
		/** @var mixed */
		protected $mixStep = null;
		
		protected function makeJsProperty($strProp, $strKey) {
			$objValue = $this->$strProp;
			if (null === $objValue) {
				return '';
			}

			return $strKey . ': ' . JavaScriptHelper::toJsObject($objValue) . ', ';
		}

		protected function makeJqOptions() {
			$strJqOptions = '';
			$strJqOptions .= $this->makeJsProperty('Culture', 'culture');
			$strJqOptions .= $this->makeJsProperty('Disabled', 'disabled');
			$strJqOptions .= $this->makeJsProperty('Icons', 'icons');
			$strJqOptions .= $this->makeJsProperty('Incremental', 'incremental');
			$strJqOptions .= $this->makeJsProperty('Max', 'max');
			$strJqOptions .= $this->makeJsProperty('Min', 'min');
			$strJqOptions .= $this->makeJsProperty('NumberFormat', 'numberFormat');
			$strJqOptions .= $this->makeJsProperty('Page', 'page');
			$strJqOptions .= $this->makeJsProperty('Step', 'step');
			if ($strJqOptions) $strJqOptions = substr($strJqOptions, 0, -2);
			return $strJqOptions;
		}

		public function getJqSetupFunction() {
			return 'spinner';
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
				$str .= '; ' . parent::GetEndScript();
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
		 * Removes the spinner functionality completely. This will return the element
		 * back to its pre-init state.<ul><li>This method does not accept any
		 * arguments.</li></ul>
		 */
		public function Destroy() {
			$this->CallJqUiMethod(false, "destroy");
		}
		/**
		 * Disables the spinner.<ul><li>This method does not accept any
		 * arguments.</li></ul>
		 */
		public function Disable() {
			$this->CallJqUiMethod(false, "disable");
		}
		/**
		 * Enables the spinner.<ul><li>This method does not accept any
		 * arguments.</li></ul>
		 */
		public function Enable() {
			$this->CallJqUiMethod(false, "enable");
		}
		/**
		 * Gets the value currently associated with the specified
		 * <code>optionName</code>.<ul><li><strong>optionName</strong> Type:
		 * <a>String</a> The name of the option to get.</li></ul>
		 * @param $optionName
		 */
		public function Option($optionName) {
			$this->CallJqUiMethod(false, "option", $optionName);
		}
		/**
		 * Gets an object containing key/value pairs representing the current spinner
		 * options hash.<ul><li>This method does not accept any arguments.</li></ul>
		 */
		public function Option1() {
			$this->CallJqUiMethod(false, "option");
		}
		/**
		 * Sets the value of the spinner option associated with the specified
		 * <code>optionName</code>.<ul><li><strong>optionName</strong> Type:
		 * <a>String</a> The name of the option to set.</li>
		 * <li><strong>value</strong> Type: <a>Object</a> A value to set for the
		 * option.</li></ul>
		 * @param $optionName
		 * @param $value
		 */
		public function Option2($optionName, $value) {
			$this->CallJqUiMethod(false, "option", $optionName, $value);
		}
		/**
		 * Sets one or more options for the spinner.<ul><li><strong>options</strong>
		 * Type: <a>Object</a> A map of option-value pairs to set.</li></ul>
		 * @param $options
		 */
		public function Option3($options) {
			$this->CallJqUiMethod(false, "option", $options);
		}
		/**
		 * Decrements the value by the specified number of pages, as defined by the
		 * <a><code>page</code></a> option. Without the parameter, a single page is
		 * decremented.<ul><li><strong>pages</strong> Type: <a>Number</a> Number of
		 * pages to decrement, defaults to 1.</li></ul>
		 * @param $pages
		 */
		public function PageDown($pages = null) {
			$this->CallJqUiMethod(false, "pageDown", $pages);
		}
		/**
		 * Increments the value by the specified number of pages, as defined by the
		 * <a><code>page</code></a> option. Without the parameter, a single page is
		 * incremented.<ul><li><strong>pages</strong> Type: <a>Number</a> Number of
		 * pages to increment, defaults to 1.</li></ul>
		 * @param $pages
		 */
		public function PageUp($pages = null) {
			$this->CallJqUiMethod(false, "pageUp", $pages);
		}
		/**
		 * Decrements the value by the specified number of steps. Without the
		 * parameter, a single step is decremented. 				<p>If the resulting value is
		 * above the max, below the min, or reuslts in a step mismatch, the value will
		 * be adjusted to the closest valid value.</p><ul><li><strong>steps</strong>
		 * Type: <a>Number</a> Number of steps to decrement, defaults to 1.</li></ul>
		 * @param $steps
		 */
		public function StepDown($steps = null) {
			$this->CallJqUiMethod(false, "stepDown", $steps);
		}
		/**
		 * Increments the value by the specified number of steps. Without the
		 * parameter, a single step is incremented. 				<p>If the resulting value is
		 * above the max, below the min, or reuslts in a step mismatch, the value will
		 * be adjusted to the closest valid value.</p><ul><li><strong>steps</strong>
		 * Type: <a>Number</a> Number of steps to increment, defaults to 1.</li></ul>
		 * @param $steps
		 */
		public function StepUp($steps = null) {
			$this->CallJqUiMethod(false, "stepUp", $steps);
		}
		/**
		 * Gets the current value as a number. The value is parsed based on the
		 * <a><code>numberFormat</code></a> and <a><code>culture</code></a>
		 * options.<ul><li>This method does not accept any arguments.</li></ul>
		 */
		public function Value() {
			$this->CallJqUiMethod(false, "value");
		}
		/**
		 * <ul><li><strong>value</strong> Type: <a>Number</a> or <a>String</a> The
		 * value to set. If passed as a string, the value is parsed based on the
		 * <a><code>numberFormat</code></a> and <a><code>culture</code></a>
		 * options.</li></ul>
		 * @param $value
		 */
		public function Value1($value) {
			$this->CallJqUiMethod(false, "value", $value);
		}


		public function __get($strName) {
			switch ($strName) {
				case 'Culture': return $this->strCulture;
				case 'Disabled': return $this->blnDisabled;
				case 'Icons': return $this->mixIcons;
				case 'Incremental': return $this->mixIncremental;
				case 'Max': return $this->mixMax;
				case 'Min': return $this->mixMin;
				case 'NumberFormat': return $this->strNumberFormat;
				case 'Page': return $this->intPage;
				case 'Step': return $this->mixStep;
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
				case 'Culture':
					try {
						$this->strCulture = QType::Cast($mixValue, QType::String);
						if ($this->OnPage) {
							$this->CallJqUiMethod(true, 'option', 'culture', $this->strCulture);
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

				case 'Icons':
					$this->mixIcons = $mixValue;
				
					if ($this->OnPage) {
						$this->CallJqUiMethod(true, 'option', 'icons', $mixValue);
					}
					break;

				case 'Incremental':
					$this->mixIncremental = $mixValue;
				
					if ($this->OnPage) {
						$this->CallJqUiMethod(true, 'option', 'incremental', $mixValue);
					}
					break;

				case 'Max':
					$this->mixMax = $mixValue;
				
					if ($this->OnPage) {
						$this->CallJqUiMethod(true, 'option', 'max', $mixValue);
					}
					break;

				case 'Min':
					$this->mixMin = $mixValue;
				
					if ($this->OnPage) {
						$this->CallJqUiMethod(true, 'option', 'min', $mixValue);
					}
					break;

				case 'NumberFormat':
					try {
						$this->strNumberFormat = QType::Cast($mixValue, QType::String);
						if ($this->OnPage) {
							$this->CallJqUiMethod(true, 'option', 'numberFormat', $this->strNumberFormat);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Page':
					try {
						$this->intPage = QType::Cast($mixValue, QType::Integer);
						if ($this->OnPage) {
							$this->CallJqUiMethod(true, 'option', 'page', $this->intPage);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Step':
					$this->mixStep = $mixValue;
				
					if ($this->OnPage) {
						$this->CallJqUiMethod(true, 'option', 'step', $mixValue);
					}
					break;


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
	}

?>
