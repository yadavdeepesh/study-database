<div>
    <h1>Profile</h1>

      @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif
    

    @if(session('user'))
    <h2>Welcome to the ,{{session('user')}}</h2>
    @else
    <h2>user not found</h2>
    @endif

    <a href="logout">logout</a>

    <a href="login-user">login</a>
    <pre>
    
@dd(
    session('allData'),
    session('allData')['email'],
    session('allData')['password']
)


</pre>
</div>