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


<div class="wrapper" id="full-width-page-wrapper">

	<div id="content">



				<main class="site-main" id="main" role="main">

				<noscript>You need to enable JavaScript to run this app.</noscript>

				<div id="root"></div><!-- #root -->

				<script>!function (e) { function t(t) { for (var n, i, l = t[0], a = t[1], p = t[2], c = 0, s = []; c < l.length; c++)i = l[c], Object.prototype.hasOwnProperty.call(o, i) && o[i] && s.push(o[i][0]), o[i] = 0; for (n in a) Object.prototype.hasOwnProperty.call(a, n) && (e[n] = a[n]); for (f && f(t); s.length;)s.shift()(); return u.push.apply(u, p || []), r() } function r() { for (var e, t = 0; t < u.length; t++) { for (var r = u[t], n = !0, l = 1; l < r.length; l++) { var a = r[l]; 0 !== o[a] && (n = !1) } n && (u.splice(t--, 1), e = i(i.s = r[0])) } return e } var n = {}, o = { 1: 0 }, u = []; function i(t) { if (n[t]) return n[t].exports; var r = n[t] = { i: t, l: !1, exports: {} }; return e[t].call(r.exports, r, r.exports, i), r.l = !0, r.exports } i.m = e, i.c = n, i.d = function (e, t, r) { i.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: r }) }, i.r = function (e) { "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 }) }, i.t = function (e, t) { if (1 & t && (e = i(e)), 8 & t) return e; if (4 & t && "object" == typeof e && e && e.__esModule) return e; var r = Object.create(null); if (i.r(r), Object.defineProperty(r, "default", { enumerable: !0, value: e }), 2 & t && "string" != typeof e) for (var n in e) i.d(r, n, function (t) { return e[t] }.bind(null, n)); return r }, i.n = function (e) { var t = e && e.__esModule ? function () { return e.default } : function () { return e }; return i.d(t, "a", t), t }, i.o = function (e, t) { return Object.prototype.hasOwnProperty.call(e, t) }, i.p = "./"; var l = this["webpackJsonp@primitvedigital/shaunknowles"] = this["webpackJsonp@primitvedigital/shaunknowles"] || [], a = l.push.bind(l); l.push = t, l = l.slice(); for (var p = 0; p < l.length; p++)t(l[p]); var f = a; r() }([])</script>
					
					<!-- 
						<script src="/static/js/2.d51db097.chunk.js"></script>
						<script src="/static/js/main.daf1256f.chunk.js"></script>
					-->

				</main><!-- #main -->


	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer();
