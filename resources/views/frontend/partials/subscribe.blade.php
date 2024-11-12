<!-- resources/views/frontend/partials/subscribe.blade.php -->

<section class="subscribe-section py-5">
    <div class="container">
        <h2 class="subscribe-heading text-center mb-4">Subscribe for More Info</h2>
        <p class="subscribe-description text-center mb-5">Stay updated with the latest news, training tips, and exclusive offers from Kechei Training Camps. Subscribe now!</p>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <!-- Subscription Form -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('subscribe.store') }}" method="POST" class="subscribe-form d-flex">
                    @csrf
                    <input type="email" class="form-control subscribe-input" name="email" placeholder="Enter your email" required>
                    <button type="submit" class="subscribe-btn">Subscribe</button>
                </form>
            </div>
        </div>

        <!-- Privacy Text -->
        <div class="row">
            <div class="col text-center mt-3">
                <p class="privacy-text">We respect your privacy and won’t share your information. Unsubscribe at any time.</p>
            </div>
        </div>
    </div>
    @if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
@endif
</section>
