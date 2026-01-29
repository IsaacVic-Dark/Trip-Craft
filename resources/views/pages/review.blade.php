<x-app-layout>
    <div class="max-w-xl mx-auto mt-16 bg-white rounded-2xl shadow-xl p-10 font-sans">
        <form action="add_review" method="POST" class="space-y-8">
            @csrf
            <div>
                <label class="block font-semibold text-lg text-gray-800 mb-2">Overall rating</label>
                <div class="flex gap-3 text-yellow-400 text-2xl">
                    <button type="button"><i class="bi bi-star-fill"></i></button>
                    <button type="button"><i class="bi bi-star-fill"></i></button>
                    <button type="button"><i class="bi bi-star-fill"></i></button>
                    <button type="button"><i class="bi bi-star-fill"></i></button>
                    <button type="button"><i class="bi bi-star-fill"></i></button>
                </div>
            </div>
            <div>
                <label class="block font-semibold text-lg text-gray-800 mb-2">Experience</label>
                <input type="text" name="experience" placeholder="e.g.., I had a great time ..." class="w-full rounded-xl border border-gray-200 px-4 py-3 text-base font-sans shadow focus:ring-2 focus:ring-primary-yellow focus:outline-none" />
            </div>
            <div class="flex items-center gap-6">
                <label class="font-semibold text-base text-gray-700">Would you recommend this to a friend?</label>
                <label class="inline-flex items-center gap-2"><input type="radio" name="recommend" value="yes" class="rounded border-gray-300 text-primary-yellow focus:ring-primary-yellow">Yes</label>
                <label class="inline-flex items-center gap-2"><input type="radio" name="recommend" value="no" class="rounded border-gray-300 text-primary-yellow focus:ring-primary-yellow">No</label>
            </div>
            <div class="flex items-center gap-3">
                <input type="checkbox" name="accept" class="rounded border-gray-300 text-primary-yellow focus:ring-primary-yellow">
                <label class="text-base text-gray-700">I accept the terms and conditions.</label>
            </div>
            <div>
                <label class="text-base text-gray-700">We can use the text and star rating from your review in other marketing.</label>
            </div>
            <button type="submit" class="inline-flex items-center justify-center px-6 py-3 bg-primary-yellow text-primary-dark font-bold rounded-full shadow-md text-base tracking-tight hover:bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-primary-yellow focus:ring-offset-2 transition">Submit My Review</button>
        </form>
    </div>
</x-app-layout>