<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 12px;
  padding: 0; 
   margin: 0;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  
}


</style>
  </head>
  <body>
  <p style="text-align: center;"><strong><span style="font-size: 12px; font-family: Arial, Helvetica, sans-serif;">PCIEERD - DOST</span></strong></p><p style="text-align: center;"><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;"><strong>INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW (IPCR)</strong></span></span></p>
  <p style="text-align: center;"><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;">I, {{  $name }} of the PCIEERD-{{$users55->division->division_name}}, commit to deliver and agree to be rated on the attainment of the following targets in accordance with the indicated measures for the period {{ $month }} {{ $ipcr55->year }}.</span></span></p>
  <table style="width: 100%;">
    <tbody>
        <tr style="border-top-style:hidden">
            <td style="width: 25.0000%;border-left-style:hidden;border-top-style:hidden;"></td>
            <td style="width: 24.9589%;border-left-style:hidden;border-top-style:hidden"><p></p><div style="text-align: center;"><br></div><div style="text-align: center;"><u style="box-sizing: border-box; color: rgb(65, 65, 65); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><strong style="box-sizing: border-box; font-weight: 700;">{{ $name}}</strong></u></div><div style="text-align: center;"><span style="font-size: 12px;">Employee</span></div><br></td>
            <td style="width: 24.959%;border-left-style:hidden;border-top-style:hidden"></td>
            <td style="width: 25.0000%;border-left-style:hidden;border-right-style:hidden;border-top-style:hidden"><div style="text-align: center;"></div><div style="text-align: center;"><br></div><div style="text-align: center;"><u style="box-sizing: border-box; color: rgb(65, 65, 65); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><strong style="box-sizing: border-box; font-weight: 700;">{{ $date}}</strong></u></div><div style="text-align: center;"><span style="font-size: 12px;">Date</span></div><br></td>
        </tr>
        <tr>
            <td style="width: 25.0000%;"><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;">Reviewed by:</span></span></td>
            <td style="width: 24.9589%;"><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;"><br></span></span></td>
            <td style="width: 24.959%;"><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;">Approved by:</span></span></td>
            <td style="width: 25.0000%;"><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;"><br></span></span></td>
        </tr>
        <tr>
            <td style="width: 25.0000%;"><br><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;"></span></span><div style="text-align: center;"><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;"><u><strong>{{$users55->division->division_chief}}</strong></u></span></span></div><div style="text-align: center;"><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;">Division Chief</span></span></div></td>
            <td style="width: 24.9589%;"><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;"></span></span></td>
            <td style="width: 24.959%;"><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;"></span></span><br><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;"><br></span></span><div style="text-align: center;"><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;"><u><strong>Dr. Enrico Paringit</strong></u></span></span></div><div style="text-align: center;"><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;">Executive Director</span></span></div><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;"><br></span></span></td>
            <td style="width: 25.0000%;"><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-size: 12px;"></span></span></td>
        </tr>
    </tbody>
    </table>
    <table id="t01" class="table table-hover table-responsive table-bordered" width="100%" >
            <tr>
              <th width="15%">Major Final Output</th>
              <th width="15%">Success Indicators</th> 
              <th width="15%">Targets</th>
              <th width="15%">Tasks</th>
              <th width="10%">Quality</th>
              <th width="10%">Efficiency</th>
              <th width="10%">Timeliness</th>
              <th width="10%">Average</th>
              <th width="15%">Remarks</th>
              
            </tr>
           
          @php($old_so="")
	         @php($old_si="")
            
            @foreach($targets as $target_index => $target)
              @php($counter = 0)
                @foreach($tasks->where('targets_id', $target->id) as $task_index => $task)
                  @foreach($successindicators55->where('id',$target->successindicators55_id) as $si)
                    @foreach($strategicobjectives->where('id',$si->strategicobjectives55_id) as $so )
                      <tr>
                        @if(!$counter)

                          @if($old_so!=$so->id)
                          <td  rowspan="{{$so_row[$so->id]}}">{{ $so->strategic_objective_name}}</td>
                          @php($old_so = $so->id)

                          @endif

                          @if($old_si!=$si->id)
                          <td  rowspan="{{$si_row[$si->id]}}">{{ $si->success_indicator_name}}</td>
                          @php($old_si = $si->id)
                          @endif
                          
                          <td  rowspan="{{$tasks->where('targets_id', $target->id)->count() ?? '1'}}" style="">{!! $target->name !!}({{$target->percent}}%)</td>
                        @endif

                        <td>{{$task->tasks}}</td>
                        @if(!$counter)
                            <td rowspan="{{$tasks->where('targets_id', $target->id)->count() ?? '1'}}">{{ $target->efficiency }}</td>
                            <td rowspan="{{$tasks->where('targets_id', $target->id)->count() ?? '1'}}">{{ $target->quality }}</td>
                            <td rowspan="{{$tasks->where('targets_id', $target->id)->count() ?? '1'}}">{{ $target->timeliness }}</td>
                            <td rowspan="{{$tasks->where('targets_id', $target->id)->count() ?? '1'}}">{{ $target->eqt_ave }}</td>
                            <td rowspan="{{$tasks->where('targets_id', $target->id)->count() ?? '1'}}"></td>
                        @endif
                      
          
                      </tr>
                     

                    @endforeach
                  @endforeach
                @php($counter++)
              @endforeach   
            @endforeach
            <tr>
                <td colspan="4" style="text-align:right"><strong>Final Average</strong></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="4" style="text-align:right"><strong>Adjectival Rating</strong></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="9">Comments and Recommendations for Development Purposes</td>
            </tr>
              <tr>
                <td colspan="9" height="10px"></td>
            </tr>
            <tr >
                <td colspan="2">Discussed with:</td>
                <td colspan="2" style="text-align:center">I certify that I have discussed my assessment of the performance with the employee</td>
                <td colspan="4" style="text-align:center">Final Rating By:</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" height="30px"></td>
                <td colspan="2" height="30px"></td>
                <td colspan="4" height="30px"></td>
                <td></td>
            </tr>
            <tr >
                <td colspan="2" style="text-align:center"><strong>{{ $name }}</strong></td>
                <td colspan="2" style="text-align:center"><strong>{{$users55->division->division_chief}}</strong></td>
                <td colspan="4" style="text-align:center"><strong>Dr. Enrico C. Paringit</strong></td>
                <td></td>
            </tr>
            <tr >
                <td colspan="2" style="text-align:center">Employee</td>
                <td colspan="2" style="text-align:center">Division Chief</td>
                <td colspan="4" style="text-align:center">Executive Director</td>
                <td></td>
            </tr>
            
          </table>
          
  </body>
</html>