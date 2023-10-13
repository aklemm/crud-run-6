<table>
    <tr>
        <th>
            Name
        </th>
        <th>
            Description
        </th>
    </tr>
        <tr>
            <td>
                {{ $item->name }}
            </td>
            <td>
                {{ $item->description }}
            </td>
            <td>
                {{ $item->created_by_user->name }}
            </td>
        </tr>
</table>
