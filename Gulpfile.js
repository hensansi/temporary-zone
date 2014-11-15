var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
	autoprefixer = require('gulp-autoprefixer')
	concat = require('gulp-concat');

gulp.task('core', function() {
    /**gulp.src('app/assets/sass/main.scss')**/
    gulp.src('app/assets/sass/core.scss')
        .pipe(sass({ 
        noCache : true,
        style   : "compact"
    }))
    	.pipe(autoprefixer("last 5 version", "> 1%", "ie 8", "ie 7"))
    	.pipe(concat('core.css'))
        .pipe(gulp.dest('public/css'));

});


gulp.task('enhanced', function() {
    /**gulp.src('app/assets/sass/main.scss')**/
    gulp.src('app/assets/sass/enhanced/*.scss')
        .pipe(sass({ 
        noCache : true,
        style   : "compact"
    }))
        .pipe(autoprefixer("last 5 version", "> 1%", "ie 8", "ie 7"))
        .pipe(concat('enhanced.css'))
        .pipe(gulp.dest('public/css'));

});


gulp.task('watch', function() {
    gulp.watch('app/assets/sass/*.scss',['core']);
});

gulp.task('watch_', function() {
    gulp.watch('app/assets/sass/enhanced/*.scss',['enhanced']);
});


gulp.task('default', ['watch','watch_']);


