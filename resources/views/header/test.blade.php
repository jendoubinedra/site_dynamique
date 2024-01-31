<style>
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway&family=Poppins&display=swap");

@import url("https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.10/css/superfish.css");

html,
body {
	margin: 0;
	height: 100%;
	background: url("https://images.unsplash.com/photo-1450778869180-41d0601e046e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D") top right no-repeat;
	background-attachment: fixed;
	background-size: cover;
}

/* Navbar */
nav {
	font-family: "Raleway", sans-serif;
	font-size: 1.75rem;
}

.sf-menu, .sf-menu * {
	margin: 3px;
	& a {
		border-left: 3px transparent;
		border-top: 3px transparent;
		padding: 0.35em 0.25em;
		color: #fff;
	}
	&	li {
		/* border: 1px solid #000; */
		min-width: 200px;
		border-radius: 4px;
		text-shadow: #000 1px 1px 3px;
		background: #2280;
		font-weight: 600;
	}
	&	li:hover {
		background: #66Ac;
		box-shadow: #ff8c 1px 1px 6px;
		animation: menuPop 0.2s linear;
	}
	& li li {
		background: #228c;
	}
	& li li li {
		background: #228c;
	}
	& li li li li {
		background: #228c;
	}
}

@keyframes shake {
  0% { transform: rotate(0deg); }
  25% { transform: rotate(5deg); }
  50% { transform: rotate(0eg); }
  75% { transform: rotate(-5deg); }
  100% { transform: rotate(0deg); }
}

@keyframes menuPop {
	0% {
		transform: translateY(3px) rotateY(30deg);
		opacity: 0.5;
	}
	100% {
		transform: translateY(0px) rotateY(0deg);
		opacity: 1;
	}
}
</style>
<header>
	<nav>
		<ul class="sf-menu navigation-menu">
			<li><a href="#">Home</a></li>
			<li><a href="#">Products</a>
				<ul>
					<li><a href="#">Dog Supplies</a>
						<ul>
							<li><a href="#">Food & Treats</a></li>
							<li><a href="#">Toys</a></li>
							<li><a href="#">Beds & Furniture</a></li>
							<li><a href="#">Outdoor Supplies</a></li>
							<li><a href="#">Clothing</a></li>
						</ul>
					</li>

					<li><a href="#">Cat Supplies</a>
						<ul>
							<li><a href="#">Food & Treats</a></li>
							<li><a href="#">Toys</a></li>
							<li><a href="#">Beds & Furniture</a></li>
						</ul>
					</li>

					<li><a href="#">Bird Supplies</a>
						<ul>
							<li><a href="#">Food & Treats</a></li>
							<li><a href="#">Toys</a></li>
							<li><a href="#">Furniture</a></li>
						</ul>
					</li>
					<li><a href="#">Fish Supplies</a>
						<ul>
							<li><a href="#">Food</a></li>
							<li><a href="#">Aquariums</a></li>
							<li><a href="#">Rocks & Decorations</a></li>
						</ul>
					</li>
				</ul>
			</li>

			<li><a href="#">Services</a>
				<ul>
					<li><a href="#">Grooming</a>
						<ul>
							<li><a href="#">Coat Care</a></li>
							<li><a href="#">Nail Care</a></li>
							<li><a href="#">Doggie Deluxe Spa Day</a></li>
						</ul>
					</li>
					<li><a href="#">Boarding</a>
						<ul>
							<li><a href="#">Short Term Boarding</a></li>
							<li><a href="#">Doggie Daycare</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="#">Locations & Hours</a>
				<ul>
					<li><a href="#">North America</a></li>
					<li><a href="#">Europe</a></li>
				</ul>
			</li>
			<li>
				<a href="#">About Us</a>
				<ul>
					<li><a href="#">Our Team</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</li>
		</ul>
	</nav>
    
</header>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.10.0/jquery.hoverIntent.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.10/js/superfish.min.js">


jQuery(document).ready(function () {
	jQuery("ul.sf-menu").superfish({});
});

</script>
