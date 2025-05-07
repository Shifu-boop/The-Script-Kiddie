<x-article>

    <x-slot name="title">{{ $bar->id }}</x-slot>
    <x-slot name="subtitle">{{ $bar->name }}</x-slot>

    <article class="content">

        Waldo: {!! $bar->waldo !!}<br>
        grault:{!! $bar->grault !!}<br>
        ordan:{{ $bar->ordan}}
    </article>

</x-article>
