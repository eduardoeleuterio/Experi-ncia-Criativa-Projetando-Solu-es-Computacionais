	<div class="w3-top">
		<div class="w3-row w3-white w3-padding">
			<style>
				img{
					height: 40px;
					width: auto;
				}

			</style>
			<div class="w3-half" style="margin:4px 0 6px 0"><a href="."><img src='./Imagens/logo.png' alt=' IE Exemplo '></a>
			</div>
			<div class="w3-half w3-margin-top w3-wide w3-hide-medium w3-hide-small">
				<div class="w3-right">Central de Especialistas</div>
			</div>
		</div>
		<div class="w3-bar w3-theme w3-large" style="z-index:4;">
			<a class="w3-bar-item w3-button w3-left w3-hide-large w3-hover-light-green w3-large w3-theme w3-padding-16" href="javascript:void(0)" onclick="w3_open()">☰</a>
			<!--<a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-light-green w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menufunc')">Funcionarios</a>-->
			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-light-green w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuEsp')">Especialidades</a>
		<!--	<a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-light-green w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuTurma')">TURMAS</a>-->
		</div>
	</div>
  
	<!-- Sidebar -->
	<div class="w3-sidebar w3-bar-block w3-collapse w3-animate-left" style="z-index:3;width:270px" id="mySidebar">
		<div class="w3-bar w3-hide-large w3-large">
			<a href="javascript:void(0)" onclick="w3_show_nav('menufunc')"
			   class="w3-bar-item w3-button w3-theme w3-hover-light-green w3-padding-16" style="width:50%">Funcionarios</a>
			<a href="javascript:void(0)" onclick="w3_show_nav('menuEsp')"
			   class="w3-bar-item w3-button w3-theme w3-hover-light-green w3-padding-16" style="width:50%">Especialidades</a>
		<!--	<a href="javascript:void(0)" onclick="w3_show_nav('menuTurma')"
			   class="w3-bar-item w3-button w3-theme w3-hover-light-green w3-padding-16" style="width:50%">Turma</a> -->
		</div>
		<a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-right w3-xlarge w3-hide-large"
		   title="Close Menu">×</a>
		<div id="menufunc" class="myMenu">
			<div class="w3-container">
				<h3>Funcionarios</h3>
			</div>
			<a class="w3-bar-item w3-button" href="funcListar.php">Relação de Funcionarios</a>
			<a class="w3-bar-item w3-button" href="funcIncluir.php">Cadastro de Novos Funcionarios</a>


		</div>
		<div id="menuEsp" class="myMenu" >
			<div class="w3-container">
				<h3>Especialidades</h3>
			</div>
			<a class="w3-bar-item w3-button" href='EspListar.php'>Relação de Especialidades</a>
			<a class="w3-bar-item w3-button" href='EspIncluir.php'>Criar Nova Especialidade</a>

		</div>
		<div id="menuTurma" class="myMenu" >
			<div class="w3-container">
				<h3>Turmas</h3>
			</div>
			<a class="w3-bar-item w3-button" href='turmaListar.php'>Relação de Turmas</a>
			<a class="w3-bar-item w3-button" href='turmaIncluir.php'>Criar Nova Turma</a>

		</div>
	</div>




