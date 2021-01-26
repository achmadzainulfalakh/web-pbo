<? defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	.text {
		fill: none;
		stroke-width: 7;
		stroke-linejoin: round;
		stroke-dasharray: 70 330;
		stroke-dashoffset: 0;
		animation: stroke 6s infinite linear;
	}
	.text:nth-child(5n + 1) {
		stroke: #007bff;
		animation-delay: -1.2s;
	}
	.text:nth-child(5n + 2) {
		stroke: #6610f2;
		animation-delay: -2.4s;
	}
	.text:nth-child(5n + 3) {
		stroke: #dc3545;
		animation-delay: -3.6s;
	}
	.text:nth-child(5n + 4) {
		stroke: #fd7e14;
		animation-delay: -4.8s;
	}
	.text:nth-child(5n + 5) {
		stroke: #28a745;
		animation-delay: -6s;
	}
	@keyframes stroke {
		100% {
			stroke-dashoffset: -400;
		}
	}
	body {
		font: 11.5em/1 Open Sans, Arial, Tahoma;
		background: #ccc;
		text-transform: uppercase;
		margin: 0;
	}
	svg {
		position: fixed;
		width: 100%;
		height: 100%;
	}
	*:selected{color: black;}
	</style>
	<title>PAGE NOT FOUND</title>
</head>
<body>
	<svg viewBox="0 0 2000 600">
		<symbol id="s-text">
			<text text-anchor="middle" x="50%" y="50%" dy=".35em">&lt;/ ERROR 404 &gt;</text>
		</symbol>  
		<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#s-text" class="text"></use>
		<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#s-text" class="text"></use>
		<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#s-text" class="text"></use>
		<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#s-text" class="text"></use>
		<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#s-text" class="text"></use>
	</svg>
</body>
</html>
