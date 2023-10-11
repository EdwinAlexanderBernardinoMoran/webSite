
<!-- --Contact Section Design--- -->
<section class="contact" id="contact">
    <div class="contact-text">
        <h2>Contact <span>Me!</span></h2>
        <h4>If You Have Any Project In Your Mind.</h4>
        <p>I´m a FullStack Developer - creating bold & brave interface design for companies all across the wordl.</p>
        <div class="list">
            <li><i class="font bx bx-map"></i><a href="#">El Salvador, Sonsonate, Nahuizalco</a></li>
            <li><i class="font bx bxs-phone-call"></i><a href="#">+503 6065-6575</a></li>
            <li><i class="font bx bx-envelope"></i><a href="#">edwinalexanderbernardinomoran@gmail.com</a></li>
        </div>
    </div>



    <div class="contact-form">
        <form wire:submit.prevent="submitForm">
            <input type="text" wire:model="name" placeholder="Your Name" required>
            <input type="email" wire:model="email" placeholder="Your Email Address" required>
            <input type="text" wire:model="number" placeholder="Your Mobile Number" required>
            <textarea wire:model="body" cols="30" rows="10" placeholder="How Can I Help You" required></textarea>
            <input type="submit" value="Send Message" class="submit">
        </form>
    </div>
</section>
