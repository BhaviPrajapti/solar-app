<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
   
<main>
        
text-base md:text-lg text-muted-foreground leading-relaxed max-w-3xl mx-auto
<section aria-label="Notifications alt+T" tabindex="-1" aria-live="polite" aria-relevant="additions text" aria-atomic="false"></section>
<div class="min-h-screen bg-gradient-subtle flex items-center justify-center p-4">
  <div class="w-full max-w-2xl">
    <div class="text-center mb-8">
      <h1 class="text-4xl font-bold text-foreground mb-2">Get Started</h1>
      <p class="text-muted-foreground">Let's find the perfect solution for your needs</p>
    </div>

    <div class="mb-12">
      <div class="flex items-center justify-between mb-4">
        <div class="steps-value w-8 h-8 rounded-full flex items-center justify-center text-sm font-medium bg-primary text-white">1</div>
        <div class="steps-value w-8 h-8 rounded-full flex items-center justify-center text-sm font-medium bg-gray-200 text-gray-500">2</div>
        <div class="steps-value w-8 h-8 rounded-full flex items-center justify-center text-sm font-medium bg-gray-200 text-gray-500">3</div>
        <div class="steps-value w-8 h-8 rounded-full flex items-center justify-center text-sm font-medium bg-gray-200 text-gray-500">4</div>
        <div class="steps-value w-8 h-8 rounded-full flex items-center justify-center text-sm font-medium bg-gray-200 text-gray-500">5</div>
      </div>
      <div class="w-full bg-gray-200 rounded-full h-2">
        <div class="step-line bg-primary h-2 rounded-full transition-all duration-300" style="width: 0%;"></div>
      </div>
    </div>
    <!-- <div class="flex justify-center mb-8">
      <div class="flex items-center space-x-2" id="stepProcess">
        <div class="flex items-center">
          <div class=" steps-value w-8 h-8 rounded-full flex items-center justify-center text-sm font-medium transition-colors bg-primary  bg-muted ">1</div>
          <div class="w-12 h-0.5 mx-2 transition-colors bg-muted"></div>
        </div>
        <div class="flex items-center">
          <div class="steps-value w-8 h-8 rounded-full flex items-center justify-center text-sm font-medium transition-colors bg-muted text-muted-foreground">2</div>
          <div class="w-12 h-0.5 mx-2 transition-colors bg-muted"></div>
        </div>
        <div class="flex items-center">
          <div class="steps-value w-8 h-8 rounded-full flex items-center justify-center text-sm font-medium transition-colors bg-muted text-muted-foreground">3</div>
          <div class="w-12 h-0.5 mx-2 transition-colors bg-muted"></div>
        </div>
        <div class="flex items-center">
          <div class="steps-value w-8 h-8 rounded-full flex items-center justify-center text-sm font-medium transition-colors bg-muted text-muted-foreground">4</div>
          <div class="w-12 h-0.5 mx-2 transition-colors bg-muted"></div>
        </div>
        <div class="flex items-center">
          <div class="steps-value w-8 h-8 rounded-full flex items-center justify-center text-sm font-medium transition-colors bg-muted text-muted-foreground">5</div>
        </div>
      </div>
    </div> -->
    <div class="rounded-lg border bg-card text-card-foreground shadow-lg">
      <div class="p-8">
        <form id="multiStepForm" class="bg-white p-6 rounded-lg shadow-md">
          <input type="hidden" name="_token" value="7sYMuDDNy49MtRJxcd5ebXB7wJzWld6r1egdHMtd" autocomplete="off">                              <!-- Step 1: Checkboxes -->
          <div id="step1" class="form-step">

            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-8">
              <div class="p-0">
                <div class="space-y-6">
                  <div class="text-center space-y-4">
                    <h2 class="text-3xl font-bold text-foreground">
                      Choose Your Product
                    </h2>
                    <p class="text-muted-foreground">
                      Select the solution that best fits your business needs
                    </p>
                  </div>
                  <div class="grid gap-6">
                    <label class="rounded-lg border bg-card text-card-foreground shadow-sm cursor-pointer transition-all duration-200 hover:shadow-card">
                      <div class="flex flex-col space-y-1.5 p-6">
                        <div class="flex items-center justify-between">
                          <div>
                            <input name="step1-selection" type="checkbox" id="myCheckbox" value="  BizCRM App" class="form-checkbox text-blue-600 border border-primary h-4 w-4 shrink-0 rounded-sm mt-1 ">
                            <h3 class="font-semibold tracking-tight text-xl">
                              BizCRM App
                            </h3>
                            
                            <p class="text-sm text-muted-foreground">
                              Complete CRM and business management suite
                            </p>
                      
                          </div>
                          <svg class="h-6 w-6 text-primary hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
  <path d="m9 11 3 3L22 4"></path>
