<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    

<section class="pt-24 pb-16 bg-gradient-to-br from-background to-muted/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="animate-fade-in">
                <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 mb-6 animate-scale-in">
                    Book a Consultation</div>
                <h1 class="text-4xl md:text-6xl font-bold text-foreground mb-6 animate-slide-in-left">
                    Schedule a<br><span class="text-primary">Consultation</span></h1>
                <p class="text-lg md:text-xl text-muted-foreground max-w-3xl mx-auto mb-8 animate-slide-in-right">
                    Get expert advice tailored to your business needs. Book a 1:1 session with our senior
                    consultants and start your digital transformation journey today.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-scale-in"><a href="#form" class="group">
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 group">
                            <svg class="mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M8 2v4"></path>
  <path d="M16 2v4"></path>
  <rect width="18" height="18" x="3" y="4" rx="2"></rect>
  <path d="M3 10h18"></path>
</svg>
                            Get Started Today
                            <svg class="w-6 h-6 ml-2 h-4 w-4 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M5 12h14"></path>
  <path d="m12 5 7 7-7 7"></path>
</svg>                        </button>
                    </a><a href="https://palzin.com/contact" class="group">
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md px-8 group">
                            <svg class="w-6 h-6 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <rect width="20" height="16" x="2" y="4" rx="2"></rect>
  <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
</svg>
                            Discuss Your Project
                        </button>
                    </a></div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-background" id="form">

        <form action="https://palzin.com/schedule-consultation/store" method="POST">
            <input type="hidden" name="_token" value="uhZvkvPzDaF4BPSgkmfLrldjfJAxyvzO3Jc9dZCE">
            <div class="max-w-3xl mx-auto px-4 md:px-8 animate-fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-6 text-center">Schedule a
                    Consultation</h2>
                <p class="text-lg text-muted-foreground mb-8 text-center">Book a time with our experts. We'll
                    confirm your slot and send you a meeting invite.</p>
                
                    
                                        <label class="block mb-1 font-medium" for="name">Name</label>
                    <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" name="name" id="name" placeholder="Your name" required="" value="">

                    <label class="block mb-1 mt-4 font-medium" for="email">Email</label>
                    <input type="email" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" name="email" id="email" placeholder="your.email@example.com" required="" value="">

                    <label class="block mb-1 mt-4 font-medium" for="phone">Phone</label>
                    <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" name="phone" placeholder="8569743621" required="" value="">

                    <div class="flex mb-1 mt-4 items-center space-x-2">
                        <input type="checkbox" name="isWhatsApp" role="checkbox" aria-checked="false" data-state="unchecked" value="on" class="peer h-4 w-4 shrink-0 rounded-sm border border-primary ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground">
                        <input type="checkbox" aria-hidden="true" name="isWhatsapp" tabindex="-1" value="on" style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;">
                        <label for="isWhatsapp">Is this a WhatsApp number?</label>
                    </div>

                    <div>
                        <label class="block mt-4 mb-1 font-medium">Service Categories</label>
                        <select name="service_categories" class="w-full rounded-md border border-input bg-background px-3 py-2 mt-1 text-sm">
                            <option value="web-development" name="service_categories">Web Development</option>
                            <option value="mobile-app" name="service_categories">Mobile App Development</option>
                            <option value="cloud-infrastructure" name="service_categories">Cloud Infrastructure</option>
                            <option value="ai-solutions" name="service_categories">AI Solutions</option>
                            <option value="it-consulting" name="service_categories">IT Consulting</option>
                            <option value="other" name="service_categories">Other</option>
                        </select>
                    </div>

                    <label class="block mt-4 mb-1 font-medium" for="hours">Consultation Hours</label>
                    <input type="number" id="consultation-hours" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" name="hours" min="1" max="8" required="" value="1" id="consultation-hours">

                    <label class="block mb-1 font-medium">Select Date</label>
    <input type="date" id="consultation-date" class="border p-2 rounded w-full mb-3">

                    <div class="css-3iigni-container mb-1 mt-4">
                        <span id="react-select-3-live-region" class="css-1f43avz-a11yText-A11yText"></span><span aria-live="polite" aria-atomic="false" aria-relevant="additions text" role="log" class="css-1f43avz-a11yText-A11yText">
                        </span>
