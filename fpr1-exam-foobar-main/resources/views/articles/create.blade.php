<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2">Create a new article</h1>
            </div>
        </div>
        <div class="box">
            <form action="#">
                <h2 class="subtitle is-6 is-italic">
                    Please fill out all the form fields and click 'Submit'
                </h2>

                {{-- Here are all the form fields --}}
                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">
                        <input type="text" name="title" placeholder="Enter the article's title here"
                               class="input" autocomplete="title" autofocus>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-primary">Save</button>
                    </div>
                    <div class="control">
                        <a type="button" href="{{ url()->previous() }}" class="button is-light">Cancel</a>
                    </div>
                    <div class="control">
                        <button type="reset" class="button is-warning">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-main>
