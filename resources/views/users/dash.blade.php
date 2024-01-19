<!-- resources/views/i_dash.blade.php -->

@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')


        @include('layouts.navbar')
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Instructor Dashboard') }}</div>

                    <div class="card-body"> -->
                        <!-- <p>Welcome, {{ Auth::guard('web')->user()->username }}!</p> -->
                        <!-- You can add more content to your dashboard as needed -->
                        <!-- For example, display instructor-specific information or actions -->
                    <!-- </div>
                </div>
            </div>
        </div>
    </div> -->



        <div id="dynamicContent" class="bg-info p-4 position-absolute" style="border-top-left-radius: 50px; border-top-right-radius: 50px; border-bottom-right-radius: 50px; width: 400px; font-family:cursive; font-weight: bold; top: 170px; left: 850px;">

        </div>
        <!-- <div id="dynamiContent">

        </div> -->
        <script>
            // JSON object with different messages
            document.addEventListener('DOMContentLoaded', function () {
            // Sample JSON data
            var jsonData = [
                { "message": "Are we meeting today? Project has been already finished and I have results to show you." },
                { "introduction": "Let us step into the thrilling world of underground mining drilling and blasting cycle operations! Experience the orchestrated dance between machinery and precision techniques beneath the Earth’s surface." },
                { "invitation": "So, get ready for an immersive experience as we navigate the pulse of the underground. Let the adventure begin!" },
                { "question": "Are you excited? Now, click the explore button below." }
            ];

            // Initialize index for cycling through messages
            var currentIndex = 0;

            // Function to update dynamic content
            function updateDynamicContent() {
                var dynamicContentDiv = document.getElementById('dynamicContent');
                var data = jsonData[currentIndex];
                // dynamicContentDiv.innerHTML = '<p><strong>' + Object.keys(data)[0] + ':</strong> ' + Object.values(data)[0] + '</p>';
                dynamicContentDiv.innerHTML = '<p>' + Object.values(data)[0] + '</p>';

                // Increment index or reset to 0
                currentIndex = (currentIndex + 1) % jsonData.length;

                // Set a 5-second delay before updating the content again
                setTimeout(updateDynamicContent, 5000);
            }

            // Initial call to start the cycle
            updateDynamicContent();
            });
        </script>
        <img class="image mx-auto d-block" src={{asset('Avatar.png')}}  style="width: 450px; margin-top: 50px;" alt="Avatar"/>
@endsection