<div class="relative w-64">
    <label class="block mb-1 font-medium">Time Slot</label>
    <input type="text" id="time-slot" class="border p-2 rounded w-full pr-8 cursor-pointer" readonly>
    
    <!-- Dropdown icon -->
    <span class="absolute right-2 top-1/2 transform -translate-y-1/2 pointer-events-none">
        <xlucide-chevron-down></xlucide-chevron-down>
    </span>
    
    <div id="time-slot-options" class="border rounded mt-1 hidden absolute bg-white z-10 w-full"></div>
</div>

                        <label class="block mb-1 mt-4 font-medium" for="subject">Subject</label>
                        <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" name="subject" required="" value="">

                        <label class="block mb-1 mt-4  font-medium" for="description">Description</label>
                        <textarea class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" name="description" required=""></textarea>

                        <button class="py-3 mb-1 mt-4 inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full" type="submit">Book
                            Consultation
                        </button>
                    </div>
            </div>

        </form>
    </section>
    <section class="py-16 bg-muted/30">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-card rounded-lg shadow p-6 flex flex-col items-center text-center">
                    <h3 class="text-2xl font-bold text-primary mb-2">What to Expect</h3>
                    <ul class="list-disc pl-4 text-muted-foreground space-y-2 text-base text-left">
                        <li>Personalized 1:1 session with a senior consultant who understands your industry.</li>
                        <li>In-depth discussion of your business needs, goals, and technology challenges.</li>
                        <li>Expert recommendations tailored to your requirements and budget.</li>
                        <li>Overview of our process, deliverables, and next steps for your digital journey.</li>
                        <li>Time for your questions and clarifications.</li>
                    </ul>
                </div>
                <div class="bg-white dark:bg-card rounded-lg shadow p-6 flex flex-col items-center text-center">
                    <h3 class="text-2xl font-bold text-primary mb-2">How to Prepare</h3>
                    <ul class="list-disc pl-4 text-muted-foreground space-y-2 text-base text-left">
                        <li>Have a brief summary of your project, business challenge, or idea ready.</li>
                        <li>Gather any relevant documents, diagrams, or background information.</li>
                        <li>List your key questions, pain points, or desired outcomes for the session.</li>
                        <li>Identify stakeholders or team members who may join the call.</li>
                        <li>Ensure you have access to your email or WhatsApp for confirmation and follow-up.</li>
                    </ul>
                </div>
                <div class="bg-white dark:bg-card rounded-lg shadow p-6 flex flex-col items-center text-center">
                    <h3 class="text-2xl font-bold text-primary mb-2">What We Deliver</h3>
                    <ul class="list-disc pl-4 text-muted-foreground space-y-2 text-base text-left">
                        <li>Clear action plan or recommendations after the call, tailored to your needs.</li>
                        <li>Follow-up summary and next steps via email or WhatsApp within 24 hours.</li>
                        <li>Option for a detailed proposal, solution roadmap, or further engagement.</li>
                        <li>Access to our team for any clarifications or additional questions post-session.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-background">
        <div class="max-w-3xl mx-auto px-4 md:px-8 animate-fade-in">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-6 text-center">Frequently Asked
                Questions</h2>
            <div class="space-y-4">
                <div class="border border-border rounded-lg bg-muted/30">
                    <button class="w-full flex justify-between items-center px-6 py-4 text-lg font-medium text-left text-foreground focus:outline-none focus:ring-2 focus:ring-primary rounded-lg transition-colors faq-toggle">
                        <span>What happens after I schedule a consultation?</span><span class="ml-4 transition-transform rotate-180"><svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="m6 9 6 6 6-6"></path>
