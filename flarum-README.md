# Simple Spoilers

![MIT License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/flarumite/simple-spoilers.svg)](https://packagist.org/packages/flarumite/simple-spoilers) [![Total Downloads](https://img.shields.io/packagist/dt/flarumite/simple-spoilers.svg)](https://packagist.org/packages/flarumite/simple-spoilers) [![Donate](https://www.paypalobjects.com/en_GB/i/btn/btn_donate_SM.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QCCXU72DC9LB4&source=url)

- HTML5 only spoilers - no extra JS needed!
- Works with [FriendsOfFlarum/nightmode](https://github.com/FriendsOfFlarum/nightmode)
- Integrates with standard Flarum BBCode
- Supports all modern browsers (no IE)

---

A [Flarum](http://flarum.org) extension. Adds simple spoilers to your forum. Uses pure HTML and CSS with absolutely no JavaScript.

Supports [FriendsOfFlarum's Night Mode](https://github.com/friendsofflarum/nightmode).

### Browser support

As this extension uses the [`<details>` and `<summary>` elements](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/details), this extension is [incompatible with Internet Explorer](https://caniuse.com/details). IE has approximately 1% of market share in the modern world, and many websites are beginning to drop support for it.

[center]
![](https://caniuse.bitsofco.de/image/details.png)
[/center]

### Installation

Install with composer:

```sh
composer require flarumite/simple-spoilers:"*"
```

To update:

```sh
composer update flarumite/simple-spoilers
php flarum cache:clear
```

### Usage

Spoilers are available in two versions: normal and customised title. The normal spoilers use the values in the locale file as titles (button text), whereas the customised title version allows users to add their own title to replace the localised versions.

#### Normal spoiler

[spoiler]
![](https://github.com/flarumite/simple-spoilers/blob/main/docs/normal.gif?raw=true)

```md
[spoiler]
Some content
[/spoiler]
```

[/spoiler]

#### Spoiler with custom title

[spoiler]
![](https://github.com/flarumite/simple-spoilers/blob/main/docs/custom-title.gif?raw=true)

```md
[spoiler title=My cool title]
Some content
[/spoiler]
```

[/spoiler]

#### Spoiler-ception!

Putting spoilers inside spoilers even works!

[spoiler]
![](https://github.com/flarumite/simple-spoilers/blob/main/docs/embedded.png?raw=true)

```md
[spoiler]
test
[spoiler]
embedded
[spoiler]
embedded
[spoiler]
embedded
[/spoiler]
[/spoiler]
[/spoiler]
[/spoiler]
```

[/spoiler]

### Links

- [Packagist](https://packagist.org/packages/flarumite/simple-spoilers)
- [GitHub](https://github.com/flarumite/simple-spoilers)
- [Discuss](https://github.com/flarumite/simple-spoilers)