</svg>                        </div>
                      </div>
                      <div class="p-6 pt-0">
                        <div class="flex flex-wrap gap-2">
                          <span class="px-3 py-1 bg-background-alt rounded-full text-sm text-muted-foreground">Sales tracking</span><span class="px-3 py-1 bg-background-alt rounded-full text-sm text-muted-foreground">Project management</span><span class="px-3 py-1 bg-background-alt rounded-full text-sm text-muted-foreground">Employee management</span><span class="px-3 py-1 bg-background-alt rounded-full text-sm text-muted-foreground">Payroll &amp; attendance</span>
                        </div>
                      </div>
</label>
                    <label class="rounded-lg border bg-card text-card-foreground shadow-sm cursor-pointer transition-all duration-200 hover:shadow-card">
                      <div class="flex flex-col space-y-1.5 p-6">
                        <div class="flex items-center justify-between">
                          <div>
                            <input name="step1-selection" type="checkbox" id="myCheckbox" value=" Bizwachat" class="form-checkbox text-blue-600 border border-primary h-4 w-4 shrink-0 rounded-sm mt-1 ">
                            <h3 class="font-semibold tracking-tight text-xl">
                              Bizwachat
                            </h3>
                            <p class="text-sm text-muted-foreground">
                              WhatsApp Business API platform
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="p-6 pt-0">
                        <div class="flex flex-wrap gap-2">
                          <span class="px-3 py-1 bg-background-alt rounded-full text-sm text-muted-foreground">Bulk messaging</span><span class="px-3 py-1 bg-background-alt rounded-full text-sm text-muted-foreground">Automation flows</span><span class="px-3 py-1 bg-background-alt rounded-full text-sm text-muted-foreground">Customer engagement</span><span class="px-3 py-1 bg-background-alt rounded-full text-sm text-muted-foreground">E-commerce integration</span>
                        </div>
                      </div>
                    </label>
                    <label class="rounded-lg border bg-card text-card-foreground shadow-sm cursor-pointer transition-all duration-200 hover:shadow-card">
                      <div class="flex flex-col space-y-1.5 p-6">
                        <div class="flex items-center justify-between">
                          <div>
                            <input name="step1-selection" type="checkbox" id="myCheckbox" value="BizTapID" class="form-checkbox text-blue-600 border border-primary h-4 w-4 shrink-0 rounded-sm mt-1 ">
                            <h3 class="font-semibold tracking-tight text-xl">
                              BizTapID
                            </h3>
                            <p class="text-sm text-muted-foreground">
                              Smart digital business cards
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="p-6 pt-0">
                        <div class="flex flex-wrap gap-2">
                          <span class="px-3 py-1 bg-background-alt rounded-full text-sm text-muted-foreground">NFC &amp; QR codes</span><span class="px-3 py-1 bg-background-alt rounded-full text-sm text-muted-foreground">WhatsApp Store</span><span class="px-3 py-1 bg-background-alt rounded-full text-sm text-muted-foreground">Online payments</span><span class="px-3 py-1 bg-background-alt rounded-full text-sm text-muted-foreground">Appointment booking</span>
                        </div>
                      </div>
