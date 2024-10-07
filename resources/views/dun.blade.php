<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl sm:text-2xl text-center text-gray-900 leading-tight py-4">
            {{ __('Decentralized United Nations') }}
        </h2>
    </x-slot>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-500 to-teal-500 py-16 text-center text-white">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-5xl sm:text-4xl font-extrabold mb-6">Reimagine Global Governance with Decentralization</h1>
            <p class="text-xl sm:text-base mb-8">Join millions in advocating for a transparent, fair, and decentralized United Nations that empowers all nations equally.</p>
            <a href="#sign" class="bg-white text-blue-600 px-10 py-4 rounded-full text-xl sm:text-base font-semibold hover:bg-gray-100 transition duration-300">Sign the Petition</a>
        </div>
    </section>

       <!-- Timeline Section -->
       <section class="bg-gray-50 py-16">
        <div class="max-w-5xl mx-auto px-4">
            <h3 class="text-4xl sm:text-3xl font-semibold text-gray-800 mb-8 text-center">Journey Toward Decentralization</h3>
            <!-- Timeline Component -->
            <div class="relative">
                <!-- Vertical Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full border-l-2 border-blue-600"></div>
                <!-- Timeline Items -->
                <div class="space-y-12">
                    <!-- Item 1 -->
                    <div class="flex flex-col md:flex-row items-center md:space-x-8">
                        <div class="md:w-1/2 md:order-2">
                            <h4 class="text-2xl font-semibold mb-2">1919: League of Nations Established</h4>
                            <p class="text-gray-700">Formed after World War I to promote peace, but lacked enforcement power and universal membership.</p>
                        </div>
                        <div class="md:w-1/2 md:order-1 text-center">
                            <div class="w-12 h-12 bg-blue-600 text-white rounded-full mx-auto flex items-center justify-center mb-4">
                                <span class="font-bold">1919</span>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="flex flex-col md:flex-row items-center md:space-x-8">
                        <div class="md:w-1/2">
                            <h4 class="text-2xl font-semibold mb-2">1945: United Nations Founded</h4>
                            <p class="text-gray-700">Established post-World War II with the aim of preventing future conflicts, introducing the Security Council and veto power.</p>
                        </div>
                        <div class="md:w-1/2 text-center">
                            <div class="w-12 h-12 bg-blue-600 text-white rounded-full mx-auto flex items-center justify-center mb-4">
                                <span class="font-bold">1945</span>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <!-- Add more timeline items as needed -->
                    <!-- Item N -->
                    <div class="flex flex-col md:flex-row items-center md:space-x-8">
                        <div class="md:w-1/2 md:order-2">
                            <h4 class="text-2xl font-semibold mb-2">2024: Call for Decentralization</h4>
                            <p class="text-gray-700">Recognizing the need for a fairer system, we propose a decentralized model leveraging blockchain technology.</p>
                        </div>
                        <div class="md:w-1/2 md:order-1 text-center">
                            <div class="w-12 h-12 bg-blue-600 text-white rounded-full mx-auto flex items-center justify-center mb-4">
                                <span class="font-bold">2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Timeline Component -->
        </div>
    </section>

    <!-- Petition Counter -->
    <section class="bg-white py-12">
        <div class="max-w-5xl mx-auto text-center px-4">
            <h3 class="text-3xl sm:text-2xl font-semibold text-gray-800 mb-6">Global Support Growing</h3>
            <div class="text-6xl sm:text-4xl font-bold text-blue-600 mb-4">{{ number_format($signatureCount) }}</div>
            <p class="text-gray-700 text-lg mb-6">People have signed this petition from <span class="font-semibold">{{ $countryCount }}</span> countries.</p>
            <div class="relative w-full h-4 bg-gray-200 rounded-full overflow-hidden mb-4">
                <div class="absolute top-0 left-0 h-full bg-blue-600 rounded-full" style="width: {{ $progress }}%;"></div>
            </div>
            <p class="text-gray-700 text-lg">Help us reach our goal of 10 million signatures!</p>
        </div>
    </section>

    <!-- Petition Overview Section -->
    <section class="bg-gray-50 py-16">
        <div class="max-w-5xl mx-auto px-4">
            <h3 class="text-4xl sm:text-3xl font-semibold text-gray-800 mb-8 text-center">Why This Petition Matters</h3>
            <div class="text-lg sm:text-base text-gray-700 leading-relaxed space-y-6">
                <p>The current structure of the United Nations, established in the aftermath of World War II, has become outdated. The veto power held by a select few countries often stalls critical global decisions, undermining the principles of democracy and equality among nations.</p>
                <p>By leveraging blockchain technology, we can transition to a **Decentralized United Nations (DUN)** that ensures transparency, fairness, and equal representation. This new model promotes collective decision-making, reduces corruption, and empowers all member states.</p>
                <p>Signing this petition is a step toward global reform that addresses the challenges of the 21st century with innovative solutions.</p>
            </div>
            <div class="mt-8 text-center">
                <a href="#how-it-works" class="text-blue-600 font-semibold text-lg sm:text-base hover:text-blue-700">Learn How Decentralization Works</a>
            </div>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="bg-white py-16">
        <div class="max-w-5xl mx-auto px-4">
            <h3 class="text-4xl sm:text-3xl font-semibold text-gray-800 mb-12 text-center">Key Features of a Decentralized UN</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                            <!-- Icon SVG -->
                        </svg>
                    </div>
                    <h4 class="text-2xl font-semibold mb-2">Equal Representation</h4>
                    <p class="text-gray-700">Every nation has an equal voice, eliminating the disproportionate influence of powerful countries.</p>
                </div>
                <!-- Feature 2 -->
                <div class="text-center">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                            <!-- Icon SVG -->
                        </svg>
                    </div>
                    <h4 class="text-2xl font-semibold mb-2">Transparency</h4>
                    <p class="text-gray-700">Blockchain records all transactions and decisions, making them accessible and verifiable by all.</p>
                </div>
                <!-- Feature 3 -->
                <div class="text-center">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                            <!-- Icon SVG -->
                        </svg>
                    </div>
                    <h4 class="text-2xl font-semibold mb-2">Efficient Decision-Making</h4>
                    <p class="text-gray-700">Smart contracts automate processes, reducing bureaucracy and speeding up resolutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How Decentralization Will Work -->
    <section id="how-it-works" class="bg-gray-50 py-16">
        <div class="max-w-5xl mx-auto px-4">
            <h3 class="text-4xl sm:text-3xl font-semibold text-gray-800 mb-8 text-center">How Decentralization Will Work</h3>
            <div class="flex flex-col md:flex-row items-center md:space-x-8">
                <div class="md:w-1/2">
                    <img src="/dec-diagram.png" alt="Decentralization Diagram" class="w-full h-auto mb-8 md:mb-0"/>
                </div>
                <div class="md:w-1/2">
                    <ul class="list-disc list-inside text-lg sm:text-base text-gray-700 space-y-4">
                        <li><strong>Distributed Ledger:</strong> All member nations have access to a shared ledger that records all activities.</li>
                        <li><strong>Consensus Mechanisms:</strong> Decisions are made through consensus algorithms that require majority agreement.</li>
                        <li><strong>Smart Contracts:</strong> Automate agreements and ensure compliance without the need for intermediaries.</li>
                        <li><strong>Secure Voting:</strong> Blockchain-based voting systems prevent fraud and ensure accurate representation.</li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 text-center">
                <a href="#research" class="text-blue-600 font-semibold text-lg sm:text-base hover:text-blue-700">Read the Full Research Paper</a>
            </div>
        </div>
    </section>

    <!-- Research Paper Section -->
    <section id="research" class="bg-white py-16">
        <div class="max-w-5xl mx-auto px-4">
            <h3 class="text-4xl sm:text-3xl font-semibold text-gray-800 mb-8 text-center">Research Paper: A Case for Decentralization</h3>
            <div class="text-lg sm:text-base text-gray-700 leading-relaxed space-y-6">
                <p>Our comprehensive research paper explores the historical context of international governance, the shortcomings of the current UN structure, and how blockchain technology can address these issues.</p>
                <p>Key highlights include:</p>
                <ul class="list-disc list-inside space-y-2">
                    <li>Analysis of the League of Nations and its transition to the UN.</li>
                    <li>Case studies on the UN's challenges in conflict resolution.</li>
                    <li>An in-depth look at blockchain applications in governance.</li>
                    <li>Practical steps toward implementing a Decentralized United Nations.</li>
                </ul>
            </div>
            <div class="mt-8 text-center">
                <a href="{{ asset('pdfs/research-paper.pdf') }}" target="_blank" class="bg-blue-600 text-white px-10 py-4 rounded-full text-lg sm:text-base font-semibold hover:bg-blue-700 transition duration-300">Download the Research Paper</a>
            </div>
        </div>
    </section>

 

    <!-- Sign the Petition -->
    <section id="sign" class="bg-white py-16">
        <div class="max-w-5xl mx-auto px-4">
            <h3 class="text-4xl sm:text-3xl font-semibold text-gray-800 mb-8 text-center">Add Your Voice</h3>
            <p class="text-lg sm:text-base text-gray-700 mb-12 text-center">Sign the petition to support the movement toward a Decentralized United Nations. Your signature makes a difference.</p>
            <form action="{{ route('petition.sign') }}" method="POST" class="max-w-xl mx-auto bg-gray-100 p-8 rounded-lg shadow-md">
                @csrf
                <div class="mb-6">
                    <input type="text" name="name" placeholder="Your Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <input type="email" name="email" placeholder="Your Email" class="w-full px-4 py-3 border border-gray-300 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <select name="country_id" class="w-full px-4 py-3 border border-gray-300 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="" disabled selected>Select Your Country</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('country_id')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="receive_updates" class="form-checkbox text-blue-600">
                        <span class="ml-2 text-gray-700">I want to receive updates about this petition</span>
                    </label>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-blue-700 transition duration-300">Sign Now</button>
                </div>
            </form>
        </div>
    </section>

    {{-- 
    <!-- Testimonials Section -->
    <section class="bg-gray-50 py-16">
        <div class="max-w-5xl mx-auto px-4">
            <h3 class="text-4xl sm:text-3xl font-semibold text-gray-800 mb-12 text-center">Voices for Change</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p class="text-gray-700 italic">"A decentralized UN is the future of global cooperation. It ensures that every nation has an equal say in matters that affect us all."</p>
                    <div class="mt-4 flex items-center">
                        <img src="/images/user1.jpg" alt="User 1" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="text-gray-800 font-semibold">Dr. Maria Fernandez</p>
                            <p class="text-gray-600 text-sm">Political Scientist</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p class="text-gray-700 italic">"Blockchain can revolutionize how international decisions are made. This petition is a step toward a more transparent world."</p>
                    <div class="mt-4 flex items-center">
                        <img src="/images/user2.jpg" alt="User 2" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="text-gray-800 font-semibold">Alex Chen</p>
                            <p class="text-gray-600 text-sm">Blockchain Developer</p>
                        </div>
                    </div>
                </div>
                <!-- Add more testimonials as needed -->
            </div>
        </div>
    </section>
    --}}

    <!-- Footer Call to Action -->
    <section class="bg-blue-600 py-12 text-center text-white">
        <div class="max-w-5xl mx-auto px-4">
            <h3 class="text-3xl sm:text-2xl font-semibold mb-4">Ready to Make a Difference?</h3>
            <p class="text-lg sm:text-base mb-6">Your signature can help reshape global governance. Stand with us in advocating for a decentralized future.</p>
            <a href="#sign" class="bg-white text-blue-600 px-10 py-4 rounded-full text-lg sm:text-base font-semibold hover:bg-gray-100 transition duration-300">Sign the Petition Now</a>
        </div>
    </section>

</x-app-layout>