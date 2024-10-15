<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Support Us') }}
        </h2>
    </x-slot>


<!-- Support Us Page -->

<div class="container mx-auto p-4">
    <!-- Introduction Section -->
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold mb-4">Support Our Mission </h1>
        <p>Contribute to the project to reveal the truth, end injustice and achieve justice.</p>
    </div>

    
    
    <!-- Cryptocurrency Donations Section -->
    <div x-data="{ copied: false, copiedText: '' }" class="bg-gradient-to-b from-stone-400 to-stone-500 py-10 px-6 rounded-lg shadow-md text-center mb-6">
        <div class="flex flex-col items-center">
            
            <!-- Cryptocurrency Wallet Addresses -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-6">
                <!-- Bitcoin -->
                <div class="bg-white rounded-lg p-4">
                    <h3 class="text-xl font-semibold text-amber-500 mb-2">Bitcoin (BTC)</h3>
                    <p x-ref="btcAddress" class="text-gray-700 break-words">bc1qzh7vpg84gw9ggrx0gyd02cvyt95lxndr7aw8l6</p>
                    <img src="images/BTC.png" alt="Bitcoin QR Code" class="w-24 h-24 mx-auto mt-4">
                    <button @click="navigator.clipboard.writeText($refs.btcAddress.textContent).then(() => { copied = true; copiedText = 'BTC'; setTimeout(() => { copied = false; copiedText = ''; }, 2000); })" class="text-amber-500 hover:underline mt-4" x-text="copied && copiedText === 'BTC' ? 'Copied to Clipboard' : 'Copy Address'"></button>
                </div>
                
                <!-- Ethereum -->
                <div class="bg-white rounded-lg p-4">
                    <h3 class="text-xl font-semibold text-slate-400 mb-2">Ethereum (ETH)</h3>
                    <p x-ref="ethAddress" class="text-gray-700 break-words">0xAaec23D5c9BaDE604fA89201b83717bddcd87A95</p>
                    <img src="images/ETH.png" alt="Ethereum QR Code" class="w-24 h-24 mx-auto mt-4">
                    <button @click="navigator.clipboard.writeText($refs.ethAddress.textContent).then(() => { copied = true; copiedText = 'ETH'; setTimeout(() => { copied = false; copiedText = ''; }, 2000); })" class="text-slate-400 hover:underline mt-4" x-text="copied && copiedText === 'ETH' ? 'Copied to Clipboard' : 'Copy Address'"></button>
                </div>
                
                <!-- USDT -->
                <div class="bg-white rounded-lg p-4">
                    <h3 class="text-xl font-semibold text-cyan-500 mb-2">Tether USD (USDT)</h3>
                <p x-ref="usdtAddress" class="text-gray-700 break-words">0xAaec23D5c9BaDE604fA89201b83717bddcd87A95</p>
                <img src="images/USDT.png" alt="Tether USD QR Code" class="w-24 h-24 mx-auto mt-4">
                <button @click="navigator.clipboard.writeText($refs.usdtAddress.textContent).then(() => { copied = true; copiedText = 'USDT'; setTimeout(() => { copied = false; copiedText = ''; }, 2000); })" class="text-cyan-500 hover:underline mt-4" x-text="copied && copiedText === 'USDT' ? 'Copied to Clipboard' : 'Copy Address'"></button>
            </div>
            
            <!-- Litecoin -->
            <div class="bg-white rounded-lg p-4">
                <h3 class="text-xl font-semibold text-neutral-500 mb-2">Litecoin (LTC)</h3>
                <p x-ref="ltcAddress" class="text-gray-700 break-words">Lgzv3kyfyLbNKnMXWTAgxeoDuszZMFJrjG</p>
                <img src="images/LTC.png" alt="Litecoin QR Code" class="w-24 h-24 mx-auto mt-4">
                <button @click="navigator.clipboard.writeText($refs.ltcAddress.textContent).then(() => { copied = true; copiedText = 'LTC'; setTimeout(() => { copied = false; copiedText = ''; }, 2000); })" class="text-neutral-500 hover:underline mt-4" x-text="copied && copiedText === 'LTC' ? 'Copied to Clipboard' : 'Copy Address'"></button>
            </div>
            
            <!-- Solana -->
            <div class="bg-white rounded-lg p-4">
                <h3 class="text-xl font-semibold text-violet-500 mb-2">Solana (SOL)</h3>
                <p x-ref="solAddress" class="text-gray-700 break-words">54bnNWWfayX9SVnTMGLyGWscLncMs19gBVavTvcnW3Me</p>
                <img src="images/SOL.png" alt="Solana QR Code" class="w-24 h-24 mx-auto mt-4">
                <button @click="navigator.clipboard.writeText($refs.solAddress.textContent).then(() => { copied = true; copiedText = 'SOL'; setTimeout(() => { copied = false; copiedText = ''; }, 2000); })" class="text-violet-500 hover:underline mt-4" x-text="copied && copiedText === 'SOL' ? 'Copied to Clipboard' : 'Copy Address'"></button>
            </div>
            
            <!-- USD Coin -->
            <div class="bg-white rounded-lg p-4">
                <h3 class="text-xl font-semibold text-sky-500 mb-2">USD Coin (USDC)</h3>
                <p x-ref="usdcAddress" class="text-gray-700 break-words">0xAaec23D5c9BaDE604fA89201b83717bddcd87A95</p>
                <img src="images/USDC.png" alt="USD Coin QR Code" class="w-24 h-24 mx-auto mt-4">
                <button @click="navigator.clipboard.writeText($refs.usdcAddress.textContent).then(() => { copied = true; copiedText = 'USDC'; setTimeout(() => { copied = false; copiedText = ''; }, 2000); })" class="text-sky-500 hover:underline mt-4" x-text="copied && copiedText === 'USDC' ? 'Copied to Clipboard' : 'Copy Address'"></button>
            </div>
        </div>
        
        <p class="text-white text-sm mb-2">⚠️ <strong>Important:</strong> Please ensure you are sending the correct cryptocurrency to the corresponding address. Transactions are irreversible.</p>
        <p class="text-white text-sm">🔒 All donations are securely processed and used exclusively for supporting our mission. Thank you for your generosity and support!</p>
    </div>
