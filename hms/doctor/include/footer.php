<footer>
	<div class="footer-inner">
		<div class="pull-left">
			<span class="text-bold text-uppercase"> Hospital Management System</span>
			<div class="footerr">copyright © <span id="year"></span> Designed And Developed by <a href="https://corexemel.com/" target="_blank">COREXEMEL</a></div>
		</div>
		<div class="pull-right">
			<span class="go-top"><i class="ti-angle-up"></i></span>
		</div>
	</div>
</footer>

<style>
	.footerr {
		display: inline-block;
		position: relative;
		left: 500px;
	}

	.footerr>a {
		font-size: 18px;
	}
</style>

<script>
	document.getElementById("year").innerHTML = new Date().getFullYear();
</script>