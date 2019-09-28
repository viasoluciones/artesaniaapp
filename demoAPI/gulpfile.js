var pug 		= require('gulp-pug');
var stylus 	= require('gulp-stylus');
var gulp 		= require('gulp');
var nib 		= require('nib');
var concat	= require('gulp-concat');
var browserSync	= require('browser-sync').create();


gulp.task('dev', function(){
	browserSync.init({
		server: '../aptitudemprendedora/public',
		port: 7000
	});

	gulp.watch("src/templates/*.pug", compilarPug);
	gulp.watch("src/stylus/*.styl", compilarStylus);
	//gulp.watch(['src/js/jquery.js', 'src/js/materialize.min.js','src/js/app.js', 'src/js/home.js'],['homeJS']);
});


function compilarPug(){
	return gulp
					.src('src/templates/*.pug')
					//.pipe(pug())
					.pipe(pug({pretty:true}))
					.pipe(gulp.dest('public'))
					.pipe(browserSync.stream())
}

function compilarStylus(){
	return gulp.src('src/stylus/*.styl')
				 //.pipe(stylus({ use: nib(), compress: true }))
				 .pipe(stylus({ use: nib()}))
				 .pipe(gulp.dest('public/css'))
				 .pipe(browserSync.stream())
}

gulp.task('homeJS', function(){
	return gulp.src(['src/js/jquery.js', 'src/js/materialize.min.js','src/js/app.js', 'src/js/home.js'])
				.pipe(concat('h-all.js'))
				.pipe(gulp.dest('public/js/'))
				.pipe(browserSync.stream());
})

function nosostrosJS(){
	return gulp.src(['src/js/jquery.js', 'src/js/materialize.min.js','src/js/app.js', 'src/js/nosotros.js'])
				.pipe(concat('n-all.js'))
				.pipe(gulp.dest('public/js/'))
				.pipe(browserSync.stream());
}
function meetupsJS(){
	return gulp.src(['src/js/jquery.js', 'src/js/materialize.min.js','src/js/app.js', 'src/js/meetups.js'])
				.pipe(concat('m-all.js'))
				.pipe(gulp.dest('public/js/'))
				.pipe(browserSync.stream());
}
function ponentesJS(){
	return gulp.src(['src/js/jquery.js', 'src/js/materialize.min.js', 'src/js/ponentes.js'])
				.pipe(concat('p-all.js'))
				.pipe(gulp.dest('public/js/'))
				.pipe(browserSync.stream());
}

function comunidadesJS(){
	return gulp.src(['src/js/jquery.js', 'src/js/materialize.min.js','src/js/app.js', 'src/js/comunidades.js'])
				.pipe(concat('c-all.js'))
				.pipe(gulp.dest('public/js/'))
				.pipe(browserSync.stream());
}
