# Patterns

The directories are organized following the [atomic design](http://bradfrost.com/blog/post/atomic-web-design/#atoms) philosophy so every UI element might be part of a template, organisms, molecule or atom.

This directory contains all the assets required to create the site and here
is where mostly all of your code should be placed.  

The build system used for this project is done via `gulp` so you can execute
different tasks using `gulp` as the main command inside of this directory.

# Tasks

### `gulp build`

This task run: 

- [gulp styles:build](#gulp-stylesbuild)
- [gulp js:build](#gulp-jsbuild)

### `gulp lint`

This task run: 

- [gulp js:lint](#gulp-jslint)

### `gulp watch`

This taks run: 

- [gulp styles:watch](#gulp-styleswatch) 
- [gulp js:watch](#gulp-jswatch)

### `gulp js`

Task that creates a single JS version with all the requires especified on the file also makes sure
the file contains a [source map](#whats-a-source-map) to keep track of errors more 
easily when the development of the site is active, this task is useful during 
development and the generated file is not [minified](#whats-minification).

### `gulp js:dev`

This task is just an alias for [gulp js](#gulp-js)

### `gulp js:build`

This taks creates a single JS file with no comments, removes [source maps](#whats-a-source-map) 
and creates a [minified](#whats-minification) version, this is useful to decrease the 
file size on the final version of the generated file.

### `gulp js:watch`

Keeps track of every change on the JS files and generate the development version of the JS asset,
(see [gulp js:dev](#gulp-jsdev)) every time a new change is detected on the JS files, useful to do
it manually after every change is made on the site.

### `gulp js:lint`

With this task you can run the linter for JS the file review all the: atoms, molecules, organisms
and templates directories to make sure we follow the same code standard in those sections.

The rules of the linter are specified on the hidden file [`.eslintrc.json`](.eslintrc.json)

## FAQs
- [What's a source map?](#whats-a-source-map)
- [What's minification](#whats-minification)
- [How to add a new JS function / behavior ?](#how-to-add-a-new-js-function--behavior-)
  - [External resources](#external-resources)
- [How to use an external package from NPM?.](#how-to-use-an-external-package-from-npm)

### How to add new icons? 

### What's a source map?

Source Maps map minified code to source code. You can then read and debug compiled code 
in its original source, ([more info and details about how to enable it on Google Chrome](https://developers.google.com/web/tools/chrome-devtools/javascript/source-maps))

For more information about the usage of this helper function please take 
a [look here](https://github.com/moxie-lean/lean-theme/#use_icon).

### What's minification

Is the process of removing all unnecessary characters from source code without 
changing its functionality. [Wikipedia](https://en.wikipedia.org/wiki/Minification_programming) .

### How to add a new JS function / behavior ?

First of all you need to create a new file where it makes more sense for example we want to create a
listener for the click event in buttons so every time a button is clicked we want to add a new
class to the body.

In this case it would make sense to create a new atom called inside of
`atoms/buttons/toggle-button-listener.js` such as.

```js
// Everything inside of this file is going to be local to the scope of this file

const targetButtonClassName = '.fancy-button';
const toggleClassName = '.button-is-active';

function myMainAction() {
  const buttons = searchButtons();
  buttons.forEach( attachEvent );
}

function queryTheDOM() {
  return Array.from( document.querySelectorAll( targetButtonClassName ) ) ;
}

function attachEvent( node ) {
  node.addEventListener( 'click', clickListener );
}

function clickListener() {
  document.body.classList.toggle( toggleClassName );
}

export default myMainAction;
```

As you can see the example has several functions but the one that is exported to the outside world
is only `myMainAction` at this point this JS is not going to be executed unless you explicit espcify
so inside of [`main.js`](main.js) inside of the [`onReady`](main.js#L7) function, eveyrything inside
of this function is going to be executed once the DOM is ready. 

So following the example aboye you need to add this two lines inside of `main.js`

```js
import myMainAction from './atoms/buttons/toggle-button-listener';
// inside of onReady
function onReady() {
  // other functions before
  myMainAction();
}
```

**NOTE** The code is transpiled so can be executed on browsers where `import` or `export` is not
supported yet.

#### External resources

- [How `import` works](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/import).
- [How `export` works](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/export).


### How to use an external package from NPM?.

Inside of your own modules you can import files from `node_modules` you only need to make sure
you added the dependency inside of `package.json`.

And the sintax is pretty similar to `import action from 'package-name';` 

For example to add [`flatpickr`](https://chmln.github.io/flatpickr/) we need to run the following
command in to the terminal: 

```
npm install flatpickr --save-dev 
```

And to usage the package you only need to add: 

```js
import Flatpickr from 'flatpickr';
// Usage example
function init() {
  const node = document.querySelector('.flatpickr');
  const instance = new Flatpickr( node );
}

export default init;
```

