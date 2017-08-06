<?php

namespace me\fru1t\core;

/**
 * A simple object representing a project to display on /projects
 */
class Project {
	/**
	 * Creates a new project and returns the instance.
	 * @return Project
	 */
	public static function create(): Project {
		return new Project();
	}

	/** @var string */
	private $dateSpan;
	/** @var string */
	private $dateRunning;
	/** @var string */
	private $title;
	/** @var string */
	private $languages;
	/** @var string */
	private $frameworks;
	/** @var string */
	private $shortDescription;
	/** @var string */
	private $longDescription;

	/** Use #create */
	private function __construct() {
		$this->dateSpan = "";
		$this->dateRunning = "";
		$this->title = "";
		$this->languages = "";
		$this->frameworks = "";
		$this->shortDescription = "";
		$this->longDescription = "";
	}

	/**
	 * @return string
	 */
	public function getDateSpan(): string {
		return $this->dateSpan;
	}

	/**
	 * @param string $dateSpan
	 * @return Project
	 */
	public function setDateSpan(string $dateSpan): Project {
		$this->dateSpan = $dateSpan;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDateRunning(): string {
		return $this->dateRunning;
	}

	/**
	 * @param string $dateRunning
	 * @return Project
	 */
	public function setDateRunning(string $dateRunning): Project {
		$this->dateRunning = $dateRunning;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle(): string {
		return $this->title;
	}

	/**
	 * @param string $title
	 * @return Project
	 */
	public function setTitle(string $title): Project {
		$this->title = $title;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLanguages(): string {
		return $this->languages;
	}

	/**
	 * @param string $languages
	 * @return Project
	 */
	public function setLanguages(string $languages): Project {
		$this->languages = $languages;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getFrameworks(): string {
		return $this->frameworks;
	}

	/**
	 * @param string $frameworks
	 * @return Project
	 */
	public function setFrameworks(string $frameworks): Project {
		$this->frameworks = $frameworks;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getShortDescription(): string {
		return $this->shortDescription;
	}

	/**
	 * @param string $shortDescription
	 * @return Project
	 */
	public function setShortDescription(string $shortDescription): Project {
		$this->shortDescription = $shortDescription;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLongDescription(): string {
		return $this->longDescription;
	}

	/**
	 * @param string $longDescription
	 * @return Project
	 */
	public function setLongDescription(string $longDescription): Project {
		$this->longDescription = $longDescription;
		return $this;
	}
}
