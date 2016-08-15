# HeadControl


## Default Types

- MetaTitle
- MetaDescription
- MetaKeywords


## Methods

- setContent()


## Usage

### Presenter

/** @var MetaTypeRegister @inject */
public $metaTypeRegister;

... $this->metaTypeRegister->getByName('title')->setContent("Title");

### Template

{control headControl}