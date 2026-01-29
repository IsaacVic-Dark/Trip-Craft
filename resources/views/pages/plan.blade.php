<x-app-layout title="Planning Page">
    <div class="max-w-2xl mx-auto mt-16 bg-white rounded-2xl shadow-xl p-10 font-sans">
        <h2 class="text-3xl font-extrabold text-primary-dark mb-8 text-center">Create an Activity Here</h2>
        <form action="add" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div>
                <label class="block font-semibold text-base text-gray-700 mb-1">Activity name:</label>
                <input type="text" id="name" name="activity_name" required class="w-full rounded-xl border border-gray-200 px-4 py-3 text-base font-sans shadow focus:ring-2 focus:ring-primary-yellow focus:outline-none" />
            </div>
            <div>
                <label class="block font-semibold text-base text-gray-700 mb-1">Contact:</label>
                <input type="tel" id="phone" name="contact" required class="w-full rounded-xl border border-gray-200 px-4 py-3 text-base font-sans shadow focus:ring-2 focus:ring-primary-yellow focus:outline-none" />
            </div>
            <div>
                <label class="block font-semibold text-base text-gray-700 mb-1">Price:</label>
                <input type="number" id="price" name="price" required class="w-full rounded-xl border border-gray-200 px-4 py-3 text-base font-sans shadow focus:ring-2 focus:ring-primary-yellow focus:outline-none" />
            </div>
            <div>
                <label class="block font-semibold text-base text-gray-700 mb-1">Location:</label>
                <input type="text" id="location" name="location" required class="w-full rounded-xl border border-gray-200 px-4 py-3 text-base font-sans shadow focus:ring-2 focus:ring-primary-yellow focus:outline-none" />
            </div>
            <div class="flex gap-4">
                <div class="flex-1">
                    <label class="block font-semibold text-base text-gray-700 mb-1">Date of activity:</label>
                    <input type="datetime-local" id="starting_at" name="starting_at" required class="w-full rounded-xl border border-gray-200 px-4 py-3 text-base font-sans shadow focus:ring-2 focus:ring-primary-yellow focus:outline-none" />
                </div>
                <div class="flex-1">
                    <label class="block font-semibold text-base text-gray-700 mb-1">to:</label>
                    <input type="datetime-local" id="ending_at" name="ending_at" required class="w-full rounded-xl border border-gray-200 px-4 py-3 text-base font-sans shadow focus:ring-2 focus:ring-primary-yellow focus:outline-none" />
                </div>
            </div>
            <div>
                <label class="block font-semibold text-base text-gray-700 mb-1">Category</label>
                <select name="category" id="category" required class="w-full rounded-xl border border-gray-200 px-4 py-3 text-base font-sans shadow focus:ring-2 focus:ring-primary-yellow focus:outline-none">
                    <option value="with_family">With Family</option>
                    <option value="with_partner">With Partner</option>
                    <option value="with_friends">With Friends</option>
                </select>
            </div>
            <div>
                <label class="block font-semibold text-base text-gray-700 mb-1">Choose an Image:</label>
                <input type="file" id="imageInput" name="image" accept="image/*" class="w-full rounded-xl border border-gray-200 px-4 py-3 text-base font-sans shadow focus:ring-2 focus:ring-primary-yellow focus:outline-none" />
            </div>
            <div>
                <label class="block font-semibold text-base text-gray-700 mb-1">Description:</label>
                <textarea id="description" name="description" rows="4" required class="w-full rounded-xl border border-gray-200 px-4 py-3 text-base font-sans shadow focus:ring-2 focus:ring-primary-yellow focus:outline-none"></textarea>
            </div>
            <button type="submit" class="inline-flex items-center justify-center px-6 py-3 bg-primary-yellow text-primary-dark font-bold rounded-full shadow-md text-base tracking-tight hover:bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-primary-yellow focus:ring-offset-2 transition">Submit</button>
        </form>
    </div>
</x-app-layout>

