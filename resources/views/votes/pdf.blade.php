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
        .letter-body p, .signature {
            font-size: 14px;
            line-height: 1.6;
        }
        img.map-image {
            display: block;
            max-width: 100%;
            height: auto;
            margin: 20px auto;
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
    </style>
</head>
<body>
    <div class="letter-header">
        <h1>Balfour Declaration Simulation</h1>
        <p>Date: {{ now()->format('F d, Y') }}</p>
    </div>

    <div class="letter-body">
        <p>Dear Participants,</p>

        <p>In this simulation, {{ $vote->user->username }} selected a new national home, demonstrating a unique perspective on historical possibilities. The details are as follows:</p>

        <p><strong>Chosen Country:</strong> {{ $vote->country->name }}</p>
        <img src="path/to/country/map.svg" alt="Map of {{ $vote->country->name }}" class="map-image" style="max-width: 90%; height: auto;">

        <p><strong>Percentage for the New National Home:</strong></p>
        <div class="slider-container">
            <div class="slider-percentage" style="width: {{ $vote->percentage }}%;">{{ $vote->percentage }}%</div>
        </div>

        <p><strong>Decisions:</strong></p>
        <ul>
            @foreach ($vote->options as $selectedOption)
            <li>{{ $selectedOption->name }}</li>
            @endforeach
        </ul>

        <p><strong>Notes:</strong> {{ $vote->notes ?? 'N/A' }}</p>

        <p>This letter confirms the reflective and thoughtful participation of our community in reimagining pivotal historical decisions.</p>

        <p class="signature">Sincerely,</p>
        <p class="signature">[Organization Name]</p>
    </div>

    <div class="letter-footer">
        <p>We appreciate your engagement in this educational journey.</p>
    </div>
</body>
</html>
