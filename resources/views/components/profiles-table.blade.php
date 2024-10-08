<table border="1" style="border-collapse: collapse; width: 100%;">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Bio</th>
        </tr>
    </thead>
    <tbody>
        @if ($profiles->isEmpty())
            <tr>
                <td colspan="4">No profiles found.</td> <!-- Updated colspan to 4 -->
            </tr>
        @else
            @foreach ($profiles as $profile)
                <tr>
                    <td>
                        <a href="{{ route('homepage.show', $profile->id) }}">{{ $profile->id }}</a>
                    </td>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->email }}</td>
                    <td>
                        <span>{{ Str::limit($profile->bio, 10, '...') }}</span> 
                        <a href="{{ route('homepage.show', $profile->id) }}" style="color: blue;">more</a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

{{ $profiles->links() }}
