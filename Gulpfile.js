var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
	autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function() {
    /**gulp.src('app/assets/sass/main.scss')**/
      return gulp.src('app/assets/sass/*.scss')

        .pipe(sass({ style: 'expanded' }))
    	.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
        .pipe(gulp.dest('public/css'));
});

gulp.task('watch', function() {
    gulp.watch('app/assets/sass/**/*.scss',['css']);
});

gulp.task('default', ['watch']);


