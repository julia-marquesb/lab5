<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Home | COMP1002 HTML, CSS, and JS Fundamentals</title>
		<meta name="author" content="The name of the document’s author to go here" />
		<meta name="description" content="A concise and accurate summary of the document content is to appear here">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body>
		<!-- Page-level header -->
		<header>
			<!-- STEP 6: Add an IMG element just before the H1 element below, and point the src attribute to the SVG file called "html-logo.svg" inside the 'images' directory - then have a look at the resulting page in a browser -->
			<img src="images/html-logo.svg" alt="HTML Logo" width="100" height="100" />
			<h1>HTML, CSS, and JS Fundamentals</h1>
			<h2>Building Blocks for Web Developers</h2>
		</header>
		<!-- Page-level main content -->
		<main>
			<!-- News Section -->
			<section>
				<h3>Building Blocks In The News</h3>
				<!-- First Article -->
				<article>
					<h4>Latest Research Reveals Building Blocks are Cool</h4>
					<p>by Blocky Blockhead<br /><time datetime="2018-03-29">March 29, 2018</time></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing. Platea dictumst vestibulum rhoncus est pellentesque. Read more…</p>
				</article>
				<!-- Second Article -->
				<article>
					<h4>Building Blocks Aren’t Just For Kids</h4>
					<p>by Rectangle Square<br /><time datetime="2017-06-17">June 17, 2017</time></p>
					<p>Amet risus nullam eget felis eget nunc lobortis. Eget arcu dictum varius duis at consectetur lorem donec. Arcu felis bibendum ut tristique et egestas quis. Turpis tincidunt id aliquet risus feugiat in ante metus. Read more…</p>
				</article>
				<!-- Third Article -->
				<article>
					<h4>Investors Bet Big on Building Block Products</h4>
					<p>by Right Angle<br /><time datetime="2018-02-15">February 15, 2018</time></p>
					<p>At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Arcu cursus euismod quis viverra nibh cras. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Aenean sed adipiscing diam donec adipiscing. Read more…</p>
				</article>
			</section>
			<!-- Side Notes / Related Information -->
			<aside>
				<!-- Newsletter Subscribe Form -->
				<h3>Subscribe to Newsletter</h3>
				<form action="subscribe.php" method="get">
					<label for="emailAddress">Email</label>
					<input type="email" name="emailAddress" id="emailAddress" required />
					<button type="submit">Subscribe</button>
				</form>
				<h3>Did You Know…?</h3>
				<p>One of the most important components of effective life-long learning is <em>play</em>. Learning a new skill (like Web development) should include a certain amount of play. Renowned children’s programming entertainer Mr. Rogers certainly knew about the value that play represented:</p>
				<!-- Quotation -->
				<blockquote cite="https://www.brainyquote.com/quotes/fred_rogers_193081">
					<p>Play is often talked about as if it were a relief from serious learning. But for children, play <em>is</em> serious learning. Play is really the work of childhood. –Fred Rogers</p>
				</blockquote>
				<p>Take a little time every day to just <strong>play</strong> with technology – you’ll be surprised how much you learn.</p>
				<!-- STEP 4: Surround the IMG element below with a pair of FIGURE tags -->
				<figure>
					<!-- STEP 1: Insert an IMG element with the src attribute pointing to the image called "mini-figure" in the 'images' directory -->
					<img src="images/mini-figure.png" alt="Mini figure" width="100" height="150" />
					<!-- STEP 5: Add a FIGCAPTION element below (but before you close the FIGURE element), and add the caption, "Mini figure by Vanja (Public Domain)" -->
					<figcaption>Mini figure by Vanja (Public Domain)</figcaption>
				</figure>
			</aside>
			<!-- Mini figure by Vanja (Public Domain) https://openclipart.org/detail/224315/clip-is-a-brick-minifig-4 -->
		</main>
		<!-- Page-level footer -->
		<footer>
			<p><small>© HTML, CSS, and JS Blocks Inc.</small></p>
		</footer>
	</body>
</html>