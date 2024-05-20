<div class="container">
    <div class="row">
        <ul>
            <li>
                {{-- <!-- inserisco l'url di destinazione nell'href --> --}}
                <a href="{{ URL::to('link1') }}">
                    LINK 1
                </a>
            </li>
            <li>
                <a href="{{ url('link2') }}">
                    LINK 2
                </a>
            </li>
            <li>
                <a href="{{ url('link3') }}">
                    LINK 3
                </a>
            </li>
        </ul>
    </div>
</div>