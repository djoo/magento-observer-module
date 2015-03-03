<?php
class Djoo_Observermodule_Model_Observer extends Varien_Event_Observer
{
    public function __construct()
    {
    }


    public function mycustomfunction(Varien_Event_Observer $observer)
    {
        $event = $observer->getEvent();
        $model = $event->getPage();
        print_r($model->getData());
        die('test');
    }
}
?>