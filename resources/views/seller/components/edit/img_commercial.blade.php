 <table id="image_commercial_table" class="table">
                        <tr id="-1" class="main">
                            <th>Image</th>
                            <th>Preview</th>
                            <th>Display Order</th>
                            <th>Action</th>
                        </tr>
                         @foreach($product->images as $ckey => $image)
                        <tr id="{{$ckey}}" class="main">
                            <input type="hidden" name="Commercialdata[{{$ckey}}][product_image_id]" value="{{ $image->id }}">
                            <input type="hidden" name="Commercialdata[{{$ckey}}][product_id]" value="{{ $image->product_id }}">
                        <td>
                              <div class="input-group">
                                     <input type="file" onChange="display_image_image(this, {{$ckey}})" name="Commercialdata[{{$ckey}}][image]" class="form-control"   >
                              </div>
                        </td>
                        <td>
                            <img src="{{ $image->ImageUrl }}" alt="" width="40px" height="40px" id="preview_image_image-1">
                        </td>
                       <input type="hidden" name="Commercialdata[{{$ckey}}][old_image]" value="{{ $image->image }}">
                        <td>
                            <input class="form-control" type="number" name="Commercialdata[{{$ckey}}][display_order]" value="{{ $image->display_order }}">
                        </td>
                        
                              @if($ckey!=0)
                          <td> <a style="cursor: pointer;"  onclick='imageDelete("{{$image->id}}","commercial")'><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                           </td> @else
<td disabled><span class="badge bg-light" style="cursor: not-allowed;pointer-events: all !important;background-color: #d5c3c4 !important;
    color: #514949;"><i class="bi bi-trash"></i></span></td>
                            @endif
                     </tr> 
                    @endforeach
                    </table>