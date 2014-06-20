<?php
	
	// TODO: Develop and test core library
	
	// all libraries will be an extension of this class, possibly
	abstract class core {
		
		// properties
		public function __get($name) {
			if (method_exists($this, ($method = "get_{$name}"))) {
				return $this->$method();
			}
			else return;
		}
		public function __isset($name) {
			if (method_exists($this, ($method = "isset_{$name}"))) {
				return $this->$method();
			}
			else return;
		}
		public function __set($name, $value) {
			if (method_exists($this, ($method = "set_{$name}"))) {
				$this->$method($value);
			}
		}
		public function __unset($name) {
			if (method_exists($this, ($method = "unset_{$name}"))) {
				$this->$method();
			}
		}
		
		// information
		// contains version
		// other templating scenarios
		
	}
	
?>
