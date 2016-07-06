<?php

  namespace IdnoPlugins\SmallHeader {
    class Main extends \Idno\Common\Plugin {

      function registerPages() {
        \Idno\Core\Idno::site()->template()->replaceTemplate('shell/toolbar/main','smallheader/main');
      }    
    }
  }
