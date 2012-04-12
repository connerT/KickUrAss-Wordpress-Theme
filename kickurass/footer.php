<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 */
?>

		</div> <!--/main-->
		<p onclick="getImage(str)" id="moreWisdomButton">more kickass wisdom!</p>	
		
		<!--	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/ajax.js"></script>	-->

			<script type="text/javascript">	
			
				var str = document.getElementById("phrase").innerHTML;
				
				function getImage(str)
				{
				  document.write("hello Conner <br/>");	
				  document.write("This is string: " + str);	

				if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				    {
				    document.getElementById("phrase2").innerHTML=xmlhttp.responseText;
				    }
				  }
				xmlhttp.open("GET","<?php bloginfo('template_directory');?>/results.php?q="+str,true);
				xmlhttp.send();
				}
			</script>
			
		<?php
			/* Always have wp_footer() just before the closing </body>
			 * tag of your theme, or you will break many plugins, which
			 * generally use this hook to reference JavaScript files.
			 */
			$_SESSION['currentPhrase']=
			wp_footer();
		?>	
	
	</body>
</html>