# Happietaria Rotterdam 2017

Happietaria is a for-charity pop-up restaurant organized by students in different cities in the Netherlands. This Wordpress theme was designed and developed for the Rotterdam chapter of Happietaria 2017. See [happietariarotterdam.nl](http://www.happietariarotterdam.nl/) for more information.


## Dependencies

- Wordpress
- Wordpress plugin: `timber-library`
- Wordpress plugin: `advanced-custom-fields`

## Installation

1. Make sure your Wordpress installation has the plugins described under "Dependencies".
2. Download the latest version from the releases tab on [Github](https://github.com/weirdwater/happietaria-2017/releases).
2. Go to your Wordpress' Appearance tab in the dashboard.
3. Click `Add New` and then `Upload Theme`.
4. Select the downloaded `.zip` and confirm the upload.
5. Activate the theme.

### Changelog

#### v1.0.1

- Bugfix: Settings for the home page template would only show up on the page with the id 27. Fixed it so it would show up for the static home page.
- Bugfix: Google font wasn't getting loaded.

### Development

To start developing spin up a local Wordpress install. Clone this repository to the `wp-content/themes` directory and you're good to go!

For styling we use SCSS. To compile SCSS to CSS you can use [SASS](http://sass-lang.com/)'s commandline tool. Just run the following from the theme's directory:

```
sass scss/happietaria.scss:static/happietaria-2017.css
```

You can also have sass watch the SCSS-directory for changes. As soon as it detects a filechange it will recompile the CSS. To start the watcher you simply add the `-w` flag to your command: 

```
sass -w scss/happietaria.scss:static/happietaria-2017.css
```

* * *

[happietaria-2017](https://github.com/weirdwater/happietaria-2017) is built on top of [timber/starter-theme](https://github.com/timber/starter-theme)
