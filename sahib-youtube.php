<?php
/**
 * iframe embed youtube videos
 * @author Sahib J. Leo <sahib@sahibalejandro.com>
 */
$wgExtensionFunctions[] = 'sahib_youtube';
$wgExtensionCredits['parserhook'][] = array(
  'name' => 'YouTube iframe',
  'description' => 'Insert iframe youtube videos',
  'author' => 'Sahib J. Leo',
  'url' => 'http://sahibalejandro.com/'
);

function sahib_youtube()
{
  global $wgParser;
  $wgParser->setHook('youtube', 'sahib_youtube_render');
}

function sahib_youtube_render($input)
{
   return '<iframe width="853" height="480" src="http://www.youtube.com/embed/'.$input.'?rel=0" frameborder="0" allowfullscreen></iframe>';
}