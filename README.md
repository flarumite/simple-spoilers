# Simple Spoilers

![MIT License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/flarumite/simple-spoilers.svg)](https://packagist.org/packages/flarumite/simple-spoilers) [![Total Downloads](https://img.shields.io/packagist/dt/flarumite/simple-spoilers.svg)](https://packagist.org/packages/flarumite/simple-spoilers) [![Donate](https://www.paypalobjects.com/en_GB/i/btn/btn_donate_SM.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QCCXU72DC9LB4&source=url)

A [Flarum](http://flarum.org) extension. Adds simple spoilers to your forum. Uses pure HTML and CSS with absolutely no JavaScript.

Supports [FriendsOfFlarum's Night Mode](https://github.com/friendsofflarum/nightmode).

### Browser support

As this extension uses the [`<details>` and `<summary>` elements](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/details), this extension is [incompatible with Internet Explorer](https://caniuse.com/details). IE has approximately 1% of market share in the modern world, and many websites are beginning to drop support for it.

### Installation

Install with composer:

```sh
composer require flarumite/simple-spoilers
```

To update:

```sh
composer update flarumite/simple-spoilers
```

### Usage

Spoilers are available in two versions: normal and customised title. The normal spoilers use the values in the locale file as titles (button text), whereas the customised title version allows users to add their own title to replace the localised versions.

#### Normal spoiler

<details>
<summary>Click to show</summary>

![](https://github.com/flarumite/simple-spoilers/blob/main/docs/normal.gif?raw=true)

```
[spoiler]
Some content
[/spoiler]
```

</details>

#### Spoiler with custom title

<details>
<summary>Click to show</summary>

![](https://github.com/flarumite/simple-spoilers/blob/main/docs/custom-title.gif?raw=true)

```
[spoiler title=My cool title]
Some content
[/spoiler]
```

</details>

### Links

- [Packagist](https://packagist.org/packages/flarumite/spoilers-and-accordions)
- [GitHub](https://github.com/flarumite/simple-spoilers)
- [Discuss](https://github.com/flarumite/simple-spoilers)
