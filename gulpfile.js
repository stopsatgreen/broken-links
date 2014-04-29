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
    // Finally put the compiled sass into a css file
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