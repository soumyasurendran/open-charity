# Open Charity

Open charity is an organisation that hosts events in London about open source software and solution for charities.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

## Built With

* [Drupal](https://www.drupal.org/) - Drupal 7.54
* [Mysql](https://www.mysql.com/) - Database Connectivity
* [GULP SASS](https://www.npmjs.com/package/gulp-sass) - We are using Gulp to compile SASS file



### Installation

* Install gulp sass for compiling css.

Below command will install gulp globally, If you haven't installed gulp globally before. You can skip this step, If you have already installed gulp globally.

```
npm install -g gulp 
```

Then go to project directory , run below commands.

```
npm install --save-dev gulp-sass
```

When you want to edit .scss file, you must run gulp before start editing. Open terminal, Go to the project directory and run below command. Then after you can start editing in .scss file.

```
gulp
```


* Download and extract Drupal 7.54 version.
* Create a database 
* Give folder write permission for create settings.php file and Run installation.


### Theming & Configuration

* Created theme folder 'open-charity' in /sites/all/themes/custom directory.
* Created opencharity.info file with name, description, version, scripts and block region definitions
* created common page.tpl.php file  
* Activate theme from Administration tree (Appearence tab) and set logo and favicon for my custom theme.

### Development

* Created page--front.tpl.php file for custom home page and define block regions for theming
* Added the menu (structure/menu/main menu) from admin panel and configure menu block to my custom template.
* Banner is also configured with custom block feature.
* Created a content type Groups for managing 'Get Involved' section dynamically and created a Block View (Structure/Views) and configured it as block.
* Our Mission is also configured with Views and created a custom template for theming purpose.
* Content type Blog Is used for blog entries and Members for Our members.

### Recommended Modules

* Views
* Date
* Chaos tools


### Deployment

Clone the files to your server and set up the database settings in sites/default/settings.php 




