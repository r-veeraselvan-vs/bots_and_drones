 <table id="specification_robots_table" class="table">
                        <tr id="-1"  class="main">
                            <th>Parameter</th>
                            <th>Value</th>
                            <th>Action</th>
                        </tr>
                        @foreach($product->specifications as $rkey => $specification)
                         <input type="hidden" name="Robotsspec[{{$rkey}}][product_spec_id]" value="{{ $specification->id }}">
                            <input type="hidden" name="Robotsspec[{{$rkey}}][product_id]" value="{{ $specification->product_id }}">
                        <tr id="{{$rkey}}" class="main">
                         <td>
                            <input type="text" class="form-control" name="Robotsspec[{{$rkey}}][tech_parameter]"  value="{{$specification->parameters}}"   placeholder="Enter Parameter" >
                            
                        </td>
                        <td>
                            <input class="form-control" type="text" name="Robotsspec[{{$rkey}}][tech_value]" value="{{$specification->value}}"   placeholder="Enter Value" >
                        </td>
                         <td>
                            <a  style="cursor: pointer;"  onclick='specificationDelete("{{$specification->id}}","robots")' ><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                        </td>
                       
                    </tr>
                    @endforeach
                    </table>