</div>


{{--
    <!-- Direct Donations Section -->
    <div class="bg-gradient-to-b from-red-400 to-red-500 py-10 px-6 rounded-lg shadow-md text-center mb-6">
        <div class="flex flex-col items-center">
            <h2 class="text-2xl font-semibold text-white mb-4">Make a Direct Donation</h2>
            <p class="text-lg text-white mb-4">Support our cause with a direct donation. Your contribution makes a significant impact!</p>
    
            <!-- Donation Methods -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-6">
                <!-- PayPal -->
                <div class="bg-white rounded-lg p-4">
                    <h3 class="text-xl font-semibold text-blue-500 mb-2">PayPal</h3>
                    <p class="text-gray-700">Donate securely via PayPal:</p>
                    <a href="https://www.paypal.com/donate?hosted_button_id=your_paypal_button_id" target="_blank" class="text-blue-500 hover:underline mt-4">Donate Now</a>
                </div>
    
                <!-- Stripe -->
                <div class="bg-white rounded-lg p-4">
                    <h3 class="text-xl font-semibold text-gold-500 mb-2">Stripe</h3>
                    <p class="text-gray-700">Make a donation using your credit card:</p>
                    <a href="#" class="text-gold-500 hover:underline mt-4">Donate Now</a>
                </div>
    
                <!-- Bank Transfer -->
                <div class="bg-white rounded-lg p-4">
                    <h3 class="text-xl font-semibold text-green-500 mb-2">Bank Transfer</h3>
                    <p class="text-gray-700">Contribute directly to our bank account:</p>
                    <button class="text-green-500 hover:underline mt-4 copy-button">Copy Account Details</button>
                </div>
            </div>
    
            <p class="text-white text-sm">Your support is greatly appreciated. Thank you for making a difference!</p>
        </div>
    </div> 
<!-- Membership/Subscriptions Section -->
<div class="bg-gradient-to-b from-blue-400 to-blue-500 py-10 px-6 rounded-lg shadow-md text-center mb-6">
    <div class="flex flex-col items-center">
        <h2 class="text-2xl font-semibold text-white mb-4">Join Our Community</h2>
        <p class="text-lg text-white mb-4">Unlock exclusive content and benefits by becoming a member of our community. Choose the membership tier that suits you best!</p>

        <!-- Membership Tiers -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-6">
            <!-- Tier 1 -->
            <div class="bg-white rounded-lg p-4">
                <h3 class="text-xl font-semibold text-blue-500 mb-2">Bronze Member</h3>
                <p class="text-gray-700">Access to exclusive posts and updates.</p>
                <p class="text-gray-700">Monthly newsletter.</p>
                <a href="#" class="text-blue-500 hover:underline mt-4">Join Now</a>
            </div>

            <!-- Tier 2 -->
            <div class="bg-white rounded-lg p-4">
                <h3 class="text-xl font-semibold text-gold-500 mb-2">Silver Member</h3>
                <p class="text-gray-700">Everything in Bronze, plus:</p>
                <p class="text-gray-700">Early access to new content.</p>
                <a href="#" class="text-gold-500 hover:underline mt-4">Join Now</a>
            </div>

            <!-- Tier 3 -->
            <div class="bg-white rounded-lg p-4">
                <h3 class="text-xl font-semibold text-purple-500 mb-2">Gold Member</h3>
                <p class="text-gray-700">Everything in Silver, plus:</p>
                <p class="text-gray-700">Exclusive Q&A sessions.</p>
                <a href="#" class="text-purple-500 hover:underline mt-4">Join Now</a>
            </div>
        </div>

        <p class="text-white text-sm">Already a member? <a href="#" class="text-blue-200 hover:underline">Sign In</a></p>
    </div>
</div>


<div class="py-10 px-6 mb-6 rounded-lg shadow-md text-center">
    <div class="grid md:grid-cols-3 gap-6">
        <!-- Support on Ko-fi Section -->
        <div class="bg-gradient-to-b from-orange-400 to-orange-500 rounded-lg p-4 flex flex-col items-center">
            <h2 class="text-2xl font-semibold text-white mb-4">Support on Ko-fi</h2>
            <p class="text-lg text-white mb-4">Buy us a coffee on Ko-fi to show your support. It fuels our creativity!</p>
            <a href="https://ko-fi.com/yourusername" target="_blank" class="bg-yellow-800 hover:bg-yellow-700 text-white font-bold py-2 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">Buy a ko-fi</a>
            <p class="text-white text-sm mt-4">Your coffee contributions keep us inspired. Thank you for your support!</p>
        </div>

        <!-- Buy Me a Coffee Section -->
        <div class="bg-gradient-to-b from-yellow-400 to-yellow-500 rounded-lg p-4 flex flex-col items-center">
            <h2 class="text-2xl font-semibold text-white mb-4">Buy Me a Coffee</h2>
            <p class="text-lg text-white mb-4">If you enjoy our content, consider supporting us by buying a coffee. It fuels our creativity!</p>
            <a href="https://www.buymeacoffee.com/yourusername" target="_blank" class="bg-yellow-800 hover:bg-yellow-700 text-white font-bold py-2 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                Buy a Coffee
            </a>
            <img src="coffee_cup.png" alt="Buy Me a Coffee" class="mt-6 w-16 h-16 object-cover rounded-full">
        </div>

        <!-- Support on Patreon Section -->
        <div class="bg-gradient-to-b from-purple-400 to-purple-500 rounded-lg p-4 flex flex-col items-center">
            <h2 class="text-2xl font-semibold text-white mb-4">Support on Patreon</h2>
            <p class="text-lg text-white mb-4">Join our Patreon community and enjoy exclusive content and benefits. Your support means the world to us!</p>
            <a href="https://www.patreon.com/yourpage" target="_blank" class="bg-purple-800 hover:bg-purple-700 text-white font-bold py-2 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                Become a Patron
            </a>
            <img src="patreon_logo.png" alt="Support on Patreon" class="mt-6 w-16 h-16 object-contain">
        </div>
    </div>
</div>


<!-- Support on GoFundMe Section -->
<div class="bg-gradient-to-b from-pink-400 to-pink-500 py-10 px-6 rounded-lg shadow-md text-center mb-6">
    <div class="flex flex-col items-center">
        <h2 class="text-2xl font-semibold text-white mb-4">Support on GoFundMe</h2>
        <p class="text-lg text-white mb-4">Join our GoFundMe campaign and contribute to our cause. Your support is greatly appreciated!</p>

        <!-- GoFundMe Campaign Link -->
        <div class="bg-white rounded-lg p-4">
            <h3 class="text-xl font-semibold text-pink-500 mb-2">GoFundMe Campaign</h3>
            <p class="text-gray-700">Visit our GoFundMe page and make a donation:</p>
            <a href="https://www.gofundme.com/your-campaign" target="_blank" class="text-pink-500 hover:underline mt-4">Support Now</a>
        </div>

        <p class="text-white text-sm">Your contribution helps us achieve our goals. Thank you for your generosity!</p>
    </div>
</div>


<!-- Support via Cash App Section -->
<div class="bg-gradient-to-b from-green-400 to-green-500 py-10 px-6 rounded-lg shadow-md text-center mb-6">
    <div class="flex flex-col items-center">
        <h2 class="text-2xl font-semibold text-white mb-4">Support via Cash App</h2>
        <p class="text-lg text-white mb-4">You can contribute to our cause using Cash App. Every donation makes a difference!</p>

        <!-- Cash App Tag -->
        <div class="bg-white rounded-lg p-4">
            <h3 class="text-xl font-semibold text-green-500 mb-2">Cash App Tag</h3>
            <p class="text-gray-700">Send your donation to our Cash App Tag:</p>
            <span class="text-2xl font-semibold text-green-500 mt-2">$YourCashTag</span>
        </div>

        <p class="text-white text-sm">Your support is greatly appreciated. Thank you for using Cash App to contribute!</p>
    </div>
</div>

<!-- Non-Monetary Support Page -->

<div class="container mx-auto p-4">
    <!-- Introduction Section -->
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold mb-4">Support Us in Other Ways</h1>
        <p>There are many ways to support our mission without making a monetary donation. Explore how you can contribute:</p>
    </div>

    <!-- Merchandise Sales -->
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-6">
        <h2 class="text-xl font-bold mb-4">Shop Our Merchandise</h2>
        <p>Support us by purchasing our branded merchandise. Check out our latest products:</p>
        <!-- Example Merchandise Items -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="border p-4 rounded">
                <img src="path_to_tshirt_image.jpg" alt="Branded T-Shirt" class="w-full mb-2">
                <h3 class="font-bold">Branded T-Shirt</h3>
                <p class="text-sm">High-quality cotton t-shirt with our logo.</p>
            </div>
            <div class="border p-4 rounded">
                <img src="path_to_mug_image.jpg" alt="Branded Mug" class="w-full mb-2">
                <h3 class="font-bold">Branded Mug</h3>
                <p class="text-sm">Start your day with a coffee in our branded mug.</p>
            </div>
            <div class="border p-4 rounded">
                <img src="path_to_cap_image.jpg" alt="Branded Cap" class="w-full mb-2">
                <h3 class="font-bold">Branded Cap</h3>
                <p class="text-sm">Stylish cap with embroidered logo.</p>
            </div>
        </div>
    </div>

    <!-- Affiliate Marketing -->
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-6">
        <h2 class="text-xl font-bold mb-4">Use Our Affiliate Links</h2>
        <p>When you shop through our affiliate links, we earn a small commission at no extra cost to you:</p>
        <!-- Example Affiliate Products -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="border p-4 rounded">
                <h3 class="font-bold">Book: 'The Art of Giving'</h3>
                <a href="affiliate_link_for_book" target="_blank" class="text-blue-500 hover:underline">Shop this book on Amazon</a>
            </div>
            <div class="border p-4 rounded">
                <h3 class="font-bold">Eco-Friendly Water Bottle</h3>
                <a href="affiliate_link_for_water_bottle" target="_blank" class="text-blue-500 hover:underline">Buy on EcoShop</a>
            </div>
        </div>
    </div>

    <!-- Volunteer Support -->
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-6">
        <h2 class="text-xl font-bold mb-4">Become a Volunteer</h2>
        <p>Your time and skills are invaluable to us. Join our team of volunteers in various capacities:</p>
        <!-- Example Volunteer Opportunities -->
        <ul class="list-disc pl-5">
            <li>Content Writer</li>
            <li>Event Organizer</li>
            <li>Community Moderator</li>
        </ul>
    </div>

    <!-- Social Media Promotion -->
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-6">
        <h2 class="text-xl font-bold mb-4">Promote Us on Social Media</h2>
        <p>Help us reach a wider audience by sharing our content on your social media platforms:</p>
        <!-- Social Media Sharing Buttons -->
        <div class="flex space-x-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Share on Facebook
            </button>
            <button class="bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Tweet
            </button>
            <button class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">
                Share on Instagram
            </button>
        </div>
    </div>

    <!-- Events and Workshops -->
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-6">
        <h2 class="text-xl font-bold mb-4">Attend Our Events and Workshops</h2>
        <p>Join our events and workshops to engage with our community and learn more about our work:</p>
        <!-- Example Event Information -->
        <div>
            <h3 class="font-bold">Upcoming Workshop: 'Creative Writing Basics'</h3>
            <p class="text-sm">Date: March 25th, 2024 | Location: Zoom</p>
        </div>
    </div>

    <!-- User-Generated Content -->
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-6">
        <h2 class="text-xl font-bold mb-4">Contribute Content</h2>
        <p>Share your knowledge and experience by contributing content to our platform:</p>
        <!-- Example Content Submission Form -->
        <form action="/submit-content" method="post">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="content-title">
                    Content Title
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="content-title" type="text" placeholder="Title of your article, video, etc.">
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                    Submit Content
                </button>
            </div>
        </form>
    </div>
</div> --}}

</x-app-layout>
