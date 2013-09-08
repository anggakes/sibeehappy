<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html>
    <head>
        <title>Bee Happy :)</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css" type="text/css" media="screen" title="default" />

    </head>
    <body>
<!-- always on top-->
<div id='menufloat'>
    <div id='fixedfloat'>
  
	<div id='search'><input type='text' class='search'> <img src='<?php echo base_url()."asset/css/search.png"; ?>' style='width:36px ; height:30px;float:left;margin:0px;'/></div>
	<div id='logout'><a href=#> logout </a></div>

	</div>
    </div>
<!-- always on top-->

<!-- always on bottom-->
<div id='logo'>
    <div id='fixedlogo'>

	</div>
    </div>
<!-- always on bottom-->


	<div id='header-container'>
	<?php echo $quotes;?>
	</div>
	
	<div id='menu-header'>
	 <div id='cssmenu'>
    <ul>
       <li class='active'><a href='index.html'>Home</a></li>
       <li><a href='#'>sss</a>  </li>
       <li><a href='#'>Log File</a></li>
       <li><a href='#'>Setting</a></li>
    </ul>
    </div>
	</div>
	</div>
	
	<div id='container'>
	<div id='left'>
	<h1>Data Master</h1>
	<ul>
	<li> Jenis Kelas </li>
	<li> menu 1</li>
	<li> menu 1</li>
	<li> menu 1</li>
	</ul>
	<br>
	<h1> Laporan </h1>
	<ul>
	<li> Jenis Kelas </li>
	<li> menu 1</li>
	<li> menu 1</li>
	<li> menu 1</li>
	</ul>
	</div>
	<div id='content'>
	<?php echo $content;?>
	</div>
	
	<div id='clear'></div>
	</div>
	<div id='clear'></div>
	<div id='footer'>Copyright @ Sistem Informasi UNSRI<br>
	2013
	
	</div>
	
	
 
	</body>
</html>