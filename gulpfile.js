var gulp = require('gulp');
var sass = require('gulp-sass');							//Sass
var autoprefixer = require("gulp-autoprefixer");		//ベンダープリフィックス
var uglify = require("gulp-uglify");								//JSの圧縮 
var browser = require("browser-sync");							//自動更新
var plumber = require("gulp-plumber");							//監視の継続
 
gulp.task("server", function() {
    browser({
        server: {
            baseDir: "./"
        }
    });
});

gulp.task('html', function () {
  gulp.src('./*.html')
    .pipe(browser.reload({stream:true}))
});

gulp.task('sass',function(){
  gulp.src('scss/**/*.scss')
		.pipe(plumber())
    .pipe(sass({style : 'expanded'})) //出力形式の種類　#nested, compact, compressed, expanded.
   	.pipe(autoprefixer())
	  .pipe(gulp.dest('./'))       //cssの出力先ディレクトリ
		.pipe(browser.reload({stream:true}))
}); 
 
gulp.task("js", function() {
    gulp.src(["js/**/*.js","!js/min/**/*.js"])
				.pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest("./js/min"))
				.pipe(browser.reload({stream:true}))
});

gulp.task('default', ['server'] ,function() {
    gulp.watch(["js/**/*.js","!js/min/**/*.js"],["js"]);
    gulp.watch("scss/**/*.scss",["sass"]);
		gulp.watch("./*.html",["html"]);
});

