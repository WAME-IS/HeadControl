# HeadControl


## Default Types

- MetaTitle
- MetaDescription
- MetaKeywords


## Methods

- setContent()


## Usage

### Presenter

	/** @var HeadControl @inject */
	public $headControl;

	public function createComponentHeadControl()
	{
		$component = $this->headControl;
		$component->getType(MetaTitle)->setContent('Nadpis');
		return $component;
	}

### Template

	{control headControl}