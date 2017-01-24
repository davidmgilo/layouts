<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<style>
	
.wrapper {
	display: flex;
	flex-flow: row wrap;
}

header, nav, section, aside, footer {
	border: 1px black solid;
}

header {
	flex: 1 100%;
	background: yellowgreen;
}

footer {
	flex: 1 100%;
	background: tomato;
}

nav, aside {
	flex: 1 auto;
	background: lightblue;
}

.content {
	flex: 1 70%;
	background: grey;
}

@media all and (min-width: 600px) {
	.content {
		order: 1;
	}

	header {
		order: 2;
	}

	nav {
		order: 3;
	}

	aside {
		order: 4;
	}

	footer {
		order: 5;
	}
}

</style>

<body>

<div class="wrapper">
	<header>HEADER HERE</header>
	<nav>
		<ul>
			<li>Lorem.</li>
			<li>Ea.</li>
			<li>Aperiam.</li>
			<li>Doloremque.</li>
			<li>Facilis.</li>
		</ul>
	</nav>
	<section class="content">
		TODO
	</section>

	<aside>
		Aquí barra lateral
	</aside>

	<footer>Copyright bla bla bla</footer>
</div>

</body>
</html>
