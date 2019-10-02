<h1>Welcome to categories page</h1>
<br>

<hr>

<ul>
    @foreach($categories as $categoryKey=>$categoryValue)
        <li>
            <a href="{{ url('/car-classes/'.$categoryKey) }}">{{ $categoryValue}}</a>
        </li>
    @endforeach
</ul>