[![Latest Version on Packagist](http://img.shields.io/packagist/v/hofff/contao-iconfont.svg?style=flat)](https://packagist.org/packages/hofff/contao-iconfont)
[![Installations via composer per month](http://img.shields.io/packagist/dm/hofff/contao-iconfont.svg?style=flat)](https://packagist.org/packages/hofff/contao-iconfont)
[![Installations via composer total](http://img.shields.io/packagist/dt/hofff/contao-iconfont.svg?style=flat)](https://packagist.org/packages/hofff/contao-iconfont)

# Contao Extension: hofff.com - Iconfont

This extension provides some insert tags to insert FontAwesome and individual icons.

**FOR FontAwesome 4 ONLY!!!** If you want to use FontAwesome 5 please use contao-iconfont 2.x

## Features

### insert all FontAwesome icons

Check the FontAwesome [cheatsheet](https://fontawesome.com/v4.7.0/cheatsheet/) for ``fa-icon-name`` you want to use.

#### Basic Use

see https://fontawesome.com/v4.7.0/examples/#basic

**``{{icon-fa::fa-icon-name}}``**

```
<i class="fa fa-icon-name" aria-hidden="true"></i>
```

#### Stacked Icons

see https://fontawesome.com/v4.7.0/examples/#stacked

**icon with square background**

**``{{icon-fa-square::fa-icon-name}}``**

```php+HTML
<span class="fa-stack">
	<i class="fa fa-square fa-stack-2x" aria-hidden="true"></i>
	<i class="fa fa-icon-name fa-stack-1x fa-inverse" aria-hidden="true"></i>
</span>
```

**icon with square background - only border**

**``{{icon-fa-square-o::fa-icon-name}}``**

```php+HTML
<span class="fa-stack">
	<i class="fa fa-square-o fa-stack-2x" aria-hidden="true"></i>
	<i class="fa fa-icon-name fa-stack-1x" aria-hidden="true"></i>
</span>
```

**icon with circle background**

**``{{icon-fa-circle::fa-icon-name}}``**

```php+HTML
<span class="fa-stack">
	<i class="fa fa-circle fa-stack-2x" aria-hidden="true"></i>
	<i class="fa fa-icon-name fa-stack-1x fa-inverse" aria-hidden="true"></i>
</span>
```

**icon with circle background - only border**

**``{{icon-fa-circle-o::fa-icon-name}}``**

```php+HTML
<span class="fa-stack">
	<i class="fa fa-circle-o fa-stack-2x" aria-hidden="true"></i>
	<i class="fa fa-icon-name fa-stack-1x" aria-hidden="true"></i>
</span>
```

**icon with prohibition sign**

**``{{icon-fa-ban::fa-icon-name}}``**

```php+HTML
<span class="fa-stack">
	<i class="fa fa-icon-name fa-stack-1x" aria-hidden="true"></i>
	<i class="fa fa-ban fa-stack-2x" aria-hidden="true"></i>
</span>
```

### insert your own icon font (you have to provide some css by your own)

**``{{icon::your-icon-name}}``**

```php+HTML
<i class="icon icon-your-icon-name" aria-hidden="true"></i>
```

## CSS Example for your own icon font

```
/* Include your icon font files */

@font-face {
  font-family: "Your icon font name";
  src: url('your-icon-font-filename.eot') format('embedded-opentype'),
  url('your-icon-font-filename.ttf') format('truetype'),
  url('your-icon-font-filename.woff') format('woff'),
  url('your-icon-font-filename.woff2') format('woff2'),
  url('your-icon-font-filename.svg') format('svg');
}

/* base styles for .icon */

.icon {
  font-family: "Your icon font name";
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* replace individual icon */

.icon-your-icon-1 {
  &:before {
    content: "\XXXX";
  }
}
```

## Installation

Install the extension via composer: [hofff/contao-iconfont](https://packagist.org/packages/hofff/contao-iconfont).

If you prefer to install it manually, download the latest release of version 1.x here: https://github.com/hofff/contao-iconfont/releases


## Compatibility

- min. Contao version: >= 3.2.0
- max. Contao version: 4.*


## Dependency

- You have to include FontAwesome sources see https://fontawesome.com/v4.7.0/get-started/
