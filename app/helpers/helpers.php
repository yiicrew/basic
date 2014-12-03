<?php

function params($key='adminEmail')
{
	return Yii::app()->params[$key];
}

function flash($name, $message)
{
	Yii::app()->user->setFlash($name, $message);
}

function asset($asset='')
{
	return Yii::app()->request->baseUrl."/assets/".$asset;
}

// normalize a url
function w($url)
{
	return 'http://'.ltrim($url, 'http://');
}

function image($asset='', $title='', $opts=[])
{
	return CHtml::image(asset($asset), $title, $opts);
}

function img($asset='', $title='', $opts=[])
{
	return CHtml::image(asset($asset), $title, $opts);
}

function upload_image($asset='', $title='', $opts=[])
{
	return CHtml::image(params('cdn').$asset, $title, $opts);
}

function slug($str='', $id='')
{
	$slug = preg_replace('/[\s!:;_\?=\\\+\*\/\%&#]+/', '-', $str);
	$slug = strtolower($slug);
	$slug = trim($slug, '-');

	if (!empty($id)) $slug .= '-'.$id;
	
	return $slug;
}

function e($value='')
{
	return CHtml::encode($value);
}

// shortcut to CController::createUrl
function url($url='', $params=[])
{
	return Yii::app()->createUrl($url, $params);
}

// shortcut to CController::createUrl
function route($url='', $params=[])
{
	return Yii::app()->createUrl($url, $params);
}

function dd($value='')
{
	printf("<pre>%s</pre>", var_dump($value));
	die;
}

function link_to($link="link name", $url="#", $options=[])
{
	return CHtml::link($link, $url, $options);
}

function a($link="link name", $url="#", $options=[])
{
	return CHtml::link($link, $url, $options);
}

// split the string on comma and return the value
function f($value='', $limit=1, $offset=0) 
{
    $numbers=explode(',', trim($value, ','));
    return  implode(',', array_slice($numbers, $offset, $limit));
}

function script($file, $core=false)
{
    if (isset($core))
        return Yii::app()->clientScript->registerCoreScript($file);
    return Yii::app()->clientScript->registerScriptFile(asset($file));
}
