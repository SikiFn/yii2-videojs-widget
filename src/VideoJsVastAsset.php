<?php

namespace wbraganca\videojs;
/**
 * Asset bundle for videojs Widget
 *
 * @author Wanderson Bragança <wanderson.wbc@gmail.com>
 */
class VideoJsVastAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@videojs-widget';
    
    public $js = [
        "plugins/videojs-vast/videojs.ads.js",
        "plugins/videojs-vast/vast-client.js",
        "plugins/videojs-vast/videojs.vast.js"
    ];
    
    public $css = [
        "plugins/videojs-vast/videojs.ads.css",
        "plugins/videojs-vast/videojs.vast.css"
    ];

    public $depends = [
        'wbraganca\videojs\VideoJsAsset'
    ];
}
