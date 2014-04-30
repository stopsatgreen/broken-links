/*
Huge thanks to this tutorial by Mark Goodyear: http://markgoodyear.com/2014/01/getting-started-with-gulp/
*/

var gulp = require('gulp'),
    cache = require('gulp-cache'),
    imagemin = require('gulp-imagemin'),
    notify = require('gulp-notify'),
    sass = require('gulp-sass');
    
var paths = {
    images: {
        src: 'images/*',
        dest: 'images'
    },
    styles: {
        src: 'sass/style.scss',
        files: 'sass/*.scss',
        dest: ''
    }
}

// Setting up the sass task
gulp.task('sass', function () {
    // Taking the path from the above object
    gulp.src(paths.styles.src)
    // Sass options - make the output compressed and add the source map
    // Also pull the include path from the paths object
    .pipe(sass({
        outputStyle: 'compressed',
        sourceComments: 'map',
        includePaths : [paths.styles.src]
    }))
    // Finally put the compiled sass into a css file
    .pipe(gulp.dest(paths.styles.dest))
});

gulp.task('images', function () {
    return gulp.src(paths.images.src)
    .pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
    .pipe(gulp.dest(paths.images.dest))
    .pipe(notify({
        message: 'Images done',
        onLast: true
    }));
});

gulp.task('default', ['sass','images'], function() { 
    // Watch the files in the paths object, and when there is a change, fun the functions in the array
    gulp.watch(paths.styles.files, ['sass'])
    // Also when there is a change, display what file was changed, only showing the path after the 'sass folder'
    .on('change', function(evt) {
        console.log(
            '[watcher] File ' + evt.path.replace(/.*(?=sass)/,'') + ' was ' + evt.type + ', compiling...'
        );
    });
});