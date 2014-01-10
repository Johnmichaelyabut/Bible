<html>
	<head>
		<title>Bible</title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.1.10.2.js"></script>
	<script type="text/javascript" src = "js/bible.js"></script>
	<script src = "js/search.js"></script>
	<script src = "js/jquery.min.js"></script>

	<?php
		include_once('config.php');
		include_once('BookDAO.php');

		$books = BookDAO::getBooks();
		$defaultChapters = BookDAO::getChapterNumbers(1);
		$defaultVerses = BookDAO::getVerseNumbers(1, 1);
		$defaultVerseText = BookDAO::getVerseText(1, 1, 1);
	?>
	<body>
		<div>
			<div class = "span12 well" id ="nav" style = "background-image: url(back.jpg); background-size:1300" >
				<div class = "span3 well" id = "nav1" style = "background-image: url(nav1.gif);">

					<div class = "nav-header">
						<center>
							<h1><font face = "tolkien" color = "black">E-Bible</font></h1>
							<h5>King James Version</h5>
						</center>
					</div>

					<div class = "page-header" id = "head"></div>

					<div class = "container-fluid well" id = "search">

						<div id = "nav-header">
							<center>
								<h3><font face = "Adobe Garamond Pro Bold" size = "6%">Word Search</font></h3>
							</center>
						</div>

						<div>

							<form class="form-search" method = "POST" >
	            				<div class = "span" >
		                        	<input type="text" class="span3 search-query "  id = "name" placeholder = "Search word in the Bible..">
	                        	</div>
	                    	</form>

						</div>

						<div>
							<textarea  id = "searchout" disabled>

							</textarea>
						</div>

					</div>

				</div>
				
				<div class = "span5 well" id = "nav2">
					
					<div id = "categories">

						<div id = "cat1">
							<center>
								<h3><font face = "Adobe Garamond Pro Bold" size = "6px">Search For Book, Chapter and Verse</font></h3>
							</center>	
						</div>
						
						<div class = "span" id = "book">
							<font face = "Cooper Black" size = "4.5em" id = "book1">Book:</font>
							<select name="books" id="books">
								<?php foreach($books as $id => $book): ?>
									<option value="<?= $id ?>"><?= $book ?></option>
								<?php endforeach ?>
							</select>
						</div>

						<div class = "span">
							<font face = "Cooper Black" size = "4.5em">Chapter:</font>
							<select name="chapters" id="chapters">
								<?php for($i = 1; $i <= $defaultChapters; $i++): ?>
									<option value="<?= $i ?>"><?= $i ?></option>
								<?php endfor ?>
							</select>
						</div>

						<div class = "span">
							<font face = "Cooper Black" size = "4.5em">Verse:</font>
							<select name="verses" id="verses">
								<?php for($i = 1; $i <= $defaultVerses; $i++): ?>
									<option value="<?= $i ?>"><?= $i ?></option>
								<?php endfor ?>
							</select>

						</div>

					</div>
						<textarea id = "verse_text" disabled>
							<?= $defaultVerseText ?>
						</textarea>

						<div class="pagination">
						    <a href="#" class="first" data-action="first" id = "back">&laquo;</a>
						    <a href="#" class="previous" data-action="previous" id = "back2">&lsaquo;</a>
						    <input type="text" readonly="readonly" data-max-page="40" id = "pagenum"/>
						    <a href="#" class="next" data-action="next" id = "next2">&rsaquo;</a>
						    <a href="#" class="last" data-action="last" id = "next">&raquo;</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</body>
</html>