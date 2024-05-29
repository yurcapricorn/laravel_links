@if ($posts->lastPage() > 1)
    <ul class="pagination">
        <a href="{{ $posts->url(1) }}">First</a>

        @for ($i = max(1, $posts->currentPage() - $links%2); $i <= min($posts->lastPage(), $posts->currentPage() + $links%2); $i++)
            <a href="{{ $posts->url($i) }}">{{ $i }}</a>
        @endfor

        <a href="{{ $posts->url($posts->lastPage()) }}">Last</a>
    </ul>

    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td></td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->description }}</td>
            </tr>
        @endforeach
    </table>
@endif
