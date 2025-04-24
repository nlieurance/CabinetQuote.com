# CabinetQuote

## Overview
This is a hobby project I built for my portfolio many years ago. It's a website that allows people to post cabinet projects they need to get done. Then, contractors can provide quotes for those projects.

## Basic structure
I built this website with PHP. At the very least, every page consists of the header.php file and one other file. This could be index.php, projectdetails.php, or something similar.

In many cases, there are other php files that add functionality.

## File details

### header.php
This file contains the HTML for the green navigation bar, as well as links to stylesheets and that little snippet of text at the top of the page (Free quotes. No hassles.).

### index.php
The index.php file is the site's homepage. A user can browse projects, visit the About page, log in, or register from here. There's not much to this file. But it contains code that calls the pagination.php file, and that's where the magic happens.

### pagination.php
To show projects on the hompage, I built this file and included it in index.php. It has a while loop that goes through the database, finds projects, and writes HTML to render those projects on the homepage.

### post.php
A user needs to log in before posting or providing a quote for a project. This file checks to see if the user is already logged in. If not, it serves up the login page. The user might be logged in as a contractor. In that case, they go to a page that shows an error message saying they can't post projects.

## To do
I'm dusting off this project after a long break. There are still some outstanding item to get done. For example:
- Neither homeowners nor contractors have any kind of dashboard where they can view all their projects. I should make one.
- Some of the CSS styling needs to be wrapped up.


