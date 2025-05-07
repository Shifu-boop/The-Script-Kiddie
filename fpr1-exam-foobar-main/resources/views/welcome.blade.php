<x-article>
    <x-slot name="title">Welcome to the HZ HBO-ICT FPR1-TOETS01 exam template app.</x-slot>
    <x-slot name="subtitle">This is the home page</x-slot>
    <div class="columns">

        <div class="column is-8-desktop is-12-tablet">
            <article class="content">
                <p>
                    Introducing FooBar, the revolutionary app designed to streamline your experience in managing and discovering the hottest foos and bars in town. With its sleek interface and user-friendly features, FooBar brings the world of nightlife right to your fingertips. Say goodbye to endless searches and missed opportunities – with FooBar, you'll never miss out on the latest happenings again.
                </p>
                <p>

                    One of the standout features of FooBar is its comprehensive database of foos and bars, meticulously curated to provide users with only the best options available. Whether you're in the mood for a cozy speakeasy, a trendy cocktail lounge, or a lively sports bar, FooBar has you covered. Simply input your preferences, and let FooBar do the rest. With detailed descriptions, ratings, and reviews, you can make informed decisions about where to spend your evening.
                </p>
                <p>

                    But FooBar isn't just about finding the perfect spot – it's also about simplifying the entire experience. With integrated booking and reservation capabilities, you can secure your table or spot at the bar with just a few taps. No more waiting on hold or hoping for a last-minute opening – FooBar puts you in control of your plans, allowing you to relax and enjoy your night out without stress or hassle.
                </p>
                <p>

                    For foos and bar owners, FooBar offers a powerful platform to reach new customers and enhance their visibility in the competitive nightlife scene. With customizable profiles, promotional tools, and analytics, owners can connect with their target audience and attract more patrons than ever before. Whether you're a seasoned establishment or a newcomer looking to make a splash, FooBar provides the tools you need to succeed.
                </p>
                <p>

                    In a world where time is precious and options are plentiful, FooBar stands out as the ultimate solution for anyone looking to make the most of their nightlife experience. From discovering hidden gems to seamlessly managing reservations, FooBar is the go-to app for foos and bar enthusiasts everywhere. Download FooBar today and elevate your nightlife experience to new heights.                </p>
                </p>
            </article>
        </div>

        <div class="column is-4-desktop is-12-tablet">
            <p class="title is-4">Latest news</p>

            <div class="columns is-multiline">

                @foreach($latestArticles as $article)
                    <div class="column is-12">
                        <div class="card">

                            <div class="card-image">
                                <img src="{{ $article->img_url }}" alt="Article picture">
                            </div>

                            <div class="card-content">
                                <div class="content">

                                    <a class="title is-4" href="/articles/{{$article->id}}">{{$article->title}}</a>

                                    <p>{{$article->excerpt}}</p>
                                </div>
                                <div class="has-text-centered">
                                    <a href="/articles/{{$article->id}}" class="button is-primary">Read more...</a>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <p class="card-footer-item"><small>Published: {{ $article->published_at->diffForHumans() }}</small></p>
                            </footer>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-article>