</svg></span>
                    </button>
                    <div class="px-6 pb-4 text-muted-foreground animate-fade-in">Our team will review your request
                        and reach out to confirm your preferred time slot. You'll receive a calendar invite and a
                        meeting link.
                    </div>
                </div>
                <div class="border border-border rounded-lg bg-muted/30">
                    <button class="w-full flex justify-between items-center px-6 py-4 text-lg font-medium text-left text-foreground focus:outline-none focus:ring-2 focus:ring-primary rounded-lg transition-colors faq-toggle">
                        <span>Is the consultation free?</span><span class="ml-4 transition-transform "><svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="m6 9 6 6 6-6"></path>
</svg></span>
                    </button>
                    <div class="px-6 pb-4 text-muted-foreground animate-fade-in">
                        No, you are charged a nominal fee for the consultation, which will be credited towards any future
                        services you choose to engage with us.
                    </div>
                </div>
                <div class="border border-border rounded-lg bg-muted/30">
                    <button class="w-full flex justify-between items-center px-6 py-4 text-lg font-medium text-left text-foreground focus:outline-none focus:ring-2 focus:ring-primary rounded-lg transition-colors faq-toggle">
                        <span>Can I reschedule or cancel my booking?</span><span class="ml-4 transition-transform "><svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="m6 9 6 6 6-6"></path>
</svg></span>
                    </button>
                    <div class="px-6 pb-4 text-muted-foreground animate-fade-in">
                        Absolutely! You can reschedule or cancel your consultation 24 hours before the scheduled time by
                        replying to the confirmation email or contacting our support team.
                    </div>
                </div>
                <div class="border border-border rounded-lg bg-muted/30">
                    <button class="w-full flex justify-between items-center px-6 py-4 text-lg font-medium text-left text-foreground focus:outline-none focus:ring-2 focus:ring-primary rounded-lg transition-colors faq-toggle">
                        <span>What should I prepare for the consultation?</span><span class="ml-4 transition-transform "><svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="m6 9 6 6 6-6"></path>
</svg></span>
                    </button>
                    <div class="px-6 pb-4 text-muted-foreground animate-fade-in">
                        Bring any relevant information about your project, goals, and challenges. The more details you
                        provide, the better we can help.
                    </div>
                </div>
                <div class="border border-border rounded-lg bg-muted/30">
                    <button class="w-full flex justify-between items-center px-6 py-4 text-lg font-medium text-left text-foreground focus:outline-none focus:ring-2 focus:ring-primary rounded-lg transition-colors faq-toggle">
                        <span>How long does the consultation last?</span><span class="ml-4 transition-transform "><svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="m6 9 6 6 6-6"></path>
</svg></span>
                    </button>
                    <div class="px-6 pb-4 text-muted-foreground animate-fade-in">
                        Consultations typically last 1-2 hours, but we can adjust based on your needs.
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    @php
    $config = config('consultation'); // PHP array
@endphp
<script>
    

document.addEventListener('DOMContentLoaded', function() {
    const dateInput = document.getElementById('consultation-date');
    const hoursInput = document.getElementById('consultation-hours');
    const slotInput = document.getElementById('time-slot');
    const slotOptions = document.getElementById("time-slot-options");

    function generateSlots(duration) {
        let slots = [];
        let startHour = 10;  // Start at 10:00
        let endHour = 18;    // End at 18:00

        for (let hour = startHour; hour + duration <= endHour; hour += duration) {
            let start = hour.toString().padStart(2, "0") + ":00";
            let end = (hour + duration).toString().padStart(2, "0") + ":00";
            slots.push(`${start} - ${end}`);
        }
        return slots;
    }

    function showSlots() {
        let duration = parseInt(hoursInput.value) || 1; // Default 1 hour
        let slots = generateSlots(duration);

        // Clear old options
        slotOptions.innerHTML = "";

        // Add new options
        slots.forEach(slot => {
            let div = document.createElement("div");
            div.textContent = slot;
            div.className = "px-3 py-2 hover:bg-gray-100 cursor-pointer";
            div.onclick = () => {
                slotInput.value = slot;
                slotOptions.classList.add("hidden");
            };
            slotOptions.appendChild(div);
        });
    }

    hoursInput.addEventListener("input", showSlots);
    dateInput.addEventListener("input", showSlots);
    slotInput.addEventListener("click", () => {
        slotOptions.classList.toggle("hidden");
    });
});
</script>

