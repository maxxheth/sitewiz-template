{{-- resources/views/components/contact-form.blade.php --}}
<form class="card bg-base-100 shadow-xl p-8 space-y-6">
    <h2 class="text-2xl font-semibold text-brand-blue-dark mb-1">Send Us a Message</h2>
    <p class="text-sm text-brand-gray-medium mb-4">Fill out the form and we'll get back to you promptly.</p>
    
    <div class="form-control">
        <label class="label" for="contact-name">
            <span class="label-text text-brand-gray-dark">Full Name</span>
        </label>
        <input type="text" id="contact-name" name="name" required 
               class="input input-bordered focus:input-primary" 
               placeholder="e.g., Jane Doe">
    </div>
    
    <div class="form-control">
        <label class="label" for="contact-email">
            <span class="label-text text-brand-gray-dark">Email Address</span>
        </label>
        <input type="email" id="contact-email" name="email" required 
               class="input input-bordered focus:input-primary" 
               placeholder="you@example.com">
    </div>
    
    <div class="form-control">
        <label class="label" for="contact-company">
            <span class="label-text text-brand-gray-dark">Company (Optional)</span>
        </label>
        <input type="text" id="contact-company" name="company" 
               class="input input-bordered focus:input-primary" 
               placeholder="Your Company Name">
    </div>
    
    <div class="form-control">
        <label class="label" for="contact-message">
            <span class="label-text text-brand-gray-dark">Message</span>
        </label>
        <textarea id="contact-message" name="message" rows="5" required 
                  class="textarea textarea-bordered focus:textarea-primary" 
                  placeholder="How can we help you today?"></textarea>
    </div>
    
    <div class="form-control">
        <button type="submit" class="btn btn-primary bg-brand-red hover:bg-brand-red-dark border-brand-red text-white">
            Submit Inquiry
        </button>
    </div>
</form>