 <table id="specification_commercial_table" class="table">
                        <tr id="-1"  class="main">
                            <th>Parameter</th>
                            <th>Value</th>
                            <th>Action</th>
                        </tr>
                        @foreach($product->specifications as $ckey => $specification)
                         <input type="hidden" name="Commercialspec[{{$ckey}}][product_spec_id]" value="{{ $specification->id }}">
                            <input type="hidden" name="Commercialspec[{{$ckey}}][product_id]" value="{{ $specification->product_id }}">
                        <tr id="{{$ckey}}" class="main">
                         <td>
                            <input type="text" class="form-control" name="Commercialspec[{{$ckey}}][tech_parameter]" placeholder="Enter Parameter" value="{{$specification->parameters}}" required>
                            
                        </td>
                        <td>
                            <input class="form-control" type="text" name="Commercialspec[{{$ckey}}][tech_value]" placeholder="Enter Value" value="{{$specification->value}}"required>
                        </td>
                         <td>
                            <a style="cursor: pointer;"  onclick='specificationDelete("{{$specification->id}}","commercial")' ><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                        </td>
                       
                    </tr>
                    @endforeach
                    </table>