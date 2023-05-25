<table>
    <thead>
        <tr>
            <th>Group</th>
            <th>Group/Heads</th>
            <th>Total Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach($groups as $group)
            <tr>
                <td>{{ $group->name }}</td>
                <td>
                        @foreach($group->subGroups as $subGroup)
                            <td>{{ $subGroup->name }}</td> 
                        @endforeach
                        @foreach($group->accountHead as $accountHead)
                            <td>{{ $accountHead->name }}</td>                    
                        @endforeach
                </td>
                <td>{{ $group->getTotalAmount() }}</td>
            </tr>
        @endforeach
    </tbody>
</table>