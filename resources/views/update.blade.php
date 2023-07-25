<header class="tm-site-header">
        <h1 class="tm-mt-0 tm-mb-15"><span class="tm-color-primary">CCI FYP </span> <span class="tm-color-gray-2">Year 2022/2023</span></h1>
        <em class="tm-tagline tm-color-light-gray">student project update</em>
    </header>
<form action="/other" method="post">
@csrf
<br><br>
<input type="hidden" name="id" value = "{{$disp['id']}}"><br>
<label>Progress</label>
    <select name="progress" style="background-color:#96D4D4">
    <optgroup>
        <option value="Milestone 1">Milestone 1 </option>
        <option value="Milestone 2">Milestone 2 </option>
        <option value="Final Report">Final Report</option>
    </optgroup>
    </select><br>

    <label>Status</label>
    <select name="status" style="background-color:#96D4D4">
    <optgroup>
      <option value="On Track">On Track</option>
      <option value="Delayed">Delayed</option>
      <option value="Extended">Extended</option>
      <option value="Completed">Completed</option>
    </optgroup>
    </select><br>

    Start Date : <input type="date" name="start" style="background-color:#96D4D4 " value = "{{$disp['start']}}"><br>
    End Date : <input type="date" name="end" style="background-color:#96D4D4 " value=  "{{$disp['end']}}"><br>
    <button type="submit">Update</button></td>
    <button type="reset">Reset </button>
</form>
     

