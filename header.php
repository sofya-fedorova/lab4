<?php
function header_site(){
	 if (!$_SESSION['logged']) {  echo"
			<div class='nav'>
				
					<a href='index.php'>
          <img src='img/logo.png' class='logo'>
          </a>
					<img src='img/loc.png' class = 'loc'>
					<p class = 'city'>Липецк </p>
				
					<ul class = 'menu'>
						
						<li><a href='index2.php'>
								Разместить объявление
							</a>
						</li>			
						<li>
							<button type='button' id = 'Button_Reg'>Регистрация</button>
						</li>	
						<li>
							<button type='button' id ='Button_Enter'>Вход</button>
						</li>			
					</ul>
				
					<button class='menu-open'>
              <img src='img/menu.svg'>
          </button>
			 </div>";} 
else {	echo "
					<div class='nav'>
				
					<a href='index.php'>
          <img src='img/logo.png' class='logo'>
          </a>
					<img src='img/loc.png' class = 'loc'>
					<p class = 'city'>Липецк </p>
				
					<ul class = 'menu'>
						
						<li><a href='index2.php'>
								Разместить объявление
							</a>
						</li>	
						<li><a href='index3.php'>
								Личный кабинет
							</a>
						</li>	
						<li>
						<form method = 'POST'>
							<button type='submit' name = 'but_exit' value = 'exit' id = 'Button_Exit'>Выход</button>
						</form>
						</li>		
					</ul>
				
					<button class='menu-open'>
              <img src='img/menu.svg'>
          </button>
			 </div>"; }
}