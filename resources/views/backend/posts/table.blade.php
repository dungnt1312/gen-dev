<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
            <tr>
                <th>Title</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                       <td>{{ $post->title }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['backend.posts.destroy', $post->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('backend.posts.show', [$post->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('backend.posts.edit', [$post->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
