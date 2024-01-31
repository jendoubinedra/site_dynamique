
<link rel="stylesheet" type="text/css" href="" >
<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li> <a href="index.html"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						<li class="list-divider"></li>

						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('pages.store')}}"> Ajouter page  </a></li>
                                <li><a href="{{route('listeP.index')}}"> liste des pages </a></li>

							</ul>
						</li>

						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> links </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
                                <li><a href="{{route("links.store")}}"> add link  </a></li>
                                <li><a href="">  </a></li>

							</ul>
						</li>
                        <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Participation </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href=""></a></li>
                                <li><a href="">  </a></li>
                                <li><a href="">  </a></li>

							</ul>
						</li>


				</div>
			</div>
		</div>
