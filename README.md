# Greenliberal Website

## features
* div only layout
* SEO friendly
* news hold in excel file
* the most common parts externalized (used php include)
* passes the accessability test: http://www.sidar.org/hera

## design

### layout
* div only
* SEO friendly (content comes first)
* based on http://matthewjamestaylor.com/blog/ultimate-3-column-holy-grail-pixels.htm
* all menus are lists
* tested against chrome, firefox, IE 9

### typography
* switched h1, h2 compared to original css
* font-size in em

### hacks
* to get the green columns to the window size, when the content is short, javascript is used.


The home.html shows a pure html representation of the home page.

## PHP pages
* externalized the most used parts in resources/templates
* the news are loaded from an excel file. They are displayed in 4 places: home.php, medienmitteilungen.php, medienmitteilungen_polarbeit.php, homefeed.php
