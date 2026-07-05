@extends('layouts.app')

@section('content')

	@include('pages.blog.sections.hero')

	@include('pages.blog.sections.featured-article')

	@include('pages.blog.sections.search-filters')

	@include('pages.blog.sections.articles')

	@include('pages.blog.sections.pagination')

	@include('pages.blog.sections.calculator-banner')

@endsection