<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="full-width-page-wrapper">

	<div id="content">

				<main class="site-main" id="main" role="main">

				<noscript>You need to enable JavaScript to run this app.</noscript>

				<div id="root"></div><!-- #root -->

				<script>!function (e) { function t(t) { for (var n, l, u = t[0], a = t[1], p = t[2], c = 0, s = []; c < u.length; c++)l = u[c], Object.prototype.hasOwnProperty.call(o, l) && o[l] && s.push(o[l][0]), o[l] = 0; for (n in a) Object.prototype.hasOwnProperty.call(a, n) && (e[n] = a[n]); for (f && f(t); s.length;)s.shift()(); return i.push.apply(i, p || []), r() } function r() { for (var e, t = 0; t < i.length; t++) { for (var r = i[t], n = !0, u = 1; u < r.length; u++) { var a = r[u]; 0 !== o[a] && (n = !1) } n && (i.splice(t--, 1), e = l(l.s = r[0])) } return e } var n = {}, o = { 1: 0 }, i = []; function l(t) { if (n[t]) return n[t].exports; var r = n[t] = { i: t, l: !1, exports: {} }; return e[t].call(r.exports, r, r.exports, l), r.l = !0, r.exports } l.m = e, l.c = n, l.d = function (e, t, r) { l.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: r }) }, l.r = function (e) { "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 }) }, l.t = function (e, t) { if (1 & t && (e = l(e)), 8 & t) return e; if (4 & t && "object" == typeof e && e && e.__esModule) return e; var r = Object.create(null); if (l.r(r), Object.defineProperty(r, "default", { enumerable: !0, value: e }), 2 & t && "string" != typeof e) for (var n in e) l.d(r, n, function (t) { return e[t] }.bind(null, n)); return r }, l.n = function (e) { var t = e && e.__esModule ? function () { return e.default } : function () { return e }; return l.d(t, "a", t), t }, l.o = function (e, t) { return Object.prototype.hasOwnProperty.call(e, t) }, l.p = "./"; var u = this["webpackJsonp@primitvedigital/minelli"] = this["webpackJsonp@primitvedigital/minelli"] || [], a = u.push.bind(u); u.push = t, u = u.slice(); for (var p = 0; p < u.length; p++)t(u[p]); var f = a; r() }([])</script>
					
					<!-- 
						<script src="/static/js/2.d51db097.chunk.js"></script>
						<script src="/static/js/main.daf1256f.chunk.js"></script>
					-->

				</main><!-- #main -->


	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer();
