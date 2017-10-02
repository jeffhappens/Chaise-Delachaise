var gulp = require('gulp');
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
var minifycss = require('gulp-clean-css');



gulp.task('sass', function () {
	gulp.src(['resources/assets/sass/*.scss'])
	.pipe(sass({
		includePaths: ['resources/assets/sass'],
		outputStyle: 'expanded'
	}))
	.pipe(prefix(
		"last 1 version", "> 1%", "ie 8", "ie 7"
	))
	//.pipe(gulp.dest('resources/assets/css'))
	.pipe(minifycss())
	.pipe(gulp.dest('public/css'));
});

// Uglify JS
gulp.task('uglify', function() {
	gulp.src('resources/assets/js/**/*.js')
	//.pipe(uglify())
	.pipe(gulp.dest('public/js'));
});





gulp.task('default', function() {
	// watch me getting Sassy
	gulp.watch("resources/assets/sass/**/*.scss",['sass']);
	// make my JavaScript ugly
	gulp.watch("resources/assets/js/**/*.js", ['uglify']);
});