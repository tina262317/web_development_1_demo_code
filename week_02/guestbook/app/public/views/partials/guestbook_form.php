<div class="container mt-5">
    <h1 class="text-center">Guestbook</h1>
    <form class="mt-4" method="POST">
        <!-- Name Field -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        </div>

        <!-- Email Field -->
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>

        <!-- Message Field -->
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here" required></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100">Send Message</button>
    </form>
</div>