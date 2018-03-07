<?php

		// include the domain information from the root dir
		require '../../inc/browscap.php';
		require '../../inc/domain.php';
		require '../../inc/projects.php';

		// include the project_data from the project dir
		// check this data if you setup a new project
		require 'inc/project_data.php';

		// include the header from the root dir
		require '../../inc/header.php';

?>

	<!-- scru-service start -->

	<div class="result-container success">
				<h4>lat</h4>
				<div class="result lat" contenteditable="true" onclick="document.execCommand('selectAll',false,null)">loading…</div>
			</div><!-- .result.lat -->
			<div class="result-container success">
				<h4>long</h4>
				<div class="result long" contenteditable="true" onclick="document.execCommand('selectAll',false,null)">loading…</div>
			</div><!-- .result.long -->
			<div class="result-container success">
				<h4>lat / long</h4>
				<div class="result latlong" contenteditable="true" onclick="document.execCommand('selectAll',false,null)">loading…</div>
			</div><!-- .result.latlong -->
			<div class="result-container success">
				<h4>time / date</h4>
				<div class="result time" contenteditable="true" onclick="document.execCommand('selectAll',false,null)">loading…</div>
			</div><!-- .result.time -->
			<div class="result-container success">
				<a class="btn link">
					loading…
				</a>
			</div>
			<div class="result-container error">
				<h4>error</h4>
				<div class="result small" contenteditable="true" onclick="document.execCommand('selectAll',false,null)">loading…</div>
			</div><!-- .result.error -->

	<!-- scru-service end -->

<?php

	// include the domain information from the root dir
	require '../../inc/footer.php';

?>
