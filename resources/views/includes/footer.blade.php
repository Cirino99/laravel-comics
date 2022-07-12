<footer>
    <section id="footer-up">
        <div>
            <div id="footer-links">
                <div>
                    <h3>{{$arrFooter[0]['text']}}</h3>
                    <ul>
                        @foreach ($arrFooter[0]['links'] as $link)
                            <li>
                                <a href="#">{{$link}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <h3>{{$arrFooter[1]['text']}}</h3>
                    <ul>
                        @foreach ($arrFooter[1]['links'] as $link)
                            <li>
                                <a href="#">{{$link}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3>{{$arrFooter[2]['text']}}</h3>
                    <ul>
                        @foreach ($arrFooter[2]['links'] as $link)
                            <li>
                                <a href="#">{{$link}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3>{{$arrFooter[3]['text']}}</h3>
                    <ul>
                        @foreach ($arrFooter[3]['links'] as $link)
                            <li>
                                <a href="#">{{$link}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div id="footer-logo">

            </div>
        </div>
    </section>
</footer>