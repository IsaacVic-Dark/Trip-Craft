<x-app-layout>
    <style>
        .container .star{
            display: flex;
            grid-gap: 20px;

        }
        .container .star a{
            color: yellow;
        }

    </style>
    <div class="container">
        <form action="add_review" method="POST">
            @csrf
            <label for="">Overall rating</label>
            <div class="star">
                <a href="#" class="bi-star-fill"></a>
                <a href="#" class="bi-star-fill"></a>
                <a href="#" class="bi-star-fill"></a>
                <a href="#" class="bi-star-fill"></a>
                <a href="#" class="bi-star-fill"></a>
            </div>
            <div class="form-group">
                <label for="">Experience</label>
                <input type="text" class="form-control" name="experience" placeholder="e.g.., I had a great time ...">
            </div>
            <div class="form-group">
                <label for="">Would you recommend this to a friend</label>
                <input type="checkbox" name="recommend">Yes
                <input type="checkbox" name="recommend">No
            </div>
            <div class="form-group">
                <input type="checkbox" name="accept">
                <label for="" class="form-label">I accept the terms and conditions.</label>
            </div>
            <div class="form-group">
                <label for="" class="form-label">We can use the text and star rating from your review in other marketing.</label>
            </div>
            <button type="button" class="btn btn-dark">Submit My Review</button>
        </form>
    </div>
</x-app-layout>