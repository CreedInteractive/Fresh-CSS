var gulp = require('gulp'),
    autoprefixer = require('autoprefixer')
    bower = require('gulp-bower')
    bowerNormalizer = require('gulp-bower-normalize')
    livereload = require('gulp-livereload')
    notify = require("gulp-notify")
    rename = require("gulp-rename")
    cleanCSS = require("gulp-clean-css")
    postcss = require('gulp-postcss')
    sass = require('gulp-ruby-sass')
    sourcemaps = require('gulp-sourcemaps');

// Set minifier to false to keep Sass sourcemaps support
var postcssOptions = {
    optimizers: {
        "autoprefixer": true,
        "minifier": true
    }
};

var config = {
     sassPath: 'sass',
     bowerDir: 'bower_components'
}

gulp.task('bower', function() {
    return bower()
         .pipe(gulp.dest(config.bowerDir)) 
});

// Run sass compiler with Pleeease post compiler
gulp.task('sass', function() {
    return sass('scss/*.scss', {
      sourcemap: true,
      style: "nested",
            loadPath: [
               'sass',
                config.bowerDir + '/normalize-scss/sass',
                config.bowerDir + '/support-for/sass',
                config.bowerDir + '/font-awesome/scss',
                config.bowerDir + '/bootstrap/scss',
            ]
   })
    .on("error", notify.onError(function (error) {
        return "Error: " + error.message;
     }))

    .pipe(postcss([ autoprefixer({ browsers: ['last 2 versions'] }) ]))
    .pipe(bowerNormalizer({bowerJson: './bower.json'}))
    .pipe(sourcemaps.init())
    .pipe(cleanCSS())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('assets'))
    .pipe(livereload());
});

gulp.task('sass_prod', function() { 
    return sass('scss/*.scss', {
      sourcemap: false,
      style: "compressed",
            loadPath: [
                'sass',
               config.bowerDir + '/normalize-scss/sass',
               config.bowerDir + '/support-for/sass'
            ]
     })
    .on("error", notify.onError(function (error) {
         return "Error: " + error.message;
    }))
    .pipe(postcss([ autoprefixer({ browsers: ['last 2 versions'] }) ]))
    .pipe(gulp.dest('assets')); 
});


// Watch Files For Changes
gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('scss/**/*.scss', ['sass']);
});

// Build Tasks
gulp.task('default', ['sass', 'bower', 'watch']);
gulp.task('prod', ['sass_prod']);
