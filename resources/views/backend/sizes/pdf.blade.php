<table  b>
                                                            <thead>
                                                                <tr class="text-light">
                                                                    <th>SL#</th>
                                                                    <th>Title</th>
                                                                  
                                                                    <th>IS active</th>
                                                       

                                                            </thead>
                                                            <tbody>
                                                                @foreach($sizes as $size)
                                                                <tr>
                                                                    <th scope="row">{{ $loop->iteration  }}</th>
                                                                    
                                                                    <td>{{ $size->title }}</td>
                                                                    <td>{{ $size->is_active? 'Yes' : 'No' }}

                                                                    </td>
                                                                    
                                                                   
                                                                   

                                                                </tr>
                                                                @endforeach

                                                            </tbody>

                                                        </table>