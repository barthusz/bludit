<?php
    class pluginBackendChanges extends Plugin {
        public function adminHead() {
            $html .= $this->includeCSS('changes.css');
            return $html;
        }
    }
?>