
  @extends('dashboard')

  @section('title')
      users
  @endsection
  @section('content')
      <div class="d-flex justify-content-center align-items-center"  style="height: 100vh">

        <table class="table w-50">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Date create</th>
              <th scope="col">Add role</th>
            </tr>
          </thead>
          <tbody>
        
        
        @foreach($users as $user)
        @if ($user->id != Auth::user()->id)  
        <tr>
          <th scope="row">{{ _($i++) }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->created_at }}</td>    
                  @if (!$user->role)
                    <td><a href="{{route('addAdmin',['id'=>$user->id])}}" class="btn btn-primary">Add Admin</a></td>  
                  @endif
                </tr>
              @endif
            @endforeach
        </tbody>
      </table>
    </div>
      
      @endsection
      