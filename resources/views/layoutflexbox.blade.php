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
		<header>Content header here</header>
		<section>Subsecció 1</section>
		<section>Subsecció 2</section>
		<section>Subsecció 3</section>
	</section>

	<aside>
		Aquí barra lateral
	</aside>

	<footer>Copyright bla bla bla</footer>
</div>

</body>
</html>
