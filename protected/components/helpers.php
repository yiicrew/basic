<?php

function asset($asset='')
{
	return Yii::app()->request->baseUrl.'/assets/'.$asset;
}

function e($value='')
{
	return CHtml::encode($value);
}