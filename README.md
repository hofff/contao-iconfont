[![Latest Version on Packagist](http://img.shields.io/packagist/v/hofff/contao-iconfont.svg?style=flat)](https://packagist.org/packages/hofff/contao-iconfont)
[![Installations via composer per month](http://img.shields.io/packagist/dm/hofff/contao-iconfont.svg?style=flat)](https://packagist.org/packages/hofff/contao-iconfont)
[![Installations via composer total](http://img.shields.io/packagist/dt/hofff/contao-iconfont.svg?style=flat)](https://packagist.org/packages/hofff/contao-iconfont)

# Contao Extension: hofff.com - Iconfont

This extension provides some insert tags to insert FontAwesome and individual icons.


## Features

### insert all FontAwesome icons

#### Basic Use

see https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use

**``{{icon-fa*::icon-name}}``** [^FontAwesome-Style]


```php+HTML
<i class="fa* fa-icon-name" aria-hidden="true"></i>
```

#### Fixed Width Icons

see https://fontawesome.com/how-to-use/on-the-web/styling/fixed-width-icons

**``{{icon-fa*-fw::icon-name}}``** [^FontAwesome-Style]


```php+HTML
<i class="fa* fa-icon-name fa-fw" aria-hidden="true"></i>
```

#### Bordered + Pulled Icons

see https://fontawesome.com/how-to-use/on-the-web/styling/bordered-pulled-icons

**wrap text around an icon - left**

**``{{icon-fa*-left::icon-name}}``** [^FontAwesome-Style]


```php+HTML
<i class="fa* fa-icon-name fa-2x fa-pull-left" aria-hidden="true"></i>
```

**wrap text around an icon - right**

**``{{icon-fa*-right::icon-name}}``** [^FontAwesome-Style]


```php+HTML
<i class="fa* fa-icon-name fa-2x fa-pull-right" aria-hidden="true"></i>
```

**wrap text around an icon with border - left**

**``{{icon-fa*-border-left::icon-name}}``** [^FontAwesome-Style]


```php+HTML
<i class="fa* fa-icon-name fa-2x fa-pull-left fa-border" aria-hidden="true"></i>
```

**wrap text around an icon with border - right**

**``{{icon-fa*-border-right::icon-name}}``** [^FontAwesome-Style]


```php+HTML
<i class="fa* fa-icon-name fa-2x fa-pull-right fa-border" aria-hidden="true"></i>
```

#### Animating Icons

see https://fontawesome.com/how-to-use/on-the-web/styling/animating-icons

**rotate icon**

**``{{icon-fa*-spin::icon-name}}``** [^FontAwesome-Style]


```php+HTML
<i class="fa* fa-icon-name fa-spin" aria-hidden="true"></i>
```

**pulse icon**

**``{{icon-fa*-pulse::icon-name}}``** [^FontAwesome-Style]


```php+HTML
<i class="fa* fa-icon-name fa-pulse" aria-hidden="true"></i>
```

#### Rotating Icons

see https://fontawesome.com/how-to-use/on-the-web/styling/rotating-icons

**turn 90° clockwise**

**``{{icon-fa*-rotate-90::icon-name}}``** [^FontAwesome-Style]


```php+HTML
<i class="fa* fa-icon-name fa-rotate-90" aria-hidden="true"></i>
```

**turn 180° clockwise**

**``{{icon-fa*-rotate-180::icon-name}}``** [^FontAwesome-Style]


```php+HTML
<i class="fa* fa-icon-name fa-rotate-180" aria-hidden="true"></i>
```

**turn 270° clockwise**

**``{{icon-fa*-rotate-270::icon-name}}``** [^FontAwesome-Style]


```php+HTML
<i class="fa* fa-icon-name fa-rotate-270" aria-hidden="true"></i>
```

**mirror icon horizontally**

**``{{icon-fa*-flip-horizontal::icon-name}}``** [^FontAwesome-Style]


```php+HTML
<i class="fa* fa-icon-name fa-flip-horizontal" aria-hidden="true"></i>
```

**mirror icon vertically**

**``{{icon-fa*-flip-vertical::icon-name}}``** [^FontAwesome-Style]


```php+HTML
<i class="fa* fa-icon-name fa-flip-vertical" aria-hidden="true"></i>
```

**mirror icon vertically and horizontally (requires 5.7.0 or greater)**

**``{{icon-fa*-flip-both::icon-name}}``** [^FontAwesome-Style]


```php+HTML
<i class="fa* fa-icon-name fa-flip-both" aria-hidden="true"></i>
```

#### Stacked Icons

see https://fontawesome.com/how-to-use/on-the-web/styling/stacking-icons

**icon with square background**

**``{{icon-fa*-square::icon-name}}``**

```php+HTML
<span class="fa-stack">
	<i class="fas fa-square fa-stack-2x" aria-hidden="true"></i>
	<i class="fa* fa-icon-name fa-stack-1x fa-inverse" aria-hidden="true"></i>
</span>
```

**icon with square background - only border**

**``{{icon-fa*-square-border::icon-name}}``**

```php+HTML
<span class="fa-stack">
	<i class="far fa-square fa-stack-2x" aria-hidden="true"></i>
	<i class="fa* fa-icon-name fa-stack-1x" aria-hidden="true"></i>
</span>
```

**icon with circle background**

**``{{icon-fa*-circle::icon-name}}``**

```php+HTML
<span class="fa-stack">
	<i class="fas fa-circle fa-stack-2x" aria-hidden="true"></i>
	<i class="fa* fa-icon-name fa-stack-1x fa-inverse" aria-hidden="true"></i>
</span>
```

**icon with circle background - only border**

**``{{icon-fa*-circle-border::icon-name}}``**

```php+HTML
<span class="fa-stack">
	<i class="far fa-circle fa-stack-2x" aria-hidden="true"></i>
	<i class="fa* fa-icon-name fa-stack-1x" aria-hidden="true"></i>
</span>
```

**icon with prohibition sign**

**``{{icon-fa-ban::icon-name}}``**

```php+HTML
<span class="fa-stack">
	<i class="fa* fa-icon-name fa-stack-1x" aria-hidden="true"></i>
	<i class="fas fa-ban fa-stack-2x" aria-hidden="true"></i>
</span>
```

### insert your own icon font (you have to provide some css by your own)

**``{{icon::your-icon-name}}``**

```php+HTML
<i class="icon icon-your-icon-name" aria-hidden="true"></i>
```

## CSS Example for your own icon font

```php+HTML
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

If you prefer to install it manually, download the latest release here: https://github.com/hofff/contao-iconfont/releases


## Compatibility

- min. Contao version: >= 3.5.0
- max. Contao version: 4.*

## Dependency

- You have to include FontAwesome sources see https://fontawesome.com/start

[^FontAwesome-Style]: The `*` should be replaced with the FontAwesome-Style you want: fas=[Solid](https://fontawesome.com/icons?s=solid), far=[Regular](https://fontawesome.com/icons?s=regular), fal=[Light](https://fontawesome.com/icons?s=light) or fab=[Brands](https://fontawesome.com/icons?s=brands)