</label>
                  </div>
                </div>
                <div class="mt-2"> <span id="selectError" class="error text-red-500 text-sm mt-1"></span></div>
                <div class="flex justify-between mt-8 pt-6 border-t border-border">
                  <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2" disabled="">
                    Back</button>

                  <button onclick="nextStep()" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">Next<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 h-4 w-4">
                      <path d="M5 12h14"></path>
                      <path d="m12 5 7 7-7 7"></path>
                    </svg></button>
                </div>
              </div>
            </div>


            <!-- <p id="errorMsg" class="text-red-500 text-sm mt-1 hidden">Please select an option to proceed.</p> -->


          </div>

          <!-- Step 2 -->
          <div id="step2" class="form-step hidden">
            <!-- <h2 class="text-2xl font-bold mb-4">Step 2: Your Details</h2>
          <input
            type="text"
            placeholder="Name"
            class="w-full p-2 mb-4 border rounded"
          /> -->

            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-8">
              <div class="p-0">
                <div class="space-y-6">
                  <div class="text-center space-y-4">
                    <h2 class="text-3xl font-bold text-foreground">
                      Your Information
                    </h2>
                    <p class="text-muted-foreground">
                      Tell us about yourself and your business
                    </p>
                  </div>
                  <div class="grid gap-4">
                    <div class="grid grid-cols-2 gap-4">
                      <div class="space-y-2">
                        <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="name">Full Name <span class="text-red-500"> * </span></label><input name="name" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="name" placeholder="Enter your full name" value="" required="">
                        <span id="nameError" class="error text-red-500 text-sm mt-1"></span>
                      </div>
                      <div class="space-y-2">
                        <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="email">Email Address <span class="text-red-500"> * </span></label><input name="email" type="email" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="email" placeholder="Enter your email" value="" required="">
                        <span id="emailError" class="error text-red-500 text-sm mt-1"></span>
                      </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                      <div class="space-y-2">
                        <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="phone">Phone Number <span class="text-red-500"> * </span></label><input name="phone" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="phone" placeholder="+91 9876543210" value="" required="">
                        <span id="phoneError" class="error text-red-500 text-sm mt-1"></span>
                      </div>
                      <div class="space-y-2">
                        <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="company">Company Name</label><input name="company" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="company" placeholder="Enter your company name" value="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="flex justify-between mt-8 pt-6 border-t border-border">
                  <button onclick="prevStep()" class="justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 flex items-center">
                    Previous</button><button type="button" onclick="nextStep()" class="justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex items-center">
                    Next
                  </button>
                </div>
              </div>
            </div>
            <!-- <button
            type="button"
            onclick="prevStep()"
            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2"
          >
            Previous
          </button>
          <button
            type="button"
            onclick="nextStep()"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
          >
            Next
          </button> -->
          </div>

          <!-- Step 3 -->
          <div id="step3" class="form-step hidden">
            <!-- <h2 class="text-2xl font-bold mb-4">Step 3: More Information</h2>
          <textarea
            placeholder="Address"
            class="w-full p-2 mb-4 border rounded"
          ></textarea> -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-8">
              <div class="p-0">
                <div class="space-y-6">
                  <div class="text-center space-y-4">
                    <h2 class="text-3xl font-bold text-foreground">
                      What's Your Main Challenge?
                    </h2>
                    <p class="text-muted-foreground">
                      Help us understand your primary business challenge
                    </p>
                  </div>
                  <div class="space-y-4">
                    <div class="space-y-2">
                      <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="problem">Select your main challenge <span class="text-red-500"> * </span></label><button type="button" role="combobox" aria-controls="radix-:r5:" aria-expanded="false" aria-autocomplete="none" dir="ltr" data-state="closed" class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 [&amp;&gt;span]:line-clamp-1">
                        <select id="mainChallenges" name="main_challenges" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm">
                          <option value="">
                            Select From Option
                          </option>
                          <option value="Managing" >
                            Managing customer relationships and sales pipeline
                          </option>
                          <option value="Streamlining" >
                            Streamlining team communication and collaboration
                          </option>
                          <option value="Automating" >
                            Automating WhatsApp marketing and customer support
                          </option>
                          <option value="Digitizing" >
                            Digitizing business cards and networking
                          </option>
                          <option value="Tracking" >
                            Tracking employee attendance and payroll
                          </option>
                          <option value="Managing" >
                            Managing projects and deadlines
                          </option>
                          <option value="Accepting" >
                            Accepting online payments and bookings
                          </option>
                          <option value="Other">
                            Other (please specify in additional details)
                          </option>
                        </select>
                      </button>
                    </div>
                    <div class="space-y-2">
                      <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="details">Additional Details (Optional)</label><textarea class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="details" placeholder="Tell us more about your specific needs or challenges..." rows="4"></textarea>
                    </div>
                  </div>
                </div>
                <div class="mt-2"> <span id="selectOptionError" class="error text-red-500 text-sm mt-1"></span></div>
                <div class="flex justify-between mt-8 pt-6 border-t border-border">
                  <button onclick="prevStep()" class="justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 flex items-center">
                    Previous</button>
                    <button type="button" onclick="nextStep()" class="justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex items-center">
                    Next
                  </button>
                </div>
              </div>
            </div>
            <!-- <button
            type="button"
            onclick="prevStep()"
            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2"
          >
            Previous
          </button>
          <button
            type="button"
            onclick="nextStep()"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
          >
            Next
          </button> -->
          </div>

          <!-- Step 4 -->
          <div id="step4" class="form-step hidden">
            <!-- <h2 class="text-2xl font-bold mb-4">Step 4: Review</h2>
          <p class="mb-4">Review your selections and information.</p> -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-8">
              <div class="p-0">
                <div class="space-y-6">
                  <div class="text-center space-y-4">
                    <h2 class="text-3xl font-bold text-foreground">
                      Schedule Your Demo
                    </h2>
                    <p class="text-muted-foreground">
                      Pick a convenient date and time for your personalized demo
                    </p>
                  </div>
                  <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                      <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Select Date <span class="text-red-500"> * </span></label>
                      <input class="ml-2" type="date" id="myDateInput" name="date">
                      <div class="mt-2"> <span id="dateError" class="error text-red-500 text-sm mt-1"></span></div>
                    </div>
                    <div class="space-y-4">
                      <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Select Time <span class="text-red-500"> * </span></label><input type="time" class="ml-2" id="myTimeInput" name="time">
                      <div class="mt-2"> <span id="timeError" class="error text-red-500 text-sm mt-1"></span></div>
                    </div>
                  </div>
                  <div class="bg-background-alt rounded-lg p-4 space-y-2">
                    <h4 class="font-semibold text-foreground">Demo Details:</h4>
                    <ul class="text-sm text-muted-foreground space-y-1">
                      <li>• 30-minute personalized demonstration</li>
                      <li>• Live Q&amp;A with our product expert</li>
                      <li>• Custom setup guidance for your business</li>
                      <li>• Special onboarding offer discussion</li>
                    </ul>
                  </div>
                </div>
                <div class="flex justify-between mt-8 pt-6 border-t border-border">
                  <button onclick="prevStep()" class="justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 flex items-center">
                    Previous </button><button type="button" onclick="nextStep()" class="justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex items-center">
                    Next
                  </button>
                </div>
              </div>
            </div>
            <!-- <button
            type="button"
            onclick="prevStep()"
            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2"
          >
            Previous
          </button>
          <button
            type="button"
            onclick="nextStep()"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
          >
            Next
          </button> -->
          </div>

          <!-- Step 5: Confirmation -->
          <div id="step5" class="form-step hidden">
            <!-- <h2 class="text-2xl font-bold mb-4">Step 5: Confirmation</h2>
          <p class="text-green-600 font-bold text-lg mb-4">
            Your form has been submitted successfully!
          </p>
          <p>Thank you for providing your information.</p> -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-8">
              <div class="p-0">
                <div class="text-center space-y-8">
                  <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto">

                    <svg class="h-10 w-10 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
  <path d="m9 11 3 3L22 4"></path>
