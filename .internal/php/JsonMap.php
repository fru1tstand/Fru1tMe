<?php
/**
 * Defines required methods pertaining to the parsing of JSON data
 */
abstract class JsonMap {
	/**
	 * Creates a mapped object from the provided object
	 * @param mixed $value
	 * @return JsonMap
	 */
	public function __construct($obj) {
		$this->handle($obj);
		return $this;
	}
	protected abstract function handle($obj);
}
?>