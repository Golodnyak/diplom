![Logo](https://avis-studio.com/wp-content/themes/avis/img/header__logo.svg)

# Avis WordPress Template (AWPT)

This is basic template for wordpress website development, for AVIS DIGITAL STUDIO.

## Authors

- [@holod-e](https://www.github.com/holod-e)


## Installation

### *Step 1*

Unzip template arhive to openServer/domains directory, and change name of unziped folder to name of domain for development
```
Example: projectname.avis-studio.com
```
Change theme name in wp-content/themes/theme-name
```
Example: wp-content/themes/theme-name => wp-content/themes/projectthemename
```

### *Step 2*

config gulp (change variables in gulpfile)
```js
	var theme = 'projectthemename';
	var domain = 'projectname.avis-studio.com'
```
Config wordpress. Create DB, and change wp-config.php file
```php
	define( 'DB_NAME', 'projectDataBaseName' );
```

### *Step 3*

install packages and start
```sh
	npm i
	npm run start
```

## Themplate Structure

```
	CSS - folder with compilled scss files (dont change css files, while work in local server)
	FONTS - folder for fonts, used in this project
	IMG - folder for images, used in this project
	JS - folder for js files
	INC - folder for functions.php parts (can contain addidional files)
		theme-functions.php - file for basic theme functions and hooks
		polylang-functions.php - file for multilanguage functions and hooks
	SCSS
		libs.scss - import all scss libs, used in project
		main.scss - import all scss custom styles for project
		main - folder for main scss styles (mixins, fonts, reset, variables, ...)
		libs - folder for libs scss styles
	TEMPLATE-PARTS - folder for guttenberg blocks, footer, header, etc.
```


## code recomendations

- using tabs for indentation
- use lazyload
- use BEM and write clean, valid, structured code
- use scss and css variables, mixins
	```html
	<section id="example" class="example">
		<div class="example__container">
			<h1 class="example__title"> title  </h1>
			<p class="expample__text"> text </p>
			<div class="exapmle__image lazy" data-bg="img/image.jpg"></div>
		</div>
	</section>
	```

	```scss
	.example {
		&__container {
			 //custom styles for container (content wrapper)

			@include flex(space-between, center, wrap, 20px); // mixin example
			@include tablet {gap: 10px;} // midastyles for tablet mixin
		}
		&__title {
			// custom styles for this section title
			width: 100%;
			color: var(--accent); // css variable example
			@include mob {text-align: center;} // midastyles for mobile mixin
		}
		&__text {
			// custom styles for this section text
		}
		&__image {
			// custom styles for this section image
			background: 50% / cover no-repeat;
		}
	}
	```

## DB structure recomendations
- use ACF (for custom fiedds)
- use CPT (for custom post types)
- use Polylang (for multilanguages)
- using Yoast (for seo)

## Features

this template already include many features (wp plugins, js libraries, js scripts, scss/css styles) what we usualy use in our projects.

### countdown
simply styled countdown with cookie or to some date.
how to use:
```html
	<div class='simpleCountdown' data-cookies='yep' data-extra='4,0,0' ></div>
	<div class='simpleCountdown' data-cookies='nope' data-date='2017,1,18,0' ></div>
```

### videopopup
to open video in popup use:
```html
	<a href="#modal-video" data-video='vimeo' data-srcvideo='193236599'>Open vimeo</a>
	<a href="#modal-video" data-video='youtube' data-srcvideo='ajnNdUImtCE'>Open youtube</a>
```

### popups
to open popup write id of popup in link, example:
```html
<a href="#modal-popup" >Open popup</a>

<div class="modal-overlay" id="modal-popup">
	<div class="modal-content popup-content">
		<div class="close-button"></div>

	</div>
</div>
```

## Used By

This project is used by the following companies:

- AVIS DIGITAL STUDIO

## Tech Stack

**Client:** Gulp, SCSS, PHP, JS

**Server:** PHP, Node