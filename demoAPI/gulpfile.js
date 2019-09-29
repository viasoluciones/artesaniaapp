var pug 		= require('gulp-pug');
var stylus 	= require('gulp-stylus');
var gulp 		= require('gulp');
var nib 		= require('nib');
var concat	= require('gulp-concat');
var browserSync	= require('browser-sync').create();


gulp.task('dev', function(){
	browserSync.init({
		server: '../artesanias.app/demoAPI/public',
		port: 9000
	});

	gulp.watch("src/templates/*.pug", compilarPug);
	gulp.watch("src/stylus/*.styl", compilarStylus);
});


function compilarPug(){
	return gulp
					.src('src/templates/*.pug')
					.pipe(pug())
					.pipe(pug({pretty:true}))
					.pipe(gulp.dest('public'))
					.pipe(browserSync.stream())
}

function compilarStylus(){
	return gulp.src('src/stylus/*.styl')
				 .pipe(stylus({ use: nib(), compress: true }))
				 .pipe(gulp.dest('public/css'))
				 .pipe(browserSync.stream())
}
