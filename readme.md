# Creed Interactive Base Style Guide
This is a style guide built as a base to start projects.

## How To Setup
These are the items you will need to install before running the Gulp compiler:

* Node [https://nodejs.org/en/](https://nodejs.org/en/)
* Bower [https://bower.io/#install-bower](https://bower.io/#install-bower)

## How To Install
In terminal, run these commands in order:

* Install Node Packages: `npm install`

* Install bower dependancies:
`bower install`

## Compile CSS and JS
Now that you have downloaded all the dependencies for this project, go to the main root directory where **gulpfile.js** lives. You can run these commands:

This will run the *default* task (Includes Watch, Mapping, Nested CSS):

`gulp`

This will run the *production* task (Includes Compressed CSS):

`gulp prod`
