@foreach($articles as $article)

	<div class="kotak">
<h1>{!!$article->title!!}</h1>
<p>
{!! str_limit($article->content, 250) !!}
{!! link_to(route('articles.show', $article->id), 'Read More') !!}
</p>
</div>
<br/>
@endforeach