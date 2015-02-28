<?php /* Template Name: Contato */
?>
<?php get_header(); ?>
<!-- Games Page Starts here -->
<div class="games">
	<div class="container">
		<div class="page-path">
			<ul class="path-list">
				<li><a href="index.php">Home</a></li>&nbsp;&nbsp;/&nbsp;&nbsp;
				<li class="act">Contato</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="contact">
			<h3 class="page-header">Contate-nos!</h3>
			<div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.9673524081554!2d-49.26884000000001!3d-25.43935499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce46f463ac93f%3A0xf3a719e535226419!2sFederal+University+of+Technology+-+Paran%C3%A1!5e0!3m2!1sen!2sbr!4v1424828587883" width="400" height="300" frameborder="0" style="border:0"></iframe>
			</div>
			<div class="contact-box">
				<div class="text">
					<input type="text" placeholder="Nome" required="" />
					<input type="text" placeholder="Assunto" required=""/>
					<input type="text" placeholder="Email" required=""/>
				</div>
				<div class="text">
					<textarea placeholder="Mensagem" required=""></textarea>
				</div>
				<div class="text-but">
					<input type="submit" value="enviar" />
				</div>
			</div>
			<div class="address-box">
				<h3 class="page-header">Endereço</h3>
				<h4>It is a long established fact that a reader will be distracted</h4>
				<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
				<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,that it has a more-or-less normal distribution as opposed to using 'Content here, content here',</p>
				<a href="mailto:example@email.com">123example@email.com</a>
				<p>+001 111 9999 99</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- Footer Starts Here -->
<?php get_footer(); ?>