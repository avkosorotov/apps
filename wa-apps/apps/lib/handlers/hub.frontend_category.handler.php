<?php

class appsHubFrontend_categoryHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('hub.frontend_category', $params, $array_keys);
        return ifempty($event);
    }
}
