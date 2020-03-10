'use strict';

// Load dependencies.
const gulp = require('gulp');
const sourcemaps = require('gulp-sourcemaps');
const gutil = require('gulp-util');
const webpack = require('webpack');
const webpackStream = require('webpack-stream');
// Execute gulp commands in sequence, one after the the other.
const runSequence = require('run-sequence');
const eslint = require( 'gulp-eslint');
const path = require('path');

gulp.task( 'build', [ 'js:build' ] );
gulp.task( 'build:dev', [ 'js:dev' ] );
// Linter tasks
gulp.task( 'lint', [ 'js:lint' ] );
// JS Tasks
gulp.task( 'js', js );
gulp.task( 'js:dev', js );
gulp.task( 'js:build', jsBuild );
gulp.task( 'js:watch', jsWatch );
gulp.task( 'js:lint', jsLint );
gulp.task( 'watch', [ 'js:watch' ] );

// General Configurations
// Directory where JS is placed.
const jsDirectory = [ 'scripts' ];
// Browser where prefixers required to be added.
const supportedBrowsers = ['Explorer >= 11', 'iOS >= 7', 'Safari >= 9'];
// Where the sass files are located, used to watch changes on these directories.
const sourceMapsDirectories = './../maps';
const loaders = [{
  test: /\.js$/,
  exclude: /node_modules/,
  loader: 'babel-loader',
  query: {
    presets: ['es2015']
  },
}];

/**
 * Function used to lint on the JS files, using the rules specified on
 * .eslintrc.json.
 */
function jsLint() {
  const jsFiles = [
    './main.js',
    './{' + jsDirectory.join( ',' ) + '}/**/*.js',
  ];
  return gulp.src( jsFiles )
    .pipe( eslint() )
    .pipe( eslint.format() )
    .pipe( eslint.failAfterError() );
}

const webpackConfig = require('./webpack.config.js');
const jsEntryFile = './main.js';

/**
 * Function used to create the JS to be used on specifc pages, by default
 * creates a source map associated with each JS file to make easier to debug.
 */
function js() {
  let options = Object.assign(webpackConfig, { devtool: 'source-map' });
  return jsTask( options );
}

/**
 * Watches the changes of the JS and creates a single file with source maps,
 * the genreated JS is on dev mode.
 */
function jsWatch() {
  let options = Object.assign( webpackConfig, {
    devtool: 'source-map',
    watch: true,
    module: {
      loaders,
    }
  });
  return jsTask( options );
}

/**
 * Function that creates a Build file, in this case it creates a minifed version
 * of the generated JS useful for production purposes.
 */
function jsBuild() {
  let plugins = [
    new webpack.optimize.UglifyJsPlugin({
      compress: {
        warnings: false
      }
    })
  ];
  let options = Object.assign( webpackConfig, {
    plugins,
    module: {
      loaders,
    }
  });
  return jsTask( options );
}

/**
 * Function used to run webpack with a set of custom options based on the task
 * being executed.
 *
 * @param object options The options to be used to run webpack, by default uses webpack.config.js.
 * @return stream Returns a gulp task to be used.
 */
function jsTask( options ) {
  return gulp.src( jsEntryFile )
    .pipe( webpackStream( options ) )
    .pipe( gulp.dest( './static/js' ) );
}

/*
 * Function used to log data to the console via gutil function
 */
const log = {
  success(msg) {
    gutil.log( gutil.colors.green( msg ) );
  }
}
