<!-- <footer class="container-fluid footer">
	<!- - <div class="row bg-grey" style="height: 15px;"></div> - ->
	<div class="footer-content">
		<div class="row">
			<div class="col-md-12">
				<!- - <img class="img-footer float-right" src="<?php echo base_url();?>/assets/img/gary_logo_1.png"> - ->
				<img class="img-fluid float-right
				" src="<?php echo base_url('assets/images/company_logo.png');?>" style="height: 100px; background-color: #FFF; border-radius: 5px;">
				<div class="row">
					<div class="col-sm-2">
						<h6 class="text-light">Copyright &copy; 2018 International Christian Academy</h6>
					</div>
					<div class="col-sm-4">
						<h6 class="text-light">About Us</h6>
						<p class="text-light">Entrance Examination - International Christian Academy</p>
					</div>
					<div class="col-sm-2">
						<h6 class="text-light">Connect with us through: </h6>
						<ul class="unstyled">
							<li><a href="#" class="text-light">Contact # </a></li>
							<li><a href="#" class="text-light">Hotline # </a></li>
							<!- -<li><a href="#" class="text-light">Links</a></li>
							<li><a href="#" class="text-light">Contact</a></li>- ->
						</ul>
					</div>
					<div class="col-sm-2">
						<h6 class="text-light">Follow Us</h6>
						<ul class="unstyled">
							<li>
								<a href="#" class="text-light">
									<i class="fab fa-facebook fa-2x"></i>
									<span class="h5">Facebook</span>
								</a>
							</li>
							<li>
								<a href="#" class="text-light">
									<i class="fab fa-twitter fa-2x"></i>
									<span class="h5">Twitter</span>
								</a>
							</li>
							<li>
								<a href="#" class="text-light">
									<i class="fab fa-google-plus fa-2x"></i>
									<span class="h5">Google Plus</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-sm-2">
						<h6 class="text-light">Coded with <i class="fab fa-font-awesome-flag" aria-hidden="true"></i> Fonts Awesome</h6>
					</div>
				</div>
			</div>
		</div>
	</div><!- - /.footer-content - ->
</footer>		 -->

<!-- footer + scripts-->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js');?>"></script>
		<script src="<?php echo base_url('node_modules/popper.js/dist/umd/popper.min.js');?>"></script>
		<script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.min.js');?>"></script>

		<!-- Moment.JS -->
		<script src="<?php echo base_url('node_modules/moment/moment.js');?>"></script>

		<script>

			function move() {
			  var elem = document.getElementById("prog");   
			  var width = 1;
			  var id = setInterval(frame, 10);
			  function frame() {
			    if (width >= 100) {
			      clearInterval(id);
			    } else {
			      width++; 
			      elem.style.width = width + '%'; 
			    }
			  }
			}

			$(document).ready(function($) {
				
						
						$('#prog').on('click', function(event) {
							move();
						});
			});
			
		</script>

		<script>
			var interval = setInterval(timer, 1000);

			function timer() {
				var now = moment().format("dddd, MMMM Do YYYY, hh:mm:ss A");

				document.getElementById("time_today").innerHTML = now;
			}
		    
		</script>

		<script type="text/javascript">
			$(document).ready(function($) {
				$('.dropdown-toggle').dropdown();	
			});
		</script>

		<?php
			if( basename($_SERVER['PHP_SELF'], '.php') == 'candidates' ):
				echo '<script src="'.base_url('node_modules/slick-carousel/slick/slick.min.js').'"></script>';
			endif;
		?>

		<?php if( basename($_SERVER['PHP_SELF'], '.php') == 'home' || 
				basename($_SERVER['PHP_SELF'], '.php' ) == 'index' || 
				basename($_SERVER['PHP_SELF'], '.php' ) == 'profile' ||
				basename($_SERVER['PHP_SELF'], '.php' ) == 'candidates'): ?>
		<script>
			$(document).ready(function($) {
				<?php
					//Student active
					switch (basename($_SERVER['PHP_SELF'], '.php')) {
						case 'home':
							echo "$('#sidebarHome').addClass('active');";
							break;

						case 'profile':
							echo "$('#sidebarProfile').addClass('active');";
							break;
						case 'candidates':
							echo "$('#sidebarCandidates').addClass('active');";
							$prev_arrow = '<button class="btn btn-sm btn-light slk-left"><i class="fa fa-chevron-left"></i></button>';
							$next_arrow = '<button class="btn btn-sm btn-light slk-right"><i class="fa fa-chevron-right"></i></button>';
							echo "
								$('.slick_content').slick({
									infinite: false,
									lazyLoad: 'ondemand',
									slidesToShow: 4,
									slidesToScroll: 4,
									responsive: [
									{
									  breakpoint: 1024,
									  settings: {
									    slidesToShow: 3,
									    slidesToScroll: 3,
									    infinite: true,
									    dots: true
									  }
									},
									{
									  breakpoint: 600,
									  settings: {
									    slidesToShow: 2,
									    slidesToScroll: 2
									  }
									},
									{
									  breakpoint: 480,
									  settings: {
									    slidesToShow: 1,
									    slidesToScroll: 1
									  }
									}],
									prevArrow: '". $prev_arrow ."',
									nextArrow: '". $next_arrow ."'
								});
							";
							break;
						
						default:
							echo "$('#sidebarHome').addClass('active');";
							break;
					}
				?>
				$('#sidebarBtn').on('click', function() {
					sidebar_open();
				});
				$('#sidebarOverlay, #sidebarCloseButton').on('click', function() {
					sidebar_close();
				});
			});

			function sidebar_open() {
			    if ($('.sidebar').css('display','block') === 'block') {
					$('.sidebar').css('display','none');
					$('.sidebar-overlay').css('display','none');
			    } else {
					$('.sidebar').css('display','block');
					$('.sidebar-overlay').css('display','block');
					$('.sidebar')
					.queue(function( next ){
						$(this).addClass('fadeInLeft');
						next();
					});
			    }
			}

			function sidebar_close() {
				$('.sidebar')
					.queue(
						function( next ){
							$(this).removeClass('fadeInLeft').dequeue();
							next();
						})
					.queue(
						function( next ){
							$(this).addClass('fadeOutLeft').dequeue();
							next();
						})
					.delay(400)
					.queue(
						function( next ){
							$(this).removeClass('fadeOutLeft').dequeue();
							$(this).css('display','none').dequeue();
							next();
				});
				
				// $('.sidebar').css('display','none');
				// $('.sidebar-overlay').css('display','none');
			}
		</script>
		<?php else: echo "non mobile scripts"; ?>
		<?php endif; ?>
		
		<script>
			// Scroll certain amounts from current position 
			window.scrollBy({ 
			  top: 100, // could be negative value
			  left: 0, 
			  behavior: 'smooth' 
			});
		</script>

		<div class="row">
			<div class="col-md-10 offset-md-2 p-5">
				<?php 
				$debug_mode = $_SERVER['PHP_SELF'];
				echo "<h3>You're in Debug Mode. <br>". basename($_SERVER['PHP_SELF'], '.php' ) ."<br><code>Check footer.php</code></h3>";
				?>
			</div>
		</div>

		
	</body>
</html>