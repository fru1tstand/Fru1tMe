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
	private $dateRunning;
  /** @var string */
	private $dateBegin;
  /** @var string */
	private $dateEnd;
	/** @var string */
	private $title;
	/** @var string */
	private $tech;
	/** @var string */
	private $shortDescription;
	/** @var string */
	private $longDescription;
  /** @var string */
	private $images;
  /** @var string */
	private $links;

	/** Use #create */
	private function __construct() {
		$this->dateRunning = "";
		$this->title = "";
		$this->tech = "";
		$this->shortDescription = "";
		$this->longDescription = "";
		$this->dateBegin = "";
		$this->dateEnd = "";
		$this->images = "";
		$this->links = "";
	}

  /**
   * @return string
   */
  public function getDateBegin(): string {
    return $this->dateBegin;
  }

  /**
   * @param string $dateBegin
   * @return Project
   */
  public function setDateBegin(string $dateBegin): Project {
    $this->dateBegin = $dateBegin;
    return $this;
  }

  /**
   * @return string
   */
  public function getDateEnd(): string {
    return $this->dateEnd;
  }

  /**
   * @param string $dateEnd
   * @return Project
   */
  public function setDateEnd(string $dateEnd): Project {
    $this->dateEnd = $dateEnd;
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

  /**
   * @return string
   */
  public function getTech(): string {
    return $this->tech;
  }

  /**
   * @param string $tech
   * @return Project
   */
  public function setTech(string $tech): Project {
    $this->tech = $tech;
    return $this;
  }

  /**
   * @return string
   */
  public function getImages(): string {
    return $this->images;
  }

  /**
   * @param string $images
   * @return Project
   */
  public function setImages(string $images): Project {
    $this->images = $images;
    return $this;
  }

  /**
   * @return string
   */
  public function getLinks(): string {
    return $this->links;
  }

  /**
   * @param string $links
   * @return Project
   */
  public function setLinks(string $links): Project {
    $this->links = $links;
    return $this;
  }

}
