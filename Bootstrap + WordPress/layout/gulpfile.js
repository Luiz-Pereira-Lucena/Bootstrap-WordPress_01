/*var gulp = require('gulp');
var sass = require('gulp-sass');

// Criando uma tarefa que transforma os arquivos de (style e o do bootstrap) em um arquivo css:

// Essa função vai pegar todos os arquivos .css que esta em dois locais e vai CONVERTER em um só arquico .css na pasta do css que esta dentro da pasta src

gulp.task('sass', function(){
    return gulp.src(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'])
    .pipe(sass())
    .pipe(gulp.dest('src/css'));
});



// Essa próxima função tem a finalidade de facilitar, fazendo com que o desemvolvedor não precise tá indo no CMD o tempo todo recolocando o comando toda vez que mudar uma variável usando sass:

gulp.task('watch', function(){
    gulp.src(['node_modules/bootstrap/scss/*.scss' , 'src/scss/*.scss'] , ['sass']);
});

gulp.task('defalt', ['sass', 'watch']);*/


var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', gulp.series( function() {
    return gulp.src(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'])
    .pipe(sass()) // converter o Sass em CSS
    .pipe(gulp.dest('src/css'));
}));

gulp.task('watch', gulp.series( function() {
    gulp.watch(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'], gulp.parallel( ['sass'] ));
}));

gulp.task('default', gulp.series( ['sass', 'watch'] ));
