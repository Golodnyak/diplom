var theme = 'awpt';
var themePath = 'wp-content/themes/'+theme;
var domain = 'awpt.avis-studio.com';

const gulp = require('gulp')

const rename = require('gulp-rename')
const autoprefixer = require('gulp-autoprefixer')
const path = require('path')
const root = path.join(__dirname, '')
const src = path.join(root, themePath)
const gulpif = require('gulp-if')
const notify = require("gulp-notify")
const plumber = require("gulp-plumber")
const uglify = require('gulp-uglify')
const shorthand = require('gulp-shorthand')
const sass = require('gulp-sass')(require('sass'));
const group_media_queries  = require('gulp-group-css-media-queries')
const cleanCSS = require('gulp-clean-css')
const server = require('browser-sync').create()
const ftp = require('vinyl-ftp');



const config = {
	root,
	src,
	buildPath: path.join(root, '/' + themePath),
}


function getFtpConnection() {
	return ftp.create({
		host: 'avisstud.ftp.tools',
		user: 'user_name',
		password: 'user_pass',
		parallel: 5,
	});
}


function styles() {
	return gulp.src(themePath+'/scss/*.scss')
		.pipe(sass())
		.pipe(autoprefixer({
			cascade: false
		}))
		.pipe(shorthand())
		.pipe(group_media_queries())
		.pipe(gulp.dest(themePath+'/css'))
		.pipe(server.reload({stream: true}))
}

var blockPaths = [themePath+'/blocks/**/*scss'];

function blockStyles() {
	return gulp.src(blockPaths, {base: "./"})
		.pipe(sass())
		.pipe(autoprefixer({
			cascade: false
		}))
		.pipe(shorthand())
		.pipe(group_media_queries())
		.pipe(gulp.dest("./"))
		.pipe(server.reload({stream: true}))
}



function readyReload(cb) {
	server.reload()
	cb()
}

function serve(cb) {
	server.init({
		proxy: {
			target: domain,
		},
		files: [themePath+'/css/*.css', themePath+'/**/*.php'],
		notify: false,
	})

	gulp.watch(themePath+'/scss/**/*.scss', gulp.series(styles))
	gulp.watch(themePath+'/blocks/**/*.scss', gulp.series(blockStyles))
	gulp.watch(themePath+'/js/**/*.js', gulp.series(readyReload))
	gulp.watch(themePath+'/**/*.php', gulp.series(readyReload))
	return cb()
}


function deploy() {
	const conn = getFtpConnection();
	var globs = [themePath+'/**', 'wp-content/uploads/**'];
	return gulp.src(globs, { base: '.', buffer: false })
		.pipe(conn.newer('/'))
		.pipe(conn.dest('/'));
};



module.exports.start = gulp.series(styles, serve);
module.exports.deploy = gulp.series(deploy)
