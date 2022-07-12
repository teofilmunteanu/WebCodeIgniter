<html>
	<head>
		<title>Nature Collection</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo base_url('/assets/galery/css/main.css');?>" />
                <noscript><link rel="stylesheet" href="<?php echo base_url('/assets/galery/css/noscript.css');?>" /></noscript>
                <link href="<? php echo base_url('/assets/general/mystyles.css');?>" rel="stylesheet" />
	</head>
	<body class="is-preload">
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v14.0" nonce="FzuMjXYX"></script>
            
                
                    <div style="background-color: #5F8F25;z-index: 20000;height:14%; padding: 20px 0px;">
                        <a style="background-color:grey; margin-right:20px;float:right; color:white; padding:10px 15px;" href = "/WebCodeIgniter/logout">Log Out</a>
                        <a style="background-color:grey; margin-right:20px;float:right; color:white; padding:10px 15px;" href = "/WebCodeIgniter/upload">Upload</a>
                    </div>
                
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h2><a href = "/WebCodeIgniter/">Nature Collection</a></h2>
                                                
						<nav>
							<ul>
								<li><a href="#footer" class="icon solid fa-info-circle">About</a></li>
							</ul>
						</nav>
					</header>
                                        
				<!-- Main -->
					<div id="main">
                                            <?php foreach($images as $var){?>
						<article class="thumb">  
                                                    <img src="<?php echo base_url($var['image']);?>" width="100%" height="85%" alt="" />
                                                    <div>
                                                        <button><?php echo anchor(array('ImageController/edit/', $var['id']), 'Edit');?></button>
                                                        <button><?php echo anchor(array('ImageController/delete/', $var['id']), 'Delete', array('onclick' => "return confirm('Do you want to delete this record')"));?></button> 
                                                    </div>
                                                    
						</article>
                                            <?php }?>
					</div>

				<!-- Footer -->
					<footer id="footer" class="panel">
						<div class="inner split">
							<div>
                                                            <section>
                                                                    <h2>Author: Munteanu Teofil</h2>
                                                                    <h2>Email: andreiteofil01@gmail.com</h2>
                                                            </section>
                                                            <section>
                                                                    <div>
                                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10848.673779342269!2d27.5722978!3d47.1741385!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x95f1e37c73c23e74!2sAlexandru%20Ioan%20Cuza%20University%20of%20Ia%C8%99i!5e0!3m2!1sen!2sro!4v1655924747803!5m2!1sen!2sro" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                                    </div>    
                                                            </section>
                                                            <br/>
                                                            <section>
                                                                <div >
                                                                    <h3 class="title">
                                                                    Enjoying Nature Collection? Like and Share: 
                                                                    </h3>
                                                                    <div class="fb-like" style="background-color:white; border-radius: 5px;" data-href="https://examen1php.000webhostapp.com/" data-action="like" data-layout="standard" data-size="small" data-share="true"></div>
                                                                </div>
                                                            </section>
							</div>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
                <script src="<?php echo base_url('/assets/galery/js/jquery.min.js');?>"></script>
                <script src="<?php echo base_url('/assets/galery/js/jquery.poptrox.min.js');?>"></script>
                <script src="<?php echo base_url('/assets/galery/js/browser.min.js');?>"></script>
                <script src="<?php echo base_url('/assets/galery/js/breakpoints.min.js');?>"></script>
                <script src="<?php echo base_url('/assets/galery/js/util.js');?>"></script>
                <script src="<?php echo base_url('/assets/galery/js/main.js');?>"></script>

	</body>
</html>