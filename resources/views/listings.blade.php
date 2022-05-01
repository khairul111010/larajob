@unless (count($posts) == 0)
    @foreach($posts as $post)
    <a href="/listings/{{$post['id']}}"><h1>{{$post['title']}}</h1></a>
    <h4>{{$post['company']}}</h4>
    <p>{{$post['description']}}</p>
    @endforeach
    @else
    <p>No listing found</p>
@endunless