<div>
	@include('includes.menu');
</div>

@if($end =='contact')
	Контакты
@else
	<a href="#">Контакты</a>
@endif

@if($end == 'news')
	Новости
@else 
	<a href="#">Новости</a>
@endif