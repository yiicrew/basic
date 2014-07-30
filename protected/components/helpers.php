<?php

function asset($asset='')
{
	return Yii::app()->request->baseUrl.'/assets/'.$asset;
}