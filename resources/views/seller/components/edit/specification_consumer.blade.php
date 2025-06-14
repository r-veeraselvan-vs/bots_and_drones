<table id="specification_consumer_table" class="table">
                        <tr id="-1"  class="main">
                            <th>Parameter</th>
                            <th>Value</th>
                            <th>Action</th>
                        </tr>
                       @foreach($product->specifications as $ikey => $specification)
                         <input type="hidden" name="spec[{{$ikey}}][product_spec_id]" value="{{ $specification->id }}">
                            <input type="hidden" name="spec[{{$ikey}}][product_id]" value="{{ $specification->product_id }}">
                        <tr id="{{$ikey}}" class="main">
                         <td>
                            <input type="text" class="form-control" name="spec[{{$ikey}}][tech_parameter]"  value="{{$specification->parameters}}"   placeholder="Enter Parameter"  required>
                            
                        </td>
                        <td>
                            <input class="form-control" type="text" name="spec[{{$ikey}}][tech_value]" value="{{$specification->value}}"  placeholder="Enter Value" required>
                        </td>
                         <td>
                            <a   style="cursor: pointer;"  onclick='specificationDelete("{{$specification->id}}","consumer")' ><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                        </td>
                       
                    </tr>
                    @endforeach                    </table>