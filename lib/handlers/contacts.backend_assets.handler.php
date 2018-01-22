<?php
class appsContactsBackend_assetsHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'contacts',
            'hook' => 'backend_assets',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}