<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-envelope icon-white"></i>
        <span class="hidden-phone"> Messages </span>
        <span class="badge badge-inverse">{{ $count_read }}</span>
    </a>
    <ul class="dropdown-menu widget">
        <li>
            <a href="#" class="send" rel="tooltip" title="New Message"><i class="icon-edit"></i></a>
            <h2><i class="icon-envelope"></i> Messages <span class="badge badge-light small">{{ count($messages) }}</span></h2>
        </li>
        @foreach($messages as $message)
        <li>
            <a href='/messages/{{ $message->from }}' class='message'>
                <small>1 hour ago</small>
                <h3><i class='icon-user'></i> {{ $message->from }}</h3>
                <p>{{ $message->message }}</p>
            </a>
        </li>
        @endforeach
        <li><a href="/messages" class="text-center"><i class="icon-inbox"></i> View All Messages</a></li>
    </ul>
</li>