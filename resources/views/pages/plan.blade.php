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
            <label for="location">Location:</label>
            <input type="text" class="form-control" id="location" name="location" required>
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

