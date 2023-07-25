<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astro Motion by TemplateMo</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/css/slick.css" type="text/css" /> 
    <link rel="stylesheet" href="admin/css/templatemo-style.css">
    </head>
<body>
    <video autoplay muted loop id="bg-video">
        <source src="admin/video/gfp-astro-timelapse.mp4" type="video/mp4">
    </video>
    <div class="page-container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <div class="cd-slider-nav">
              <nav class="navbar navbar-expand-lg" id="tm-nav">
                <a class="navbar-brand" href="#">Admin Page</a>
                
            </nav>
        </div>
    </div>          
    </div>  
    
        <x-app-layout>
        </x-app-layout>
           
</div>   

<br><br>
<form action="/new" method="post">
@csrf
    Student incharge <input type="text" name="studentname" style="background-color:#33475b"></br></br>
    Project title <input type="text" name="title" style="background-color:#33475b"></br></br>

    <label>Project type</label style="background-color:#33475b">
    <select name="type" style="background-color:#33475b">
    <optgroup style="background-color:#33475b">
      <option value="Development">Development </option>
      <option value="Research">Research</option>
    </optgroup>
    </select>
    </br></br>

    supervisor <input type="text" name="supervisor" style="background-color:#33475b" ></br></br>
    examiner 1 <input type="text" name="examone" style="background-color:#33475b"></br></br>
    examiner 2 <input type="text" name="examtwo" style="background-color:#33475b"></br></br>
    <button type="submit">Add project </button>  &nbsp
    <button type="reset">Reset </button>
</form>


<br><br>
<style>
    td{
        text-align: center;
    }
    table{
        background-color: #96D4D4 
    }
</style>
    <table border="2" style="width:100%">
        <tr>
            <td>Project Title  </td>
            <td>Project Type</td>
            <td>Student Incharge  </td>
            <td>Project Progress</td>
            <td>Project Status</td>
            <td>Start Date</td>
            <td>End Date</td>
            <td>supervisor  </td>
            <td>examiner 1  </td>
            <td>examiner 2  </td>
        </tr>

        @foreach($member as $x)
        <tr>
            <td>{{$x['title']}}</td>
            <td>{{$x['type']}}</td>
            <td>{{$x['studentname']}}</td>
            <td>{{$x['progress']}}</td>
            <td>{{$x['status']}}</td>
            <td>{{$x['start']}}</td>
            <td>{{$x['end']}}</td>
            <td>{{$x['supervisor']}}</td>
            <td>{{$x['examone']}}</td>
            <td>{{$x['examtwo']}}</td>

        </tr>
        @endforeach
    </table>
    <span>
        {{$member->links()}}
    </span>
    <style>
        .w-5
        {
            display:none
        }
    </style>