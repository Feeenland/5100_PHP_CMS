# 5100 PHP Website WDD19 Laura Lea Müller
SAE Institute Zürich, Submission date Jan, 28. 2021
***

## For the teacher who reviews and evaluates the project
**Database**

_the file to create the Database is in this folder:_
- root / config / database.php? !!! filename?

_If the access data for the database have to be adjusted, this can be found here:_
- root / web / database / config.php

**Login**

_these are the data to log into my website in the backend:_
- Admin: email: lauralea@ledertatze.com PW: leder
- User: email: cmsuser@ledertatze.com PW: 5100cmsuser

The only difference between admin and user is = the admin can edit/add and delete users

**Files**

_in every file at the top you find a description what this file does_

**Folders**

_to understand the folder structure please read the section Folder structure in the README.md_
***

## Overview
**CMS Project Leder Tatze**

For this school project you have to program a cms yourself.
I have decided to revise and add to my existing "Leder LARP Tatze" page.
The goal is a simple CMS where you can delete, edit and add things.

The page changes from Leder LARP Tatze to Leder Tatze this makes the whole thing a bit more general. 
Also, the site is now being set up with Bootstrap and Mobile first.
***

##Project structure
**Pic**  
my php code is unfortunately a mishmash between object-oriented programming and not object-oriented programming. 
this for the reason that I can not yet determine the difference everywhere and thus also could not locate with examples from the internet whether this is object-oriented or not.
***

##Installation and system
In this project the following languages and libraries were used:
 * PHP
 * js and jquery
 * css/ scss
 * HTML5
 * gulp
 * Bootstrap
 * git
 
To edit or change the project open gitBash or any other console in the root folder.

In case you haven't already installed npm and node.js globally, please do that first. [link to install npm via node.js ](https://www.npmjs.com/get-npm)  
   if you are not sure about it run `node -v` and `npm -v` this will tell you which version you have installed, or otherwise if it is not available.

Run `npm install` this command will run the package.json file and thus install gulp and Bootstrap.  
It will create a folder named node_modules.

Because scss is used here, a watcher must be activated. Run `gulp watch`  
 this will now automatically open a browser with a live server of the project.
this command will run the gulpfile.js file and inside it the watch function.

What it actually does is
* it watches for changes in the scss files, takes the scss files, changes those to css an saves them in the css folder
* it takes the created css in the css folder and uglify the file, before it saves it in the min_css folder
* it takes the created css in the min_css folder and added prefixes in the file before it saves it in the min_css folder
* it watches for changes in the html files and updates the live server on it.
* it watches for changes in the js files and updates the live server on it.

Now you can work on this project.
The whole thing is actually just for templateing.
With PHP the whole thing gets a bit more complicated, I ask you not to change anything as something could break quickly.
***

##Folder structure
**To be honest, that's probably what I spent most of my time with.
  Since I had no idea how to build such a project correctly, beautifully and understandably.
  I hope what I've done now is understandable.**  

`root` 5100_php_website_laura_lea_mueller_WDD919 is the root folder.
 1. `config` folder _contains files for configuration_
 2. `web` folder _contains files for configuration_
    1. `css` folder _finished css files_
    2. `html` folder  _HTML templates files, are only required for preparation_
    3. `templates` folder  _views_
    4. `models` folder  _quasi sachen aus der datenbank, listen..(für jede liste neues file)_
    5. `controllers`  files die kontollieren, warten, entscheiden was mit den seiten passieren soll
 3. README.md 
 
***

##source directory
**Pictures**  
Nearly all of the Pictures I have used in this project are edited by myself.

Some others I have picked individually on the internet on the following pages:
* [artstation.com](https://www.artstation.com/artwork/N82Ld) 

