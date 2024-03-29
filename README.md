# Reading Bar module for Joomla

This module creates a reading progress bar at the topbar module position in your Joomla website.

Based on an article in Joomla! Community Magazine™: How to create a reading bar in your Joomla 4 website.

Link: https://magazine.joomla.org/all-issues/october-2022/a-progressive-reading-bar-in-your-joomla-website-without-extensions

# Configuration / Features

### INSTALLATION ###
- Download: https://github.com/sandewt/mod_readingbar/releases

- Install and activate (or update) the module in the topbar postion.

- Choose in the settings the desired Bootstrap color theme for the reading bar.

- Set the Menu Assignment on the relevant pages.


### JOOMLA VERSION ###

* Latest version: 1.1.7 for Joomla 4.x and 5.x
* Type: module (site)



### STYLING ###

This module (partially) uses the Bootstrap progress bar features. Bootstrap is natively integrated into Joomla.

You can override some properties in the 'user.css' custom template file.

E.g. `height: 4px` (default) becomes `height: 6px`:

```
.mod-readingbar .progress {
  height: 6px;
}

.mod-readingbar .progress-bar {
  height: 6px;
}
```


# Issues / Pull Requests

You have found an Issue, have a question or you would like to suggest changes regarding this extension?

Link: https://github.com/sandewt/mod_readingbar/issues/new

# License

Copyright (c) 2023 JG Sanders

GNU General Public License version 2 or later ([https://www.gnu.org/licenses/gpl-3.0.txt](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html))

# Special Thanks

Michael Russell

# Joomla! Extensions Directory (JED)

This module can NOT YET been found in the Joomla! Extensions Directory.
