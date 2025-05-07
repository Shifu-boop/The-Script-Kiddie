<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::factory()->create([
            'title' => 'Introducing FooBar: The Ultimate App for Managing Your Favorite Foos and Bars',
            'excerpt' => 'Discover how FooBar is revolutionizing the way people experience nightlife. Say
                goodbye to missed opportunities and hello to seamless planning.',
            'body' => '<p>FooBar is not just another app – it\'s a game-changer in the world of nightlife
                        management. With its sleek interface and intuitive features, FooBar simplifies the
                        process of finding and enjoying your favorite foos and bars.</p>

                        <p><strong>Find Your Perfect Spot</strong></p>

                        <p>Whether you\'re in the mood for a cozy pub, a lively sports bar, or a trendy
                        cocktail lounge, FooBar has you covered. Our comprehensive database is meticulously
                        curated to provide users with only the best options available. Simply input your
                        preferences, and let FooBar do the rest.</p>

                        <p><i>Say goodbye to endless searches and wasted time – with FooBar, your ideal night
                        out is just a few taps away.</i></p>

                        <p><strong>Seamless Planning</strong></p>

                        <p>With FooBar, planning your night out has never been easier. Our integrated booking
                        and reservation system allow you to secure your table or spot at the bar with just a
                        few clicks. No more waiting on hold or hoping for a last-minute opening – FooBar puts
                        you in control of your plans.</p>

                        <p><i>Relax and enjoy your evening knowing that your reservations are taken care of – with
                        FooBar, your night out is guaranteed to be stress-free.</i></p>'
        ]);
        Article::factory()->create([
            'title' => 'FooBar: Your Ultimate App for Managing Foos and Guinea Pigs',
            'excerpt' => 'Discover how FooBar is revolutionizing the way people care for their foos and guinea
                            pigs. Say goodbye to stress and hello to seamless management.',
            'body' => '<p>FooBar isn\'t just for nightlife – it\'s also your ultimate companion for managing foos
                        and guinea pigs. With its user-friendly interface and innovative features, FooBar
                        simplifies the process of caring for your furry friends.</p>

                        <p><strong>Customized Care</strong></p>

                        <p>Whether you\'re a seasoned foos enthusiast or a newbie guinea pig owner, FooBar has
                        everything you need to provide top-notch care for your pets. From feeding schedules to
                        grooming tips, FooBar offers personalized recommendations based on your pet\'s unique
                        needs.</p>

                        <p><i>Say goodbye to guesswork and hello to peace of mind – with FooBar, your foos and
                        guinea pigs will thrive like never before.</i></p>

                        <p><strong>Seamless Management</strong></p>

                        <p>With FooBar, managing your foos and guinea pigs has never been easier. Our integrated
                        task scheduler allows you to stay organized and on top of your pet care routine. Plus,
                        with built-in reminders and notifications, you\'ll never forget a feeding or grooming
                        session again.</p>

                        <p><i>Spend less time worrying about your pets and more time bonding with them – with
                        FooBar, pet care is a breeze.</i></p>'
        ]);
        Article::factory()->create([
            'title' => 'FooBar: The Innovative App for Managing Bars and Programming',
            'excerpt' => 'Explore how FooBar is changing the game for bar owners and programming enthusiasts alike.
                            Say goodbye to chaos and hello to streamlined management.',
            'body' => '<p>FooBar isn\'t just for nightlife – it\'s also your ultimate tool for managing bars and
                        diving into the world of programming. With its intuitive interface and cutting-edge
                        features, FooBar makes it easy to run a successful bar while pursuing your passion for
                        coding.</p>

                        <p><strong>Efficient Bar Management</strong></p>

                        <p>Whether you\'re a seasoned bar owner or a newcomer to the industry, FooBar has
                        everything you need to streamline your operations. From inventory management to staff
                        scheduling, FooBar offers powerful tools to help you run your bar like a well-oiled
                        machine.</p>

                        <p><i>Say goodbye to long hours and manual tasks – with FooBar, bar management has never
                        been more efficient.</i></p>

                        <p><strong>Empowering Programming Tools</strong></p>

                        <p>But FooBar isn\'t just for bar owners – it\'s also a playground for programming
                        enthusiasts. With built-in coding tutorials and interactive challenges, FooBar provides
                        the perfect platform for honing your coding skills and exploring new technologies.</p>

                        <p><i>Unlock your full potential as a programmer – with FooBar, the possibilities are
                        endless.</i></p>'
        ]);
        Article::factory()->create([
            'title' => 'Introducing FooBar: The App That Lets You Code Like a Pro While Sipping Your Favorite
                            Drink',
            'excerpt' => 'Discover how FooBar is changing the game for programmers and bar enthusiasts alike. Get
                            ready to write code and sip cocktails with style.',
            'body' => '<p>Forget boring coding sessions in dimly lit rooms – with FooBar, you can write code like a
                        pro while enjoying the ambiance of your favorite bar. Our revolutionary app combines the
                        thrill of programming with the excitement of nightlife, giving you the best of both worlds.
                        </p>

                        <p><strong>Code and Cocktails</strong></p>

                        <p>Whether you\'re debugging a tricky algorithm or brainstorming your next big project,
                        FooBar provides the perfect backdrop for your coding adventures. With a wide selection of
                        bars to choose from, you can find the ideal setting to unleash your creativity and fuel
                        your coding sessions.</p>

                        <p><i>Who says programmers can\'t have fun? With FooBar, you can write code and sip
                        cocktails like a true coding connoisseur.</i></p>

                        <p><strong>Seamless Integration</strong></p>

                        <p>With FooBar, transitioning from coding to cocktail hour has never been easier. Our
                        integrated features allow you to seamlessly manage your projects while enjoying your
                        favorite drink. Plus, with built-in code sharing and collaboration tools, you can impress
                        your friends and colleagues with your coding skills – all from the comfort of your
                        favorite bar stool.</p>

                        <p><i>So why wait? Download FooBar now and take your coding game to the next level – one
                        drink at a time!</i></p>'
        ]);
        Article::factory()->create([
            'title' => 'Rock Your Code with FooBar: Where Metal Music Meets Programming and Pints',
            'excerpt' => 'Discover the ultimate fusion of metal music, programming, and good old-fashioned pints
                            with FooBar. Get ready to headbang your way through lines of code!',
            'body' => '<p>Attention all metalheads and code warriors – FooBar is here to revolutionize your coding
                        experience. Say goodbye to the mundane and hello to the metal-infused world of programming,
                        where every line of code is accompanied by the thunderous roar of your favorite metal
                        tracks.</p>

                        <p><strong>Metallica and Methods</strong></p>

                        <p>With FooBar, you can write code like a true metal master. Our app features an exclusive
                        selection of metal playlists to fuel your coding sessions, from classic bands like
                        Metallica to modern icons like Mastodon. Whether you\'re debugging algorithms or building
                        complex software architectures, FooBar provides the perfect soundtrack for your coding
                        adventures.</p>

                        <p><i>Rock out to your favorite tunes while conquering lines of code – with FooBar,
                        programming has never been more epic.</i></p>

                        <p><strong>Code, Chords, and Cheers</strong></p>

                        <p>But FooBar isn\'t just about coding – it\'s also about camaraderie and good times. Our
                        app allows you to connect with fellow metal-loving programmers and share your passion for
                        music and technology over pints of your favorite brew. Whether you\'re discussing the
                        latest programming trends or debating the best metal albums of all time, FooBar provides
                        the perfect platform for like-minded individuals to come together and rock out.</p>

                        <p><i>So grab your guitar pick and your coding keyboard – with FooBar, the stage is set for
                        a programming experience like no other.</i></p>'
        ]);
    }
}
