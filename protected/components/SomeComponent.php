<?php
class SomeComponent extends CApplicationComponent {
	public function dosomething(){
		Yii::log(__METHOD__." done!","info");
	}	
}
