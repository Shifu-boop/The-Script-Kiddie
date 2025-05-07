<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2">All the Bars</h1>
            </div>
            <div class="column">
                <a href="{{ route('bars.create') }}" class="button is-primary is-pulled-right">
                    Add Bar
                </a>
            </div>
        </div>

        @foreach($bars as $bar)
            <article class="media {{ $bar->grault >= pi() ? 'has-background-success-light' : '' }}">
                <figure class="media-left">
                    <p>{{ $bar->id }}</p>
                </figure>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <a href="{{ route('bars.show', $bar) }}">
                                <strong>{{ $bar->name }}</strong>
                            </a>
                            <small>Created: {{ $bar->created_at->diffForHumans() }}</small>,
                            <small>Updated: {{ $bar->updated_at->diffForHumans() }}</small>
                            <br>
                            {{ $bar->waldo }}<br>
                            grault: {{ $bar->grault }}
                        </p>
                        <div class="buttons is-pulled-right mt-2">
                            <a href="{{ route('bars.edit', $bar) }}" class="button is-warning">Edit</a>
                        </div>
                        <form method="post" action="{{route('bars.destroy',$bar)}}">
                            @csrf
                            @method('DELETE')
                            <button class="button is-danger" onclick="return confirm('Are you sure you want to delete this Bar?')">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </article>
        @endforeach

    </div>
</x-main>
