
/**
 * @method photonyx_locate_block_patterns
 * Auto Searches for files and directories within a given directory
 * @uses CascadeRecursiveFileLocator
 * @return Array
 * 
 * @author Grant Kellie <contact@cascade.media>
 * @copyright June 26 2022 Cascade Media
 */
function photonyx_locate_block_patterns(){
	$paths = [
		get_theme_file_path('/blocks/patterns'), // 
	];
	$files = new Theme\Photonyx\CascadeRecursiveFileLocator();
	$data = $files->compileFiles($paths, ['html', 'css', 'js', 'php', 'json']); // Locate all Files under $path

	$block_patterns = [];
	foreach ($data as $data) {
		array_push($block_patterns,$data['filename']);     
	}

	return $block_patterns;
}
