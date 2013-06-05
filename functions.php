<?php
//REMOVE TWENTY ELEVEN DEFAULT HEADER IMAGES
function bworms_remove_header_images() {
    unregister_default_headers( array('wheel','shore','trolley','pine-cone','chessboard','lanterns','willow','hanoi')
    );    
}
add_action( 'after_setup_theme', 'bworms_remove_header_images', 11 );
?>
