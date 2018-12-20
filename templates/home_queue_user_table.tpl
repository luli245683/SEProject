     
       <table>
        <thead>
            <th>Account</th>
            <th>Name</th>
        </thead>
        <tbody>
            {foreach from=$user_list item=user}
            <tr>
                <td>{$user.Account}</td>
                <td>{$user.FirstName} , {$user.LastName}</td>
            </tr>
            {/foreach}
        </tbody>
    </table>