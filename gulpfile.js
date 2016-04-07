//****************************************************************************//
//* Autor:     Facundo Fernandez
//* Fecha:     03/04/2015
//  Funciones: Minificado,saas,less,imagenes,es6
//****************************************************************************//
var gulp = require('gulp'),
    less = require('gulp-less'),
    uglify = require('gulp-uglify'),
    connect = require('gulp-connect'),
    uglifycss = require('gulp-uglifycss'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer');

    gulp.task('sass', function () {
      return gulp.src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe( autoprefixer( 'last 2 version' ) )
        .pipe(uglifycss({
          "maxLineLen": 80,
          "uglyComments": true
        }))
        .pipe(gulp.dest('./app/dist/css'))

        .pipe(connect.reload());
    });
    gulp.task('js', function () {
      return gulp.src('./js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('./app/dist/js'))
        .pipe(connect.reload());
    });


gulp.task('connect', function() {
    connect.server({
        root: 'app',
        livereload: true
    });
});

gulp.task('watch', function() {

  gulp.watch('app/*.html',function(){
    console.log('Se modifico html');
    gulp.src('./app/*.html')
      .pipe(connect.reload());
  });

  gulp.watch('./js/*.js',['js']);
  gulp.watch('./sass/**/*.scss',['sass']);
});

gulp.task('default',['connect','watch'])
