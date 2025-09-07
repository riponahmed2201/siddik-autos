@extends('web.master')

@section('title', 'Pricing')

@section('content')
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Our Car Rental Pricing</h1>
            <p class="text-indigo-600 mt-2 text-xl">Airport Pickup &amp; Drop Price:</p>
        </div>

        <p class="text-sm text-gray-700 mb-4 font-medium">Price list of dhaka airport rent a car services to various part of the City for vehicle Sedan/Toyota Axio, Sedan/Toyota Allion/Premio, Toyota Noah/7 Seater, Toyota Hiace/11 Seater, Nissan URVAN/Toyota High Roof Hiace/17 Seater, Tourist Bus/29 Seater (Updated 2024):</p>

        @php
            $fromLocations = \App\Models\Pricing::select('from_location')->distinct()->orderBy('from_location')->pluck('from_location');
            $from = request('from') && $fromLocations->contains(request('from')) ? request('from') : ($fromLocations->first() ?? '');
            $vehicleTypes = \App\Models\VehicleType::where('is_active', true)->get();
            $destinationsByZone = \App\Models\Destination::where('is_active', true)
                ->orderByRaw("CASE zone WHEN 'Zone 1' THEN 1 WHEN 'Zone 2' THEN 2 WHEN 'Zone 3' THEN 3 WHEN 'Zone 4' THEN 4 WHEN 'Zone 5' THEN 5 ELSE 99 END")
                ->orderBy('name')
                ->get()
                ->groupBy('zone');
        @endphp

        @if($fromLocations->isNotEmpty())
            <form method="GET" action="{{ url('pricing') }}" class="mb-6">
                <label class="text-sm font-medium text-gray-700 me-2">From Location:</label>
                <select name="from" class="border border-gray-300 rounded px-3 py-2" onchange="this.form.submit()">
                    @foreach($fromLocations as $loc)
                        <option value="{{ $loc }}" @selected($from===$loc)>{{ $loc }}</option>
                    @endforeach
                </select>
            </form>
        @endif

        @foreach($destinationsByZone as $zone => $destinations)
            <div class="overflow-x-auto mb-12">
                <table class="min-w-full border border-gray-200 text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-3 py-2 border">From ({{ $from }})</th>
                            <th class="px-3 py-2 border">Destination</th>
                            @foreach($vehicleTypes as $vt)
                                <th class="px-3 py-2 border text-center">{{ $vt->name }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($destinations as $dest)
                            <tr>
                                <td class="px-3 py-2 border">{{ $from }}</td>
                                <td class="px-3 py-2 border">{{ $dest->name }}</td>
                                @foreach($vehicleTypes as $vt)
                                    @php
                                        $price = \App\Models\Pricing::where('from_location',$from)
                                            ->where('destination_id',$dest->id)
                                            ->where('vehicle_type_id',$vt->id)
                                            ->value('price');
                                    @endphp
                                    <td class="px-3 py-2 border text-center">{{ $price ? number_format($price,0) : '-' }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-2 text-sm text-gray-600 font-semibold">{{ $zone }}</div>
            </div>
        @endforeach
    </div>
</section>
@endsection