</svg>                  </div>
                  <div class="space-y-4">
                    <h2 class="text-3xl font-bold text-foreground">
                      Demo Scheduled Successfully!
                    </h2>
                    <p class="text-muted-foreground max-w-md mx-auto">
                      Thank you for your interest in Palz.in. We've sent you a
                      confirmation email with all the details.
                    </p>
                  </div>
                  <div class="bg-background-alt rounded-lg p-6 max-w-md mx-auto">
                    <h4 class="font-semibold text-foreground mb-4">
                      Your Demo Details:
                    </h4>
                    <div class="space-y-2 text-sm">
                      <div class="flex justify-between">
                        <span class="text-muted-foreground">Product:</span><span class="font-medium" id="productValue">Bizwachat</span>
                      </div>
                      <div class="flex justify-between">
                        <span class="text-muted-foreground">Date:</span><span id="dateValue" class="font-medium">August 22nd, 2025</span>
                      </div>
                      <div class="flex justify-between">
                        <span class="text-muted-foreground">Time:</span><span id="timeValue" class="font-medium">11:00 AM</span>
                      </div>
                    </div>
                  </div>
                  <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                      Back to Home</button><button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                      Contact Support
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>


 




          </div></div></div></main>
</body>
</html>
     <script>
        let currentStep = 1;
        let index = 0;
        const totalSteps = 5;
        let isValid = true;

        const nameInput = document.getElementById("name");
        const emailInput = document.getElementById("email");
        const phoneInput = document.getElementById("phone");
        const nameError = document.getElementById("nameError");
        const emailError = document.getElementById("emailError");
        const phoneError = document.getElementById("phoneError");
        const selectError = document.getElementById("selectError");
        const selectOptionError = document.getElementById("selectOptionError");
        const dateError = document.getElementById("dateError");
        const timeError = document.getElementById("timeError");

        function setProcessBar(stepIndex) {
          const steps = document.querySelectorAll('.steps-value');
          //const stepLine = document.querySelector('.step-line');
          steps.forEach((step, index) => {
            if (index === stepIndex) {
              step.classList.add('bg-primary','text-white');
              step.classList.remove('bg-muted','text-gray-500');
            } else {
              step.classList.add('bg-muted','text-gray-500');
              step.classList.remove('bg-primary','text-white');
            }

          });
          // const precent = ((currentStep-1)/(totalStep-1))*100;
          // stepLine.style.width= precent + '%';
        }

        function setProcessBarLine(step){
            const ProgressBar= document.querySelector('.step-line');
            const percent  = (step / totalSteps) * 100;
            if(ProgressBar){

              ProgressBar.style.width = percent + '%';
            }
        }

        function getCheckedCheckboxValues() {
          const checkboxes = document.querySelectorAll('input[type="checkbox"]');
          const checkedValues = [];

          checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
              checkedValues.push(checkbox.value);
              
            }
          });

          return checkedValues;
        }

        function showStep(stepNumber) {
          for (let i = 1; i <= totalSteps; i++) {
            document.getElementById(`step${i}`).classList.add("hidden");

          }
          document.getElementById(`step${stepNumber}`).classList.remove("hidden");
          setProcessBar(stepNumber - 1);  
        }

        function nextStep() {
          if (currentStep < totalSteps ) {
            console.log(currentStep);
            console.log(index);



            var selectedProducts = getCheckedCheckboxValues();
            console.log("Checked values:", selectedProducts);

            console.log(selectedProducts);

            if (currentStep == 1) {

              if (selectedProducts.length === 0) {
                selectError.textContent = "Please select an option to proceed";
                return false;
              }
              

            }

            if (currentStep == 2) {
              if (nameInput.value.trim() === "") {
                nameError.textContent = "Name is required.";
                isValid = false;
                return false;
              }
              const nameValue = nameInput.value;
              console.log(nameValue);

              if (emailInput.value.trim() === "") {
                const emailValue = emailInput.value;
                emailError.textContent = "Email is required.";
                isValid = false;
                return false;
              }
              if (phoneInput.value.trim() === "") {
                const phoneValue = phoneInput.value;
                phoneError.textContent = "Phone No. is required.";
                isValid = false;
                return false;
              }
              
            }

            if (currentStep == 3) {
              const selectedProblem = document.getElementById("mainChallenges");
              const selectedValue = selectedProblem.value;

              console.log(selectedValue);

              if (selectedValue == "") {
                selectOptionError.textContent = "Please select an option to proceed";
                return false;
              }
            }

            if (currentStep == 4) {
              const dateInput = document.getElementById("myDateInput");
              const selectedDateString = dateInput.value;
              const selectedDate = new Date(selectedDateString);
              console.log("Selected Date (string):", selectedDateString);

              const timeInput = document.getElementById("myTimeInput");
              const selectedTimeString = timeInput.value;

              console.log("Selected time (string):", selectedTimeString);

              if (selectedDateString == "") {
                dateError.textContent = "Please select date to proceed";
                return false;
              }
              if (selectedTimeString == "") {
                timeError.textContent = "Please select time to proceed";
                return false;
              }
            }
            currentStep++;
            index++;
            showStep(currentStep);
            setProcessBar(currentStep-1);
            setProcessBarLine(currentStep);
            if (currentStep == 5) {
              // $('#productValue').html(selectedProducts); 
              $("#productValue").html(selectedProducts.toString());
              console.log("Checked values:", selectedProducts);
              const nameValue = nameInput.value;
              // $("#productValue").html(nameValue);
              console.log(nameValue);
              const emailValue = emailInput.value;
              console.log(emailValue);
              const phoneValue = phoneInput.value;
              console.log(phoneValue);
              const selectedProblem = document.getElementById("mainChallenges");
              const selectedValue = selectedProblem.value;
              console.log(selectedValue);
              const dateInput = document.getElementById("myDateInput");
              const selectedDateString = dateInput.value;
              const selectedDate = new Date(selectedDateString);
              $("#dateValue").html(selectedDateString);
              console.log("Selected Date (string):", selectedDateString);
              const timeInput = document.getElementById("myTimeInput");
              const selectedTimeString = timeInput.value;
              $("#timeValue").html(selectedTimeString);
              console.log("Selected time (string):", selectedTimeString);

            }


          }
        }

        function prevStep() {
          if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
            setProcessBar(currentStep);
            setProcessBarLine(currentStep);
          }
        }

        // Initialize the form to show the first step
        document.addEventListener("DOMContentLoaded", () => {
          showStep(currentStep);
          //setProcessBar(currentStep);
          setProcessBarLine(currentStep);
          
        });
      </script>
