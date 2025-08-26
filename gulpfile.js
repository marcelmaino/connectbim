const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');


// Compilando o sass, adicionando autoprefixed e dando refresh na pagina
function compilaSass() {
  return gulp.src('public/assets-site/scss/*.scss')
  .pipe(sass({outputStyle: 'compressed'}))
  .pipe(autoprefixer({
    overrideBrowserslist: ['last 2 versions'],
    cascade: false,
  }))
  .pipe(gulp.dest('public/assets-site/css/'))
}
// tarefa do sass
gulp.task('sass', compilaSass);

function pluginsCSS() {
  return gulp.src('public/assets-site/css/lib/*.css')
  .pipe(concat('plugins.css'))
  .pipe(gulp.dest('public/assets-site/css/'))
}

gulp.task('plugincss', pluginsCSS);

function gulpJs() {
  return gulp.src('public/assets-site/js/scripts/*.js')
  .pipe(concat('all.js'))
  .pipe(babel({
      presets: ['@babel/env']
  }))
  .pipe(uglify())
  .pipe(gulp.dest('public/assets-site/js/'))
}
gulp.task('alljs', gulpJs);

function pluginsJs() {
  return gulp
  .src(['./public/assets-site/js/lib/accordion.min.js', './public/assets-site/js/lib/aos.min.js', './public/assets-site/js/lib/gsap.min.js'])
  .pipe(concat('plugins.js'))
  .pipe(gulp.dest('public/assets-site/js/'))
}

gulp.task('pluginjs', pluginsJs);

//funcao do watch para alteracoes em scss e html
function watch() {
  gulp.watch('public/assets-site/scss/*.scss', compilaSass);

  gulp.watch('public/assets-site/css/lib/*.css', pluginsCSS);

  gulp.watch('public/assets-site/js/scripts/*js', gulpJs);

  // gulp.watch('public/assets-site/js/lib/*.js', pluginsJs);
}
//tarefa do watch
gulp.task('watch', watch);

// tarefas default que executa o watch
gulp.task('default', gulp.parallel('watch', 'sass', 'plugincss', 'alljs'));
