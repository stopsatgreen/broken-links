var gulp = require('gulp');
var sass = require('gulp-sass');
var paths = {
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
    // If there is an error, don't stop compiling but use the custom displayError function
    // .on('error', function(err){
    //     displayError(err);
    // })
    // Pass the compiled sass through the prefixer with defined 
    // .pipe(prefix(
    //     'last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'
    // ))
    // Funally put the compiled sass into a css file
    .pipe(gulp.dest(paths.styles.dest))
});

gulp.task('default', ['sass'], function() { 
    // Watch the files in the paths object, and when there is a change, fun the functions in the array
    gulp.watch(paths.styles.files, ['sass'])
    // Also when there is a change, display what file was changed, only showing the path after the 'sass folder'
    .on('change', function(evt) {
        console.log(
            '[watcher] File ' + evt.path.replace(/.*(?=sass)/,'') + ' was ' + evt.type + ', compiling...'
        );
    });
});