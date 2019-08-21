<?php

define( 'WPSEO_FILE', __FILE__ );
define( 'WPSEO_VERSION', '11.9' );
define( 'WPSEO_PATH', WPSEO_FILE );
define( 'WPSEO_BASENAME', WPSEO_FILE );
define( 'YOAST_VENDOR_NS_PREFIX', 'YoastSEO_Vendor' );
define( 'YOAST_VENDOR_DEFINE_PREFIX', 'YOASTSEO_VENDOR__' );
define( 'YOAST_VENDOR_PREFIX_DIRECTORY', 'vendor_prefixed' );
define( 'WPSEO_NAMESPACES', true );

define( 'YoastSEO_Vendor\RUCKUSING_BASE', '' );

class_alias( Yoast\WP\Free\Oauth\Client::class, 'WPSEO_MyYoast_Client' );
class_alias( YoastSEO_Vendor\League\OAuth2\Client\Token\AccessTokenInterface::class, 'WPSEO_MyYoast_AccessToken_Interface' );
