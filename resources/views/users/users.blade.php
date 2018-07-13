@if (count($users) > 0)
<ul class="media-list">
    <div class=row>
        @foreach ($users as $user)
        
            <div class="users">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel default">
                        <li class="media">
                            <div class="panel-heading">
                                <img class="media-object img-rounded" src="{{ Gravatar::src($user->name, 50) }}" alt="" height="80" width="80">
                            </div>
                            <div class="media-body">
                                <div class="panel-body">
                                    <div>
                                        <p class="users-title">{{ $user->name }} ({{ $user->hometeam }},{{ $user->codingteam }})</p>
                                    </div>
                                    <div>
                                        <p>私の趣味は、[{{ $user->hobby }}]で、チャームポイントは[{{ $user->charmpoint }}]なんだ。</p>
                                    </div>
                                    <div>
                                        <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>
                                    </div>
                                    <div class="buttons">
                                        @include('user_friend.friend_button', ['user' => $user])
                                        @include('user_friend.zuttomo_button', ['user' => $user])
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
        
        @endforeach
    </div>
</ul>
{!! $users->render() !!}
@endif