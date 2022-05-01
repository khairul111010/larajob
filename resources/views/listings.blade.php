@unless (count($posts) == 0)
    @foreach($posts as $post)
    <a href="/listings/{{$post['id']}}"><h1>{{$post['id']}}</h1></a>
    <h4>{{$post['name']}}</h4>
    <p>{{$post['desc']}}</p>
    @endforeach
    @else
    <p>No listing found</p>
@endunless