<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vote Details - Balfour Declaration Simulation</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            margin: 40px;
            color: #333;
        }
        .letter-header, .letter-footer {
            text-align: center;
            margin-bottom: 40px;
        }
        .letter-body {
            margin-bottom: 40px;
        }
        .letter-body p, .signature {
            font-size: 16px;
            line-height: 1.6;
        }
        .map-container {
            position: relative;
            width: 90%;
            margin: 20px auto;
            height: auto;
            text-align: center;
        }
        .map-container svg {
            max-width: 100%;
            height: auto;
        }
        .slider-container {
            position: relative;
            height: 20px;
            background-color: #ddd;
            border-radius: 10px;
            margin: 20px 0;
        }
        .slider-percentage {
            position: absolute;
            height: 100%;
            background-color: #4CAF50;
            border-radius: 10px;
            text-align: right;
            padding-right: 5px;
            box-sizing: border-box;
            color: white;
            font-weight: bold;
        }
        .address {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    <div class="letter-header">
        <h1>New Balfour Declaration</h1>
        <p>Date: {{ now()->format('F d, Y') }}</p>
    </div>

    <div class="address">
        <p>To: The Ambassador of {{ $vote->country->name }}</p>
        <p>Embassy Address</p>
        <p>City, Country</p>
    </div>

    <div class="letter-body">
        <p>Dear Ambassador,</p>

        <p>I, {{ $vote->user->username }}, acting in the spirit of Arthur Balfour, am writing to you to express a vision for a new national home for the Jewish people.</p>

        <p>In this historical simulation, I have chosen your esteemed country, {{ $vote->country->name }}, as the proposed location for establishing the Zionist state. This choice reflects a thoughtful consideration of historical possibilities and a reimagining of pivotal decisions.</p>

        <p>Since {{ $vote->country->name }} recognizes the establishment of Israel, it stands to reason that there would be no objection to this new national home being on their lands, as they support the existence of such an entity called a national home.</p>

        <p>This promise is more precise than the original Balfour Declaration as it specifies the exact percentage of land to be given to Israel from the native land, unlike the original which did not provide such details.</p>

        <p><strong>Chosen Country:</strong> {{ $vote->country->name }}</p>

        <!-- Debug the path -->
        <p><strong>Image Path:</strong> {{ asset('maps/' . strtolower($vote->country->code) . '/vector.svg') }}</p>

        <div class="map-container">
            <svg viewBox="0 0 800 800" width="600" height="400">
                <defs>
                    <mask id="occupation-mask">
                        <rect id="mask-rect" x="0" y="0" width="{{ $vote->percentage / 100 * 800 }}" height="800" fill="white"></rect>
                    </mask>
                </defs>
                <!-- Original Map Colored Black -->
                <image href="{{ asset('maps/' . strtolower($vote->country->code) . '/vector.svg') }}" width="800" height="800" style="filter: grayscale(100%);"></image>
                <!-- Blue Overlay Map -->
                <image href="{{ asset('maps/' . strtolower($vote->country->code) . '/vector.svg') }}" width="800" height="800" style="filter: brightness(0) saturate(100%) invert(34%) sepia(87%) saturate(6882%) hue-rotate(193deg) brightness(96%) contrast(119%);" mask="url(#occupation-mask)"></image>
            </svg>
        </div>

        <p><strong>Percentage of Land Allocated:</strong></p>
        <div class="slider-container">
            <div class="slider-percentage" style="width: {{ $vote->percentage }}%;">{{ $vote->percentage }}%</div>
        </div>

        <p><strong>Decisions and Considerations:</strong></p>
        <ul>
            @foreach ($vote->options as $selectedOption)
            <li>{{ $selectedOption->name }}</li>
            @endforeach
        </ul>

        <p><strong>Additional Notes:</strong> {{ $vote->notes ?? 'N/A' }}</p>

        <p>We believe that this reimagined vision will provide a meaningful reflection on the historical context and its implications.</p>

        <p class="signature">Sincerely,</p>
        <p class="signature">{{ $vote->user->username }}</p>
    </div>

    <div class="letter-footer">
        <p>Thank you for considering this educational and reflective exercise.</p>
    </div>
</body>
</html>
