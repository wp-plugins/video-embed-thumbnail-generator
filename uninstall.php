<?php
	if ( !defined( 'WP_UNINSTALL_PLUGIN' ) { exit (); }
    delete_option('kgvid_video_embed_options');
    delete_option('kgvid_video_embed_queue');
?>