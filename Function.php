public function converttitle($title) {
	
	  $smallwordsarray = array( 'of','a','the','and','an','or','nor','but','is','if','then','else','when', 'at','from','by','on','off','for','in','to','into','with','it', 'as' );

	  // Remove HTML tags
	  $titleWithoutTags = strip_tags($title);

	  // Split the string into separate words
	  $words = explode(' ', $titleWithoutTags);

	  foreach ($words as $key => $word) {

	   // If this word is the first, or it's not one of our small words, capitalise it
	   // with ucwords().
	   if ($key == 0 or !in_array($word, $smallwordsarray))
	    $words[$key] = ucwords($word);
	   }

	   // Join the words back into a string
	   $newtitle = implode(' ', $words);

	   return $newtitle;
	}
