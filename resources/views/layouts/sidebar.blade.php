<div class="list-group"> 
    <a href="{{ route('home') }}" class="list-group-item {{ url()->current()==route('home')? 'active' : '' }}">
        <i class="fas fa-home pr-2"></i><span>一覧表示</span>
    </a>
    <a href="{{ route('post.create') }}" class="list-group-item {{ url()->current()==route('post.create')? 'active' : '' }}">
        <i class="fas fa-pen-nib pr-2"></i><span>新規投稿</span>
    </a>
    <a href="{{ route('home.mypost') }}" class="list-group-item {{ url()->current()==route('home.mypost')? 'active' : '' }}">
        <i class="fas fa-user-edit pr-2"></i><span>自分の投稿</span>
    </a>
    <a href="{{ route('home.mycomment') }}" class="list-group-item {{ url()->current()==route('home.mycomment')? 'active' : '' }}">
        <i class="fas fa-user-edit pr-2"></i><span>コメントした投稿</span>
    </a>
    <a href="{{ route('profile.edit', auth()->user()->id) }}" class="list-group-item {{ url()->current()==route('profile.edit', auth()->user()->id)? 'active' : '' }}">
        <i class="fas fa-user-edit pr-2"></i><span>プロフィール編集</span>
    </a>
    @can('admin')
        <a href="{{ route('profile.index') }}" class="list-group-item {{ url()->current()==route('profile.index')? 'active' : '' }}">
            <i class="fas fa-user-edit pr-2"></i><span>ユーザーアカウント</span>
        </a>
    @endcan
</div>