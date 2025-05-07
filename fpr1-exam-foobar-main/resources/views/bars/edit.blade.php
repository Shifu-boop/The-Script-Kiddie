<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2">Edit Bar #{{ $bar->id }}</h1>
            </div>
        </div>

        <div class="box">
            <form action="{{ route('bars.update', $bar) }}" method="POST">
                @csrf
                @method('PUT')

                <h2 class="subtitle is-6 is-italic">
                    Update the fields below and click 'Save'
                </h2>

                {{-- Name --}}
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input type="text" name="name" class="input"
                               value="{{ old('name', $bar->name) }}" placeholder="Bar name">
                    </div>
                    @error('name')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Waldo --}}
                <div class="field">
                    <label class="label">Waldo (optional)</label>
                    <div class="control">
                        <textarea name="waldo" class="textarea" placeholder="Enter description">{{ old('waldo', $bar->waldo) }}</textarea>
                    </div>
                    @error('waldo')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Grault --}}
                <div class="field">
                    <label class="label">Grault</label>
                    <div class="control">
                        <input type="number" step="0.00001" name="grault" class="input"
                               value="{{ old('grault', $bar->grault) }}">
                    </div>
                    @error('grault')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                {{-- User ID --}}
                <div class="field">
                    <label class="label">User ID</label>
                    <div class="control">
                        <input type="number" name="user_id" class="input"
                               value="{{ old('user_id', $bar->user_id) }}">
                    </div>
                    @error('user_id')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Buttons --}}
                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-primary">Save</button>
                    </div>
                    <div class="control">
                        <a href="{{ url()->previous() }}" class="button is-light">Cancel</a>
                    </div>
                    <div class="control">
                        <button type="reset" class="button is-warning">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-main>
