<?php
/**
 * Defines required methods pertaining to the parsing of JSON data
 */
abstract class JsonMap {
	/**
	 * Creates a mapped object from the provided object and implementation's
	 * mapping
	 * @param mixed $value
	 * @return JsonMap
	 */
	public function __construct($o) {
		foreach ($this->getMap() as $objVar => $path) {
			$value = $o;
			$fullPath = "root";
			while (count($path) > 0) {
				$fullPath .= "->" . $path[0];
				if (!isset($value[$path[0]])) {
					$value = "";
					break;
				}
				$value = $value[$path[0]];
				$path = array_slice($path, 1);
			}
			$this->$objVar = $value;
		}
	}
	
	protected abstract function getMap();
	
	/**
	 * Gets the specified value of this object. Use the implemented class's
	 * constants to see what the API provides.
	 * @param mixed $field
	 * @throws InvalidArgumentException thrown when a field that doesn't exist
	 * is passed
	 */
	public function get($field) {
		foreach ($this->getMap() as $objVar => $path)
			if ($objVar == $field)
				return $this->$objVar;
		throw new InvalidArgumentException("Attempted to get invalid object "
				. "field: "
				. $field);
	}
}
?>