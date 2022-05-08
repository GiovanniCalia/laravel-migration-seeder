<header>

    <ol>
        @foreach ($trains as $train)
        <li class="box">
            {{ $train->Azienda }},
            {{ $train->Stazione_di_partenza}},
            {{ $train->Stazione_di_arrivo }}
            {{ $train->Data_di_partenza }}
        </li>     
        @endforeach
    </ol>

    {{ $trains->links() }}
</header>