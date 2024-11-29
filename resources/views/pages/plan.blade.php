<x-app-layout>
<div class="container contact-form">
    <h2 class="text-center mb-4">Create an Activity Here</h2>
    <form action="add" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Activity name:</label>
            <input type="text" class="form-control" id="name" name="activity_name" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" class="form-control" id="contact" name="contact" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>
        <div class="no-style">
            <label for="starting_at">Date of activity:</label>
            <input type="datetime-local" class="form-control" id="starting_at" name="starting_at" required>
            <label for="starting_at">to:</label>
            <input type="datetime-local" class="form-control" id="ending_at" name="ending_at" required>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
    <select name="category" id="category" required>
        <option value="with_family">With Family</option>
        <option value="with_partner">With Partner</option>
        <option value="with_friends">With Friends</option>
    </select>
        </div>
        <div class="form-group">
            <label for="image">Choose an Image:</label>
            <input type="file" class="form-control-file" id="imageInput" name="image" accept="image/*">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</x-app-layout>

