@extends('layouts.lay')

@section('content')
    <!-- <header> -->
        <div class="container-fluid align-items-center">
            <div class="container carding">

                        <!-- <Stack direction="row" spacing={2} class="rtyrty">
                            <Item id="mina">M</Item>
                            <Item id="ina">ina</Item>
                            <Item id="D" class="maroon">D</Item>
                            <Item id="d" class="maroon">rill</Item>
                            <Item id="D">B</Item>
                            <Item id="d">last</Item>
                        </Stack>
                        <p id="qweqwe">Your Gateway to Underground Mining Excellence!</p> -->
                        <img class="image" src={{asset('mineblast-final.png')}} alt="Mineblast Image"/>


                        <div class="links">
                            <Item><a href="{{ route('registration') }}" class="btn btn-secondary btn-outline-danger">Register</a></Item>

                            <Item> <a href="{{ route('ulogin') }}" class="btn btn-secondary btn-outline-danger ml-3">Login</a></Item>
                        </div>
                    <!-- </div>
                </div> -->
            </div>
        </div>
    <!-- </header> -->

    @endsection
