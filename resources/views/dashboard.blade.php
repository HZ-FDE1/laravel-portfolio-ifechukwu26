@extends('layout.layout')

@section('content')
<table border="2px solid black" class="dashboard">

    <tr>
        <th>Quartile</th>
        <th>Course</th>
        <th>Exam</th>
        <th>EC</th>
        <th>Grade</th>
    </tr>
    <tr>
        <td rowspan="5">1</td>
        <td>Program and Career Orientation(PCO)</td>
        <td>Assessment website(Individual process assessment)</td>
        <td>2.5</td>
        <td>---</td>

    </tr>
    <tr>
        <td>Computer Science Basics(CSB)</td>
        <td>Written Knowledge test</td>
        <td>5</td>
        <td>---</td>

    </tr>
    <tr>
        <td>Programming Basics (PBA)</td>
        <td>Case study exam</td>
        <td>5</td>
        <td>---</td>

    </tr>
    <tr>
        <td>IT Personality Project Week 1 (PPW1)</td>
        <td>Portfolio</td>
        <td>1.25</td>
        <td>---</td>

    </tr>
    <tr>
        <td>IT Personality 1 (ITP1)</td>
        <td>Portfolio</td>
        <td>1.25</td>
        <td>---</td>

    </tr>
    <tr>
        <td rowspan="2">2</td>
        <td>Object-Oriented programming(OOP)</td>
        <td>Presentation</td>
        <td rowspan="2">10</td>
        <td>---</td>

    </tr>
    <tr>
        <td>Object-Oriented programming (OOP)</td>
        <td>Case study exam</td>
        <td>---</td>

    </tr>
    <tr>
        <td rowspan="4">3</td>
        <td>Framework Development 1 (FDE1)</td>
        <td>Case study exam</td>
        <td>5</td>
        <td>---</td>

    </tr>
    <tr>
        <td>Framework Project 1 (FPR1)</td>
        <td>Criterium based interview</td>
        <td rowspan="3">7,5</td>
        <td>---</td>

    </tr>
    <tr>
        <td>Framework Project 1 (FPR1)</td>
        <td>Assignment</td>
        <td>---</td>

    </tr>
    <tr>
        <td>Framework Project 1 (FPR1)</td>
        <td>Case study exam</td>
        <td>---</td>

    </tr>
    <tr>
        <td rowspan="7">4</td>
        <td>Framework Project 2 (FPR2)</td>
        <td>Final delivery</td>
        <td rowspan="3">10</td>
        <td>---</td>

    </tr>
    <tr>
        <td>Framework Project 2 (FPR2)</td>
        <td>Report of acceptance tests and optional assesments</td>
        <td>---</td>

    </tr>
    <tr>
        <td>Framework Project 2 (FPR2)</td>
        <td>IT Development Portfolio</td>
        <td>---</td>

    </tr>
    <tr>
        <td>IT Personality International week (PIW)</td>
        <td>Portfolio</td>
        <td> 1.25</td>
        <td>---</td>

    </tr>
    <tr>
        <td>IT Personality 2 (ITP2)</td>
        <td>Portfolio</td>
        <td>1.25</td>
        <td>---</td>

    </tr>
    <tr>
        <td>Personal Professional Development: Exploration (PPD-E) (INT Class)</td>
        <td>English test</td>
        <td rowspan="2">12,5</td>
        <td>---</td>

    </tr>
    <tr>
        <td>Personal Professional Development: Exploration (PPD-E) (INT Class)</td>
        <td>Criterium focused interview</td>
        <td>---</td>
    </tr>
</table>
<div class="nbsa-data">
    <h1 class="heading">NBSA boundary</h1>
    <p>In order to pass each year 60 European credits are needed. when you get below 45 European credits you can't continue the course</p>
    <div class="nbsa-titles">
        <h3 class="nbsa-name">To pass</h3>
        <span class="nbsa-number">60 ECT needed</span>
    </div>
    <div class="nbsa-bar">
        <span class="nbsa-percentage"></span>
    </div>
</div>
@endsection
