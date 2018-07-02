<?php

echo '<section>';

//fetch_assoc should not be in the view!
foreach($result2 as $row=>$oneItem){
}
echo '<article>';
	echo '<h1>'.$oneItem['title'].'</h1>';
	echo '<content>'.$oneItem['content'].'</content>';
    echo '<img src="img/'.$oneItem['image'].'">';
	echo '</article>';
echo '</section>';
