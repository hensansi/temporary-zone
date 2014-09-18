var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
	autoprefixer = require('gulp-autoprefixer')
	concat = require('gulp-concat');

gulp.task('css', function() {
    /**gulp.src('app/assets/sass/main.scss')**/
    gulp.src('app/assets/sass/*.scss')
        .pipe(sass({ 
        noCache : true,
        style   : "compact"
    }))
    	.pipe(autoprefixer("last 5 version", "> 1%", "ie 8", "ie 7"))
    	.pipe(concat('style.css'))
        .pipe(gulp.dest('public/css'));
});

gulp.task('watch', function() {
    gulp.watch('app/assets/sass/**/*.scss',['css']);
});

gulp.task('default', ['watch']);


