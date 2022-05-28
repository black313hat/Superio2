@extends('errors.illustrated-layout',['title'=>__('Page not found')])
@section('title',__("Looks like you're lost"))
@section('message',!empty($exception->getMessage())? $exception->getMessage() :__("We can’t seem to find the page you’re looking for"))
@section('code',404)
@section('image',asset('images/404.svg'))