<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Additional Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("This additional information will us get the best recommendations for you.") }}
        </p>
    </header>
    <form action="#" method="POST">
        @csrf
        <div class="form-group">
            <label for="" class="form-label">Maritial Status:</label>
            <select class="form-control" id="choices">
                <option value="option1">Single</option>
                <option value="option2">Married</option>
            </select>
        </div>
        <div class="form-group">
            <label for="" class="form-label">Location:</label>
            <input class="form-control" type="text" placeholder="e.g.., Nakuru">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Contact:</label>
            <input class="form-control" type="number" placeholder="e.g.., 0711111111">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Hobbies:</label>
            <input class="form-control" type="text" placeholder="e.g.., Hiking">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </div>

    </form>
</section>