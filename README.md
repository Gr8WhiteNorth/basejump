# Basejump WordPress theme

## Introduction

Some people swear by frameworks, some of us work best with grids and yet others prefer to build child themes off the WordPress default theme(s).

Having worked with all of the above, they have one thing in common: there's always something.

* A framework tends to try to cover all its bases and is therefore by default adding way too much "fluff" to the equation.
* When developing based on a grid - whether it's 12 columns, 16 columns, the golden ratio or whatever - there comes a point that a design is just that bit different and you will need to introduce all kinds of div's and/or classes to make the design fit the grid.
* Child themes are nice most of the times, but you need to rewrite a lot of functions or you're stuck with code that never gets used; in other words you'll end up with unnecessary overhead. 

That has been the main reason for me to develop this Basejump WordPress theme.

With the name I have tried to already suggest what it is. Take this theme and "jump off a cliff" (not literally of course) to make it into the site you want it to become.

## Features

Although the Basejump WordPress theme is a base theme for you to build upon, it still comes packed with quite a few features and I have coded it for WordPress 3.4 and above.

* Six different Page Templates, neatly organized in their own Page Templates directory (WordPress 3.4 feature)
* Upto six columns (best used on the Full Width Page Template)
* WPML ready and when activated it shows the language menu right in the menu bar navigation
* Custom background with default background when no custom background has been uploaded by the user; coded with add_theme_support (WordPress 3.4 feature)
* Seven "sidebars" that can be used for widgets
* Responsive

## Installation

After activation the first thing to do is to add a navigation menu and appoint that menu to be the Primary. Only then will all the features of the theme work out of the box and will the theme immediately look good.

<<<<<<< HEAD

## Disclaimer

The Basejump WordPress theme runs on WordPress version 3.4 and above and I offer no backward compatibility.
=======

## Disclaimer

The Basejump WordPress theme runs on WordPress version 3.4 and above and I offer no backward compatibility.



SAMPLE README.MD:
# Search Replace DB

This script was made to aid the process of migrating PHP and MySQL based websites. It has additional features for WordPress but works for most other similar CMSes.

If you find a problem let us know in the issues area and if you can improve the code then please fork the repository and send us a pull request :)

## Usage

* Migrate all your website files
* Upload the script to your web root (or the same folder as wp-config.php)
* Browse to the script's URL in your web browser
* Follow the on-screen instructions

### CLI script

1. Run the CLI script from the command line like so:
   ```./searchreplacedb2cli.php --host localhost --user root --database test --pass "pass" --charset utf\-8 --search "findMe" --replace "replaceMe"```
2. use the `--dry-run` flag to do a dry run without searching/replacing

You can use short form arguments too so `--host` becomes `-h` and so on.

## _Note_

If you use some dynamic processing to setup the database definitions in WordPress try using the 'filestream' branch. Let us know if you find any bugs or have any suggestions to improve it.	
>>>>>>> readme & js
